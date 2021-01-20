<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

/**
 * Class Posts
 * @package App\Models
 * @property string $id
 * @property string $title
 * @property string $description
 * @property int $category_id
 * @property BelongsTo|Category $category
 */
class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
    ];

    public function getShortDesAttribute(): string
    {
        return Str::limit($this->description, 50, '[...]');
//        return (strlen($this->description) > 20) ? substr($this->description, 0, 20) . '...' : $this->description;
    }

    public function getShortTitleAttribute(): string
    {
        return Str::limit($this->title, 30, '[...]');
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
