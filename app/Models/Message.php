<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Message
 * @package App\Message
 * @property int $id
 * @property string $phone
 * @property string $full_name
 * @property string $title
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'full_name',
        'title',
        'message',
    ];

    public function getShortMessageAttribute(): string
    {
        return Str::limit($this->message, 30, '...');
    }

    public function getTimeAttribute(): string
    {
        $startTime = Carbon::parse('2020-02-11 04:04:26');
        $endTime = Carbon::parse('2020-02-11 04:36:56');

        $totalDuration = $endTime->diffForHumans($startTime);
        $this->created_at->addDays(3);
        return now()->diffAsCarbonInterval($this->created_at);
    }
}
