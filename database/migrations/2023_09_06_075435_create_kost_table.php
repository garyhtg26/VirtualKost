<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->string('kost_title');
            $table->string('kost_type');
            $table->string('kost_address');
            $table->string('kost_subdistrict');
            $table->string('kost_city');
            $table->string('kost_province');
            $table->integer('kost_price');
            $table->text('kost_facilities');
            $table->text('virtual_embed')->nullable();
            $table->text('gmaps_location');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->text('thumbnail_image');
            $table->text('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kost');
    }
};
