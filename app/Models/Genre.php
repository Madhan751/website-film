<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = 'genres';

    public function products(){
        return $this->belongsToMany(Product::class, 'product_genre', 'genre_id');
    }
}
