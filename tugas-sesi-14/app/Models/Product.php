<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // Sambungin ke tabel products
    protected $table = 'products'; 
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}