<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            // Company Profile
            $table->string('company_profile_title');
            $table->longText('company_profile_description')->nullable();

            // Our Mission & Vision
            $table->string('mission_title');
            $table->string('mission_subtitle');
            $table->longText('mission_description')->nullable();
            $table->string('vision_title');
            $table->string('vision_subtitle');
            $table->longText('vision_description')->nullable();

            // Our Values
            $table->string('our_values_title');
            $table->string('our_values_eyebrow')->nullable();
            $table->json('values')->nullable();
            $table->longText('our_values_description')->nullable();

            // Why Choose
            $table->string('why_choose_title');
            $table->longText('why_choose_description')->nullable();
            $table->json('why_choose_meta_data')->nullable();

            $table->boolean('is_published')->default(true   );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
