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
        Schema::create('blog_post_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->comment('foreign key refencing user table')->constrained();
            $table->foreignIdFor(\App\Models\Blog::class)->comment('foreign key refencing blog table')->constrained();
            $table->string('comment_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_comments');
    }
};
