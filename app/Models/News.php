<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $image_url
 * @property string $content
 */
class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_url',
        'content'
    ];
}
