<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class AboutUs extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',

        // Company Profile
        'company_profile_title',
        'company_profile_description',

        // Our Mission & Vision
        'mission_title',
        'mission_subtitle',
        'mission_description',
        'vision_title',
        'vision_subtitle',
        'vision_description',

        // Our Values
        'our_values_title',
        'our_values_eyebrow',
        'values',
        'our_values_description',

        // Why Choose
        'why_choose_title',
        'why_choose_description',
        'why_choose_meta_data',

        'is_published'
    ];

    protected $casts = [
        'values' => 'array',
        'why_choose_meta_data' => 'array',
        'is_published' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('about-us-banner')->singleFile();
    }

    public function scopeIsPublished(Builder $query): Builder
    {
        if (!$query) {
            return $query;
        }

        return $query->where('is_published', true);
    }
}
