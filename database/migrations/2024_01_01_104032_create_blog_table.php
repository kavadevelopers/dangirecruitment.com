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
            Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('banner')->nullable();
            $table->text('title');
            $table->text('posted_by');
            $table->text('category');
            $table->text('body');
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
