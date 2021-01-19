<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Projects
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $address
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $short_description
 * @property string $description
 * @property boolean $hidden
 */
class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'start_date',
        'end_date',
        'short_description',
        'description',
        'hidden'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];
}
