<?php

namespace App\Models;

use App\Casts\DateTransformPtBr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table = "categorias";

    public function getIsActiveAttribute($value)
    {
        return $value ? 'verdadeiro' : 'falso';
    }

    // public function getPublishedAtAttribute($value)
    // {
    //     return date('d/m/Y', strtotime($value));
    // }

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean:true,false',
            'published_at' => DateTransformPtBr::class,
            'created_at' => DateTransformPtBr::class,
        ];
    }
}
