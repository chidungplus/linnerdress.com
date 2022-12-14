<?php
namespace App\Traits\Product;
use App\Color;
use App\Image;
use App\ProductImage;
use App\ProductItem;

trait ProductRelationship
{
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function images()
    {
        return $this->hasManyThrough(
            Image::class,
            ProductImage::class,
            'image_id',
            'id',
            'id'
        );
    }
    public function thumb()
    {
        return $this->hasOne(Image::class, 'id', 'thumb');
    }
    public function productItems()
    {
        return $this->hasMany(ProductItem::class);
    }
}