<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image_id', 'name', 'short_description', 'long_description', 'characteristics', 'price', 'is_available'];

    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
