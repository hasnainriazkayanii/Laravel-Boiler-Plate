<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use anlutro\LaravelSettings\SettingStore;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        $settings = config('settings.defaults');
        foreach($settings as $key => $value) {
            setting([$key=>$value]);
        }
        setting()->save();
     }
}
