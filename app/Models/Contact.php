<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Contact extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'map_title',
        'map_subtitle',
        'map_embed_url',
        'form_title',
        'submit_button_label',
        'subject_options',
        'info_title',
        'info_subtitle',
        'phone_label',
        'phone_display',
        'phone_href',
        'phone_caption',
        'email_label',
        'email_address',
        'email_caption',
        'showroom_label',
        'showroom_address',
        'showroom_caption',
        'is_published',
    ];

    protected $casts = [
        'subject_options' => 'array',
        'is_published' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('contact-hero')->singleFile();
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
