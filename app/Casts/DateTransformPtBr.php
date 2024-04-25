<?php

namespace App\Casts;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class DateTransformPtBr implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        // Para o atributo 'published_at', converte a data para o formato brasileiro 'd/m/Y H:i:s'
        if ($key === 'published_at') {
            return $value ? Carbon::parse($value)->format('d/m/Y H:i:s') : null;
            // return $value ? Carbon::parse($value)->diffForHumans() : null;
        }

        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value;
    }
}
