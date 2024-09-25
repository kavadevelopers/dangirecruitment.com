<?php

use App\Models\UserAdminModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        UserAdminModel::create([
            'role'                  => '0',
            'name'                  => 'Dangi',
            'username'              => 'administrator',
            'mobile'                => '9426878365',
            'email'                 => 'cacsviralshah@gmail.com',
            'gender'                => 'Male',
            'password'              => Hash::make('Dangi@123'),
            'ask_password_change'   => '1'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        UserAdminModel::truncate();
    }
};
