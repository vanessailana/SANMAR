<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ImageGallery;

class ImageGallery extends Model
{
    protected $table = 'image_gallery';

    protected $fillable = ['title','image'];
}