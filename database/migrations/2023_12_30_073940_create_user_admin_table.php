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
        Schema::create('user_admin', function (Blueprint $table) {
            $table->id();
            $table->integer('role')->comment('0 superadmin, 1 admin');
            $table->text('name');
            $table->text('username');
            $table->string('mobile',10);
            $table->text('email')->nullable();
            $table->text('gender');
            $table->text('password');
            $table->boolean('ask_password_change')->default(0);
            $table->boolean('is_blocked')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin');
    }
};
