<?php

namespace App\Models;

use App\Models\Traits\HasImageTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Projects
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $image_url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Slideshow extends Model
{
    use HasFactory, HasImageTrait;
    protected $fillable = [
        'title',
        'image_url',
    ];

    public function getShortTitleAttribute(): string
    {
        return Str::limit($this->title, 20,'..');
    }
}
