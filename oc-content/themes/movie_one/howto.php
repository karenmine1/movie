<?php 
/**
 * The template for displaying page about
 *
 * @package www.ocimscripts.com
 * @subpackage Movie One 1.0
 */
$hack_title = 'How To? Tutorial Simple';
get_header(); ?>
<div class="col-md-8 col-sm-12">
        <div class="panel panel-primary">
                <div class="panel-heading">
                        <h1 class="panel-title">Howto?</h1>
                </div>
                <div class="panel-body" itemprop="description">
                        <div class="list-group">
                                <span href="#" class="list-group-item active">
                                        How to change title on search results? <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-minus glyphicon-chevron-down"></i></span>
                                </span>
                                <div class="list-body" style="display: none;"><p></p>
                                        <p>Default title is "Search Results for 'query' | meta_title", now if you want remove or replace "Search Results for" follow below tutorial.</p><p class='thumbnail'><img src='//i.imgur.com/WEyJBZW.png'></p>
                                        <ol>
                                                <li>Open "<strong>/oc-content/themes/movie_one/search.php</strong>", then paste this code<pre>$title_before        = 'Download ';
$title_after         = ' free';
$description_before  = 'Description for ';
$description_after   = ' on ' . site_path();
<br><br>Note: <i>Change keywords "Download" and " free" whatever you want.</i></pre>Before this code:<pre>include('header.php');</pre><p class='thumbnail'><img src='//i.imgur.com/8J5i1gS.png'></p>
                                                </li>
                                        </ol>
                                </div>
                        </div>

                        <div class="list-group">
                                <span href="#" class="list-group-item active">
                                        How to insert (injection) mass new keywords into sitemap? <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-plus"></i></span>
                                </span>
                                <div class="list-body" style="display: none;"><p></p>
                                        <ol>
                                                <li><p>Open "<strong>/oc-content/themes/movie_one/keywords.txt</strong>", then insert keywords one by one separate by newline break.</p><p class='thumbnail'><img src='//i.imgur.com/witrTUV.png'></p><p>Save.</p></li>
                                                <li><p>Visit <a rel="follow" href="/?action=options">Theme Options</a>.</p></li>
                                                <li><p>Go to <a rel="follow" href="/sitemap-1.xml">yourdomain/sitemap-1.xml</a>.</p></li>
                                                <li><p>Done.</p></li>
                                        </ol>
                                </div>
                        </div>
                        <div class="list-group">
                                <span href="#" class="list-group-item active">
                                        How to create new sitemap for google webmaster sitemap.xml? <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-plus"></i></span>
                                </span>
                                <div class="list-body" style="display: none;"><p></p>
                                        <ol>
                                                <li><p>Open folder "<strong>/oc-content/sitemap/</strong>", copy all content from sitemap1.php into new sitemap file example sitemap2.php</p><p class='thumbnail'><img src='//i.imgur.com/wnuM82E.png'></p><p>Save.</p></li>
                                                <li><p>Open folder "<strong>/oc-content/sitemap/</strong>sitemap2.php", change this numeric into 2</p><p class='thumbnail'><img src='//i.imgur.com/Y8uOWe2.png'></p><p>Save.</p></li>
                                                <li><p>Open folder "<strong>/oc-content/keywords/</strong>". Create new file example items2.txt</p><p class='thumbnail'><img src='//i.imgur.com/EKqsFzS.png'></p></li>
                                                <li><p>Open "<strong>/oc-content/keywords/</strong>items2.txt", insert new keyword separated by commas</p><p class='thumbnail'><img src='//i.imgur.com/xQCc31P.png'></p></li>
                                                <li><p>Open "<strong>/oc-content/server.php</strong>", copy function like this </p>
<pre>elseif (strpos($uri, 'sitemap-2.xml' ) !== false ) {
                if(file_exists( DOCUMENT_ROOT.'/oc-content/sitemap/sitemap2.php')) {
                        include_once DOCUMENT_ROOT.'/oc-content/sitemap/sitemap2.php';
                        exit;
                }
        }</pre>
<p class='thumbnail'><img src='//i.imgur.com/fTeNqQU.png'></p></li>
                                                <li><p>Go to <a rel="follow" href="/sitemap-2.xml">yourdomain/sitemap-2.xml</a>.</p></li>
                                                <li><p>Done.</p></li>
                                        </ol>
                                </div>
                        </div>

                        <div class="list-group">
                                <span href="#" class="list-group-item active">
                                        How to create new contact form? <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-plus"></i></span>
                                </span>
                                <div class="list-body" style="display: none;"><p></p><ol>
                                        <li><p><a target="_blank" rel="follow" href="//www.smartaddon.com/contact_form.html">Click here</a> to create new contact form free, then open <b>"/oc-content/themes/movie_one/view/contact.php"</b>.</p></li>
                                        <li><p>Change this code to your new contact form</p><p class='thumbnail'><img src='//i.imgur.com/J20AJRj.png'></p></li>
                                </div></ol>
                        </div>
                </div>

        </div><!-- .single -->

</div><!-- .col-md-8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<script>
$(document).on('click', '.list-group-item span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.list-group').find('.list-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.list-group').find('.list-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	};
});
</script>