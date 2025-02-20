<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($product){
            $product->slug = str_slug($product->name);
            $product->code = uniqid();
        });

        static::updating(function ($product){
            $product->slug = str_slug($product->name);
            $product->code = uniqid();
        });

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        $imageUrl = "";
        if(! is_null($this->image)){
            $directory = config('cms.product.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute()
    {
        $imageUrl = "";
        if(! is_null($this->image)){
            $directory = config('cms.product.directory');
            $ext = substr(strrchr($this->image, '.'),1);
            $thumbnail = str_replace(".{$ext}", "-thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }

    public function getProImgAttribute()
    {
        return $this->image ? $this->imageUrl : asset('files/default/post.png');
    }
}
