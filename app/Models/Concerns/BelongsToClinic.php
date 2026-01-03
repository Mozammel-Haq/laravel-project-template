<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait BelongsToClinic
{
    public static function bootBelongsToClinic()
    {
        static::addGlobalScope('clinic', function (Builder $builder) {
            if (Auth::check() && Auth::user()->clinic_id) {
                $builder->where(
                    $builder->getModel()->getTable() . '.clinic_id',
                    Auth::user()->clinic_id
                );
            }
        });

        static::creating(function ($model) {
            if (Auth::check() && empty($model->clinic_id)) {
                $model->clinic_id = Auth::user()->clinic_id;
            }
        });
    }
}
