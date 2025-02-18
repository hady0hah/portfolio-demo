<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends BaseModel
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'title',
        'tags',
        'image_path',
        'description',
        'published',
    ];

}
