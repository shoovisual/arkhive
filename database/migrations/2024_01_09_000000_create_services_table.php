<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_1')->nullable();
            $table->string('sub_2')->nullable();
            $table->string('full_title');
            $table->text('description')->nullable();
            $table->string('service_icon');
            $table->string('image_path');
            $table->string('cover_image');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
