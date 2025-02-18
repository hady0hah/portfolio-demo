<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends BaseModel
{
    use HasFactory;

    protected $table = 'social_networks';

    protected $fillable = [
        'title',
        'link',
        'image_path',
        'published',
    ];
}
