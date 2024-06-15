<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_quantity',
        'category_id',
    ];

    // Add any additional relationships or methods as needed
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
