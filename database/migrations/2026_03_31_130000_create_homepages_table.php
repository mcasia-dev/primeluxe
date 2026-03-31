<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('storage_eyebrow')->nullable();
            $table->string('storage_title')->nullable();
            $table->json('storage_paragraphs')->nullable();
            $table->string('offerings_eyebrow')->nullable();
            $table->string('offerings_title')->nullable();
            $table->json('offerings')->nullable();
            $table->string('partners_eyebrow')->nullable();
            $table->string('partners_title')->nullable();
            $table->json('brands')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
