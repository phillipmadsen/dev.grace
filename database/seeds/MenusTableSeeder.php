<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('menus')->truncate();

        DB::table('menus')->insert(array(
            array(
                'title'        => 'The Grace Company',
                'url'          => '/',
                'order'        => 1,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'home',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Quilting News',
                'url'          => '/en/news',
                'order'        => 2,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Blog',
                'url'          => '/en/article',
                'order'        => 3,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'blog',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Projects',
                'url'          => '/en/project',
                'order'        => 4,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'project',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Videos',
                'url'          => '/en/video',
                'order'        => 5,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'video',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Gallery',
                'url'          => '/en/photo-gallery/'. Str::slug('Gallery'),
                'order'        => 6,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'photo_gallery',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Page',
                'url'          => '/en/page/' . Str::slug('page'),
                'order'        => 7,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'page',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'FAQs',
                'url'          => '/en/faq',
                'order'        => 8,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'faq',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Contact',
                'url'          => '/en/contact',
                'order'        => 9,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'contact',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
        ));
    }
}
