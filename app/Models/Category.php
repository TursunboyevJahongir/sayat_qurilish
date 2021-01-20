<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * Class Posts
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property HasMany|Posts $post
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];


    public function getShortTitleAttribute(): string
    {
        return Str::limit($this->title, 90, '[...]');
    }

    /**
     * @return HasMany
     */
    public function post(): HasMany
    {
        return $this->hasMany(Posts::class);
    }
}
