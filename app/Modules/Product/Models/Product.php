<?php

namespace App\Modules\Product\Models;

use Database\Factories\Product\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'code',
        'name',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Database\Factories\Product\ProductFactory
     */
    protected static function newFactory()
    {
        return ProductFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Modules\Product\Models\ProductCategory,$this>
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
