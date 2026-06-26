<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'link_reference',
        'category_id',
    ];

    // default data image
    const DEFAULT_IMAGE = 'images/default.webp';

    /**
     * Intercept and format the image attribute.
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => self::DEFAULT_IMAGE,
        );
    }
}
