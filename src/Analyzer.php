<?php

namespace Naoray\EloquentModelAnalyzer;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Naoray\EloquentModelAnalyzer\Detectors\ColumnsDetector;
use Naoray\EloquentModelAnalyzer\Detectors\RelationMethodDetector;

class Analyzer
{
    public static function relations(Model $model): Collection
    {
        return (new RelationMethodDetector($model))->discover();
    }

    public static function columns(Model $model): Collection
    {
        return (new ColumnsDetector($model))->discover();
    }
}
