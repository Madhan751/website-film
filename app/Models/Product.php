<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Negara;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $guarded = ['id'];
    public $table = 'products';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the options for generating the slug.
     */
     
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function genres(){
        return $this->belongsToMany(Genre::class,'product_genre','product_id');
    }


}
