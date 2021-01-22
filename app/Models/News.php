<?php

namespace App\Models;

use App\Models\Traits\HasImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image_url
 * @property string $image
 */
class News extends Model
{
    use HasFactory, HasImageTrait;

    protected $fillable = [
        'title',
        'content',
        'image_url',
    ];

}
