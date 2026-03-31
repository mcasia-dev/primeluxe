<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('map_title')->nullable();
            $table->string('map_subtitle')->nullable();
            $table->longText('map_embed_url')->nullable();
            $table->string('form_title')->nullable();
            $table->string('submit_button_label')->nullable();
            $table->json('subject_options')->nullable();
            $table->string('info_title')->nullable();
            $table->string('info_subtitle')->nullable();
            $table->string('phone_label')->nullable();
            $table->string('phone_display')->nullable();
            $table->string('phone_href')->nullable();
            $table->string('phone_caption')->nullable();
            $table->string('email_label')->nullable();
            $table->string('email_address')->nullable();
            $table->string('email_caption')->nullable();
            $table->string('showroom_label')->nullable();
            $table->text('showroom_address')->nullable();
            $table->string('showroom_caption')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
