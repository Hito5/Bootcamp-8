<?php

   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class ProductCategory extends Model
   {
       use HasFactory;

       // Kasih tau kalau tabelnya namanya 'categories' (bawaan sesi 13)
       protected $table = 'categories';
       protected $guarded = [];

       // Bikin relasi ke tabel produk (Satu kategori punya banyak produk)
       public function products()
       {
           return $this->hasMany(Product::class);
       }
   }