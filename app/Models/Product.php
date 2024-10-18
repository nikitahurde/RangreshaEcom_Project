<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'slug',
        'short_description',
        'description',
        'category_id',
        'stock',
        'price',
        'mrp',
        'sku',
        'stock_status',
    ];

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');      
    }
}
