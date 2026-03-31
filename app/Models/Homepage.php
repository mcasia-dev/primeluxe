<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Homepage extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'storage_eyebrow',
        'storage_title',
        'storage_paragraphs',
        'offerings_eyebrow',
        'offerings_title',
        'offerings',
        'partners_eyebrow',
        'partners_title',
        'brands',
        'is_published',
    ];

    protected $casts = [
        'storage_paragraphs' => 'array',
        'offerings' => 'array',
        'brands' => 'array',
        'is_published' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('homepage-hero')->singleFile();
        $this->addMediaCollection('homepage-storage')->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('web')
            ->width(1600)
            ->format('webp')
            ->quality(80);
    }

    public function scopeIsPublished(Builder $query): Builder
    {
        if (! $query) {
            return $query;
        }

        return $query->where('is_published', true);
    }
}
