<?php

namespace App\Models;

use App\Models\Traits\HasImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employer
 * @package App\Models
 * @property int $id
 * @property string $full_name
 * @property string $image_url
 * @property string $role
 */
class Employer extends Model
{
    use HasFactory, HasImageTrait;

    protected $fillable = [
        'full_name',
        'image_url',
        'role'
    ];
}
