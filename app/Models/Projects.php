<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Class Projects
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $image_url
 * @property string $address
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $short_description
 * @property string $description
 * @property boolean $hidden
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'image_url',
        'start_date',
        'end_date',
        'short_description',
        'description',
        'hidden'
    ];

    protected $casts = [
        'hidden' => 'boolean',
        'start_date' => 'date:d.m.Y',
        'end_date' => 'date'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'hidden' => true,
    ];
}
