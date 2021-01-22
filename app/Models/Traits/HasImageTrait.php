<?php
namespace App\Models\Traits;

trait HasImageTrait
{
    public function getImageAttribute(): string
    {
        if (str_starts_with($this->image_url, 'https') || str_starts_with($this->image_url,'http')) {
            return $this->image_url;
        }

        return '/uploads/'.$this->image_url;
    }
}
