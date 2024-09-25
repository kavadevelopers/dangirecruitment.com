<?php

use App\Models\HeadersModel;
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
        $data = [
            ['slug' => 'global', 'title' => 'Global', 'description' => 'Transparent Offshoring: Tailored Talent, Clear Costs','page_ids' => ''],
            ['slug' => 'traning', 'title' => 'Traning', 'description' => 'Your gateway to a successful career in accounting!','page_ids' => ''],
            ['slug' => 'placement', 'title' => 'Placement', 'description' => 'Your Gateway to Quality Talent and Strategic Placements!','page_ids' => ''],
            ['slug' => 'consultancy', 'title' => 'Consultancy', 'description' => 'Get started with a business structure that fits your needs.','page_ids' => '']
        ];


        foreach ($data as $key => $value) {
            HeadersModel::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $data = [
            ['slug' => 'global', 'title' => 'Global', 'description' => 'Transparent Offshoring: Tailored Talent, Clear Costs','page_ids' => ''],
            ['slug' => 'traning', 'title' => 'Traning', 'description' => 'Your gateway to a successful career in accounting!','page_ids' => ''],
            ['slug' => 'placement', 'title' => 'Placement', 'description' => 'Your Gateway to Quality Talent and Strategic Placements!','page_ids' => ''],
            ['slug' => 'consultancy', 'title' => 'Consultancy', 'description' => 'Get started with a business structure that fits your needs.','page_ids' => '']
        ];


        foreach ($data as $key => $value) {
            HeadersModel::where('slug',$value['slug'])->delete();
        }
    }
};
