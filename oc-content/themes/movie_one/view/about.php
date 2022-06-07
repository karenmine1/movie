<?php 
/**
 * The template for displaying page about
 *
 * @package www.ocimscripts.com
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'About Us';
$hack_description = "Here, at $hostname about us sample page.";
get_header(); ?>
<div class="col-md-8 col-sm-8 col-xs-12">

        <div class="panel panel-primary">

                <div class="panel-heading">
                        <h1 itemprop="title" class="title">About Us</h1>
                </div>

                <div class="panel-body" itemprop="description">

                        <p> Here, at <strong><?php echo $hostname;?></strong> about us sample page.</p>

                </div>

        </div><!-- .single -->

</div><!-- .col-md-8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>