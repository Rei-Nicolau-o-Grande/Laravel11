<?php

namespace App\Models;

use App\Casts\DateTransformPtBr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'is_active', 'published_at', 'created_at'];

    // protected $table = "categorias";

    // public function getIsActiveAttribute($value)
    // {
    //     return $value ? 'verdadeiro' : 'falso';
    // }

    // public function getPublishedAtAttribute($value)
    // {
    //     return date('d/m/Y', strtotime($value));
    // }

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'published_at' => DateTransformPtBr::class,
            'created_at' => 'datetime:d-m-Y',
        ];
    }
}
