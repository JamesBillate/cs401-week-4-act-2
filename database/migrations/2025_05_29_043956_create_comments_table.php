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
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->primary();
            $table->text('comment_content')->comment('text of comment');
            $table->timestamp('comment_date')->comment('date of comment');
            $table->string('reviewer_name')->comment('name of the commenter');
            $table->string('is_reviewer_email')->comment('email of the commenter');
            $table->boolean('is_hidden')->comment('default visibility')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
