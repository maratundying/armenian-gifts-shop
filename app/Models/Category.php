<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'country', 'is_available'];

    /**
     * @var mixed
     */
    public $name;
    /**
     * @var mixed
     */
    public $country;
    /**
     * @var mixed
     */
    public $is_available;
}
