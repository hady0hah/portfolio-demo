<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'about',
        'description',
        'link',
        'image_path',
        'show_in_homepage',
        'published',
    ];
}
