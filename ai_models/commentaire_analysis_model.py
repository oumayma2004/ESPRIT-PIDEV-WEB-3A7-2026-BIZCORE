import json
import re
import sys
import unicodedata


POSITIVE_WORDS = [
    "excellent", "super", "magnifique", "parfait", "bravo", "genial", "incroyable",
    "fantastique", "merveilleux", "top", "bien", "bon", "bonne", "tres bien",
    "j aime", "adore", "formidable", "exceptionnel", "great", "good", "amazing",
    "awesome", "love", "best", "nice", "cool", "wow", "parfaitement",
    "recommande", "satisfait", "content", "heureux", "agreable", "positif",
    "enrichissant", "interessant", "utile", "efficace", "qualite", "professionnel",
]

NEGATIVE_WORDS = [
    "mauvais", "nul", "horrible", "catastrophe", "decu", "decevant", "probleme",
    "ennuyeux", "cher", "trop cher", "mal", "mediocre", "insuffisant", "manque",
    "bad", "poor", "terrible", "awful", "hate", "worst", "boring", "expensive",
    "disappointing", "disappointed", "pas bien", "pas bon", "dommage", "regret",
    "inutile", "inefficace", "desorganise", "retard", "annule", "difficile",
]


def normalize(text: str) -> str:
    text = text.lower().replace("'", " ")
    text = unicodedata.normalize("NFKD", text)
    text = "".join(char for char in text if not unicodedata.combining(char))
    return re.sub(r"\s+", " ", text).strip()


def count_hits(text: str, words: list[str]) -> int:
    return sum(1 for word in words if word in text)


def predict_one(comment: str) -> dict:
    normalized = normalize(comment)
    positive_hits = count_hits(normalized, POSITIVE_WORDS)
    negative_hits = count_hits(normalized, NEGATIVE_WORDS)
    raw_score = positive_hits - negative_hits

    if raw_score > 0:
        sentiment = "positive"
        score = min(5, 3 + raw_score)
    elif raw_score < 0:
        sentiment = "negative"
        score = max(1, 3 + raw_score)
    else:
        sentiment = "neutral"
        score = 3

    return {
        "text": comment,
        "sentiment": sentiment,
        "score": score,
        "positive_hits": positive_hits,
        "negative_hits": negative_hits,
    }


def build_summary(rating: float, total: int) -> str:
    if rating >= 4.5:
        summary = "Excellents retours. Les participants sont tres satisfaits de l'evenement."
    elif rating >= 3.5:
        summary = "Bons commentaires globalement. L'evenement a ete bien apprecie."
    elif rating >= 2.5:
        summary = "Avis mitiges. Des points d'amelioration ont ete souleves."
    elif rating >= 1.5:
        summary = "Commentaires negatifs dominants. Des ameliorations importantes sont necessaires."
    else:
        summary = "Tres mauvais retours. L'evenement n'a pas repondu aux attentes."

    return f"{summary} ({total} commentaire(s) analyse(s))"


def predict_many(comments: list[str]) -> dict:
    comments = [str(comment).strip() for comment in comments if str(comment).strip()]

    if not comments:
        return {
            "rating": 0.0,
            "positive": 0,
            "neutral": 0,
            "negative": 0,
            "summary": "Aucun commentaire a analyser.",
            "comments": [],
            "model": "python-commentaire-analysis-v1",
        }

    predictions = [predict_one(comment) for comment in comments]
    total = len(predictions)
    positive = sum(1 for item in predictions if item["sentiment"] == "positive")
    negative = sum(1 for item in predictions if item["sentiment"] == "negative")
    neutral = total - positive - negative
    rating = round(sum(item["score"] for item in predictions) / total, 1)

    return {
        "rating": rating,
        "positive": round((positive / total) * 100),
        "neutral": round((neutral / total) * 100),
        "negative": round((negative / total) * 100),
        "summary": build_summary(rating, total),
        "comments": predictions,
        "model": "python-commentaire-analysis-v1",
    }


def main() -> int:
    try:
        payload = json.load(sys.stdin)
        result = predict_many(payload.get("comments", []))
        print(json.dumps(result, ensure_ascii=False))
        return 0
    except Exception as exc:
        print(json.dumps({"error": str(exc)}), file=sys.stderr)
        return 1


if __name__ == "__main__":
    raise SystemExit(main())
