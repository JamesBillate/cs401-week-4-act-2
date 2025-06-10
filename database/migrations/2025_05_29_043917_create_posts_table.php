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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title')->comment('title of post');
            $table->text('content')->comment('content of post');
            $table->string('slug')->comment('URL identifier of the post');
            $table->timestamp('publication_date')->nullable()->comment('publication date');
            $table->timestamp('last_modified_date')->nullable()->comment('last modified date');
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->string('featured_image_url')->comment('Image displayed');
            $table->integer('views_count')->comment('total number of views')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
