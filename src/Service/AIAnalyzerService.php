<?php

namespace App\Service;

use App\Model\CommentaireAnalysisModel;

class AIAnalyzerService
{
    public function __construct(
        private readonly CommentaireAnalysisModel $model,
    ) {
    }

    public function analyzeComments(array $comments): array
    {
        return $this->model->predictMany($comments);
    }
}
