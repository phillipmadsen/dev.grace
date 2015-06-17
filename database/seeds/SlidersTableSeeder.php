<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('sliders')->truncate();

        DB::table('sliders')->insert(array(
            
            array(
                'title'       => 'Rear Quilting Machine Handles',
                'description' => 'You can now add rear controller handles to your Qnique quilting machine',
                'path'        => '/uploads/slider/slider_2.jpg',
                'file_name'   => 'slider_2.jpg',
                'file_size'   => 572388,
                'order'       => 2,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Grace Quilting Combo',
                'description' => 'Get a grace quilting frame with your Qnique quilting machine',
                'path'        => '/uploads/slider/slider_3.jpg',
                'file_name'   => 'slider_3.jpg',
                'file_size'   => 421000,
                'order'       => 3,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'The Qnique Quilter',
                'description' => 'Get the newest quilting machine on the market today',
                'path'        => '/uploads/slider/slider_4.jpg',
                'file_name'   => 'slider_4.jpg',
                'file_size'   => 335322,
                'order'       => 4,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Super Stitch Regulation',
                'description' => 'You can get the Qnique with enhanced stitch regulation or computerized',
                'path'        => '/uploads/slider/slider_5.jpg',
                'file_name'   => 'slider_5.jpg',
                'file_size'   => 698727,
                'order'       => 5,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Free Motion Machine Quilting',
                'description' => 'Very easy free motion quilting with the new Qnique Quilting Machine',
                'path'        => '/uploads/slider/slider_6.jpg',
                'file_name'   => 'slider_6.jpg',
                'file_size'   => 844577,
                'order'       => 6,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Grace Quilting Hoops',
                'description' => 'Get a quilting hoop from someone you trust! The Grace Company.',
                'path'        => '/uploads/slider/slider_7.jpg',
                'file_name'   => 'slider_7.jpg',
                'file_size'   => 503064,
                'order'       => 7,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Grace Hand Quilting Frames',
                'description' => 'Do you prefer hand quilting? Then you should try one of The Grace Company Quilting frames today.',
                'path'        => '/uploads/slider/slider_8.jpg',
                'file_name'   => 'slider_8.jpg',
                'file_size'   => 623998,
                'order'       => 8,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'The New Qnique Quitler 14+',
                'description' => 'The Grace Company\'s New quilting machine',
                'path'        => '/uploads/slider/slider_9.jpg',
                'file_name'   => 'slider_9.jpg',
                'file_size'   => 412537,
                'order'       => 9,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'title'       => 'Adjustable Hand Quilting Frames',
                'description' => 'We have the right hand quilting frame for you! Many to choose from at Grace.',
                'path'        => '/uploads/slider/slider_10.jpg',
                'file_name'   => 'slider_10.jpg',
                'file_size'   => 492158,
                'order'       => 10,
                'lang'        => 'en',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
           
        ));
    }
}
