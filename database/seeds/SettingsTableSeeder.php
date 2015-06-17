<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('settings')->truncate();

        $settings = array(
            'settings'   => '{"site_title":"Grace CMS - Content Managment System",
            "ga_code":"UA-61740707-1",
            "meta_keywords":"The Grace Company Content Managment System",
            "meta_description":"The Grace Company Content Managment System"}',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'lang'       => 'en');

        DB::table('settings')->insert($settings);
    }
}
