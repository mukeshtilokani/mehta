<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('large')->width(1200);
        $this->addMediaConversion('thumb')->fit('crop', 400, 400);
    }

	public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }    
}
