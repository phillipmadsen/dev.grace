<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('pages')->truncate();

        $article = array(
            array(
                'title'        => 'The Qnique Quilter Makes it Easy to Create Quilting Masterpieces',
                'slug'         => Str::slug('Qnique Quilter Makes Masterpieces'),
                'content'      => '
From early times women have sewn quilts from leftover bits of fabric to cover their beds and keep their families warm, but the sewing was done by hand since they did not have sewing machines then. The work was tedious and it took many hours to finish just one quilt. Women often got help from their neighbors and family members to finish the quilt in just one day, and each member of the group got help in making their own quilt. These gatherings were known as quilting bees, and served as social activities as well as work days.

The modern sewing machine has made sewing a quilt much faster and easier than in pioneer days, but it is still necessary for a quilter to learn the intricate details of the art. It takes much more than looking through pattern books to find the right piece and then following the directions to make the quilt. Today\'s quilting machine is equipped with multiple accessories, so the operator must learn how to use them correctly.
<h2 itemprop="hasPart about">A New Quilting Machine</h2>
The intricate stitches needed to create beautiful patterns on quilts should be uniform in length and consistency, and the Qnique Quilter\'s built-in regulation ensures perfect stitches. Highly detailed patterns are not difficult to create using this state of the art machine that uses laser technology to exactly follow the outline of images or patterns. Learning to use the Qunique Quilter is relatively easy by following the directions in the instruction books that are included, and online advice is always available.

The Qnique Quilter is a state of the art machine that gives the operator all the tools needed to create pieces that are beautiful enough to sell at craft shows or online. Many women even find a satisfying career in making and selling quilts, and the Qnique Quilter can make this occupation much easier and more profitable. People who sew quilts and accessories at home to sell at shows or online are able to turn out more finished projects when they have a quilting frame. This modern machine is designed to work perfectly on many existing frames, and includes at complete set of instructions to set it up on various quilting frames.

<h2 itemprop="hasPart about">Low Priced Quilting Machine</h2>
Considering the many benefits of owning a Qnique Quilter, prospective buyers might be concerned about its high cost. The cost of comparable longarm quilting machines typically falls between $6,000 to $18,000, but the Qnique Quilter can be purchased for much less then others. This is an incredibly reasonable price even though the Qnique offers all the advantages of the higher price machines, plus finger-tip controls for ease of operation. Although the Qnique is not classified as a longarm machine, its 15" throat length offers the operator the ability to sew most patterns effortlessly.

Quilting is a creative hobby that many women enjoy, and they make lovely quilts and accessories for their own home or as gifts. Other women have begun to sell their beautiful projects at shows, in a local quilt shop or online. Unless a quilter is focused on sewing and selling quilts and accessories as a career, she may not have considered purchasing a quilting machine for her home. However, the reasonable cost and high performance level of the Qnique Quilter could make the purchase a possibility. Although it is not likely that anyone who purchases this machine would want to return it, the company policy does have a return policy due to defects with or dissatisfaction with its performance.

                ',
                'meta_description' => strip_tags('Quilters will love the many advantages of owning a Qnique Quilter, and the many beautiful projects they can create.'),
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
                'is_published' => true,
                'lang'         => 'tr',),
            array(
                'title'        => 'About Us',
                'slug'         => Str::slug('About Us'),
                'content'      => '
                <h2 itemprop="hasPart about">The Grace Company</h2>
<p>For many companies, innovation and invention are the foundation on which success is built.  This has been a key component in the quilting industry, which has seen a dramatic transformation due to technology that has made the process of quilting easier for those who possess a passion for the craft.  Over the past 25 years, The Grace Company has taken innovation and invention to entirely new levels with its commitment to integrating the worlds of quilting and technology.  The results have been products that have not only revolutionized the industry, but also given those with a love of quilting the ability to create masterpieces almost beyond belief.  With their commitment to customer service and always being willing to take a concept and develop it into yet another product to satisfy their customers, The Grace Company has started a tradition of excellence that has no end in sight. </p>

<h2 itemprop="hasPart about">Quilting Frames</h2>
<p>To create any quilt, a quilting frame is required to make the task possible. The Grace Company, having developed a line of quilting frames unlike any previously seen, quickly became the go-to company for those needing the best possible equipment.  With both machine-quilting and hand-quilting frames from which to choose, customers soon found themselves with a variety of possibilities when it came to quilting.   The frames offered numerous advantages to customers, including:</p>
<ul>
<li>Professional-quality rail system</li>
<li>Improved fabric tension</li>
<li>Height adjustment to fit sewing machines</li>
<li>Speed control and stitch regulators</li>
</ul>

<strong>With the introduction of these features, Grace quickly became the company associated with quilting quality and began its ascension to the top.</strong>  

<h2 itemprop="hasPart about">Computerized Technology</h2>
<p>However, what truly set The Grace Company apart from other competitors was its embracing of computerized technology when it came to quilting. With its development of quilting pattern software, the company made it possible to see how a design would look before the first stitch was sewed.  In doing so, quilts could contain designs that were more intricate than ever before, and as a bonus would take far less time and effort than in previous years.  Some of the most popular quilting software programs have included:</p>
<ul>
<li>QuiltMotion</li>
<li>Quilter\'s Creative Touch</li>
<li>Quilter\'s Creative Design</li>
</ul>

<p>With numerous testimonials from thousands of satisfied customers, The Grace Company has led the way for those who wish to continue combining traditional quilting methods with today\'s technology. And for those who have used the equipment as well as those who have viewed the masterpieces that have been made, the results speak for themselves.</p>

                ',
                'meta_description' => strip_tags('Grace Frames, manufacturer of fine quality hand quilting frames and hoops as well as quilting frame accessories and notions.'),
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
                'is_published' => true,
                'lang'         => 'en',),);

        DB::table('pages')->insert($article);
    }
}
