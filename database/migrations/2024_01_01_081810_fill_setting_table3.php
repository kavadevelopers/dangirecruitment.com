<?php

use App\Models\SettingModel;
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
            ['item' => 'web_mobile1', 'value' => ''],
            ['item' => 'web_mobile2', 'value' => ''],
            ['item' => 'web_email', 'value' => ''],
            ['item' => 'web_address', 'value' => ''],
            ['item' => 'social_media_fb', 'value' => ''],
            ['item' => 'social_media_insta', 'value' => ''],
            ['item' => 'social_media_x', 'value' => ''],
            ['item' => 'social_media_youtube', 'value' => ''],
            ['item' => 'social_media_linkedin', 'value' => ''],
            ['item' => 'social_media_skype', 'value' => ''],
        ];


        foreach ($data as $key => $value) {
            SettingModel::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $data = [
            ['item' => 'web_mobile1', 'value' => ''],
            ['item' => 'web_mobile2', 'value' => ''],
            ['item' => 'web_email', 'value' => ''],
            ['item' => 'web_address', 'value' => ''],
            ['item' => 'social_media_fb', 'value' => ''],
            ['item' => 'social_media_insta', 'value' => ''],
            ['item' => 'social_media_x', 'value' => ''],
            ['item' => 'social_media_youtube', 'value' => ''],
            ['item' => 'social_media_linkedin', 'value' => ''],
            ['item' => 'social_media_skype', 'value' => ''],
        ];
        foreach ($data as $key => $value) {
            SettingModel::where('item',$value['item'])->delete();
        }
    }
};
