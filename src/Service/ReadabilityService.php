<?php

namespace App\Service;

/**
 * ReadabilityService — API 2 : Score de lisibilité
 *
 * Implements a French-adapted Flesch-Kincaid readability algorithm.
 * French averages ~1.8 syllables/word vs English ~1.5, so the formula
 * is adjusted accordingly.
 *
 * Score interpretation:
 *   90–100 : Très facile (enfant de 10 ans)
 *   70–90  : Facile (grand public)
 *   50–70  : Intermédiaire (lycéen)
 *   30–50  : Difficile (étudiant universitaire)
 *   0–30   : Très difficile (expert)
 */
class ReadabilityService
{
    /**
     * Full analysis of a text.
     * Returns an array with score, level, word count, sentence count,
     * avg sentence length, avg syllables/word, and recommendations.
     */
    public function analyze(string $text): array
    {
        $text = strip_tags($text);
        $text = preg_replace('/\s+/', ' ', trim($text));

        if (mb_strlen($text) < 20) {
            return $this->emptyResult('Contenu trop court pour l\'analyse.');
        }

        $words     = $this->countWords($text);
        $sentences = $this->countSentences($text);
        $syllables = $this->countSyllablesFrench($text);

        if ($words === 0 || $sentences === 0) {
            return $this->emptyResult('Impossible d\'analyser ce contenu.');
        }

        $avgWordsPerSentence   = $words / $sentences;
        $avgSyllablesPerWord   = $syllables / $words;

        // French-adapted Flesch formula
        // Original: 206.835 - 1.015*(W/S) - 84.6*(Syl/W)
        // French adjustment: coefficient 84.6 → 68.0 (French is more syllabic)
        $score = 206.835
               - (1.015  * $avgWordsPerSentence)
               - (68.0   * $avgSyllablesPerWord);

        $score = max(0, min(100, round($score, 1)));

        [$level, $levelColor, $levelIcon] = $this->interpretScore($score);

        $recommendations = $this->buildRecommendations(
            $avgWordsPerSentence,
            $avgSyllablesPerWord,
            $words,
            $sentences
        );

        return [
            'score'                   => $score,
            'level'                   => $level,
            'level_color'             => $levelColor,
            'level_icon'              => $levelIcon,
            'word_count'              => $words,
            'sentence_count'          => $sentences,
            'syllable_count'          => $syllables,
            'avg_words_per_sentence'  => round($avgWordsPerSentence, 1),
            'avg_syllables_per_word'  => round($avgSyllablesPerWord, 2),
            'recommendations'         => $recommendations,
        ];
    }

    // ── Private helpers ───────────────────────────────────────────

    private function countWords(string $text): int
    {
        $words = preg_split('/[\s\-\'\"]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
        return count(array_filter($words, fn($w) => mb_strlen($w) > 1));
    }

    private function countSentences(string $text): int
    {
        // Split on . ! ? ; followed by space or end of string
        $count = preg_match_all('/[.!?;]+(?:\s|$)/u', $text);
        return max(1, $count);
    }

    /**
     * French syllable counter — counts vowel groups as syllable nuclei.
     * Not perfect but accurate enough for scoring (±5%).
     */
    private function countSyllablesFrench(string $text): int
    {
        $text  = mb_strtolower($text);
        $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
        $total = 0;

        foreach ($words as $word) {
            // Remove non-alpha
            $word = preg_replace('/[^a-zàâäéèêëîïôùûüœæç]/u', '', $word);
            if (!$word) continue;

            // Count vowel groups (consecutive vowels = 1 syllable)
            $count = preg_match_all('/[aeiouyàâäéèêëîïôùûüœæ]+/u', $word);
            // Silent 'e' at end of word doesn't count (common French rule)
            if (mb_substr($word, -1) === 'e' && $count > 1) {
                $count--;
            }
            $total += max(1, $count);
        }

        return $total;
    }

    private function interpretScore(float $score): array
    {
        if ($score >= 80) return ['Très facile',      '#15803d', '😊'];
        if ($score >= 65) return ['Facile',            '#22c55e', '🙂'];
        if ($score >= 50) return ['Intermédiaire',     '#f59e0b', '😐'];
        if ($score >= 35) return ['Difficile',         '#f97316', '😕'];
        return                   ['Très difficile',    '#dc2626', '😰'];
    }

    private function buildRecommendations(
        float $avgWords,
        float $avgSyllables,
        int   $wordCount,
        int   $sentenceCount
    ): array {
        $recs = [];

        if ($avgWords > 25) {
            $recs[] = [
                'type'    => 'warning',
                'icon'    => '✂️',
                'message' => sprintf(
                    'Vos phrases sont longues en moyenne (%.0f mots). Essayez de les diviser en phrases de 15–20 mots.',
                    $avgWords
                ),
            ];
        } elseif ($avgWords < 8) {
            $recs[] = [
                'type'    => 'info',
                'icon'    => '📝',
                'message' => 'Vos phrases sont très courtes. Un peu plus de développement améliorera la fluidité.',
            ];
        }

        if ($avgSyllables > 2.2) {
            $recs[] = [
                'type'    => 'warning',
                'icon'    => '📚',
                'message' => 'Vocabulaire complexe détecté. Préférez des mots courants quand c\'est possible.',
            ];
        }

        if ($wordCount < 100) {
            $recs[] = [
                'type'    => 'info',
                'icon'    => '📖',
                'message' => 'Article court (< 100 mots). Développez votre contenu pour plus d\'impact.',
            ];
        }

        if (empty($recs)) {
            $recs[] = [
                'type'    => 'success',
                'icon'    => '✅',
                'message' => 'Excellent ! Votre article est bien équilibré en termes de lisibilité.',
            ];
        }

        return $recs;
    }

    private function emptyResult(string $message): array
    {
        return [
            'score'                   => null,
            'level'                   => 'N/A',
            'level_color'             => '#94a3b8',
            'level_icon'              => '❓',
            'word_count'              => 0,
            'sentence_count'          => 0,
            'syllable_count'          => 0,
            'avg_words_per_sentence'  => 0,
            'avg_syllables_per_word'  => 0,
            'recommendations'         => [['type' => 'info', 'icon' => 'ℹ️', 'message' => $message]],
        ];
    }
}
