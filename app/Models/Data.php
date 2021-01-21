<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Data
 * @package App\Models
 * @property int $id
 * @property int $workers_count
 * @property int $projects_count
 * @property string $firm_year
 * @property string $about
 */
class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'workers_count',
        'projects_count',
        'firm_year',
        'about'
    ];
}
