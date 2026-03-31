<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Material extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'button_label',
        'meta_data',
        'is_published',
    ];

    protected $casts = [
        'meta_data' => 'array',
        'is_published' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('material-banner')->singleFile();
        $this->addMediaCollection('material-image')->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300)
            ->sharpen(10)
            ->format('webp')
            ->quality(75);

        $this->addMediaConversion('web')
            ->width(1200)
            ->format('webp')
            ->quality(80);

    }

    public function scopeIsPublished(Builder $query)
    {
        if (!$query) {
            return $query;
        }

        return $query->where('is_published', true);
    }
}
