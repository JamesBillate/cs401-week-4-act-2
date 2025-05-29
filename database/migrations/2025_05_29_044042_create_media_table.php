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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('file name of media');
            $table->string('file_type')->comment('media type');
            $table->integer('file_size')->comment('size of media')->nullable();
            $table->string('url')->comment('URL identifier of the media');
            $table->timestamp('upload_date')->comment('upload date of media');
            $table->string('description')->comment('media description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
