<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image_url
 */
class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image_url',
    ];
}
