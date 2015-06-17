<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('projects')->truncate();

        DB::table('projects')->insert(array(
            array(
                'title'       => 'Lorem ipsum dolor',
                'slug'        => Str::slug('Lorem ipsum dolor'),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'path'        => '',
                'file_name'   => '',
                'file_size'   => 0,
                'lang'        => 'tr',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,),
            array(
                'title'       => 'Mauris dapibus tellus',
                'slug'        => Str::slug('Mauris dapibus tellus'),
                'description' => 'Mauris dapibus tellus eu orci vulputate, hendrerit venenatis augue dictum',
                'path'        => '',
                'file_name'   => '',
                'file_size'   => 0,
                'lang'        => 'tr',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,)));
    }
}
