<?php
/**
 * The template for displaying page Most Popular TV Series
 *
 * @author www.ocimscripts.com
 * @subpackage TMDB TWO 1.0
 *
 */
$hack_title = 'Most Popular TV Series';
$hack_description = 'Browse Most Popular TV Shows on '.site_path();
get_header(); ?>
<div class="col-md-8 col-sm-8 col-xs-12">
        <h1 class="heading"><span>Most Popular TV Series</span></h1>
        <div class="movie-list">
        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 2) as $row ) {
                ?>
                <div class="col-row-5" itemscope itemtype="http://schema.org/TVSeries">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive" itemprop="image" src="<?php echo $row['backdrop_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                <h3 itemprop="name"><?php echo $row['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $row['release_date'] ) );?></div>
                                <div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $row['vote_average'];?></div></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>" />
                        </div>
                </div>
	        <?php 
                } 
        ?>
        <?php 
        foreach ( (array) array_slice($Movies['result'], 2, 3) as $row ) {
                ?>
                <div class="col-row-3 movie-row last" itemscope itemtype="http://schema.org/TVSeries">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive" itemprop="image" src="<?php echo $row['backdrop_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                <h3 itemprop="name"><?php echo $row['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $row['release_date'] ) );?></div>
                                <div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $row['vote_average'];?></div></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>" />
                        </div>
                </div>
	        <?php 
                } 
        ?>
        <?php 
        foreach ( (array) array_slice($Movies['result'], 5, 15) as $row ) {
                ?>
                <div class="col-row-1 movie-row" itemscope itemtype="http://schema.org/TVSeries">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path" itemprop="image" src="<?php echo $row['poster_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
                                        <img class="img-responsive backdrop_path" itemprop="image" src="<?php echo $row['backdrop_path'];?>" width="100%" height="auto" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">

                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $row['vote_count'];?> people vote</div>
                                                <h3 itemprop="name"><?php echo $row['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $row['release_date'] ) );?></div>
                                <div class="movie-list-metadata"><div class="percentage"><i class="fa fa-heart"></i> <?php echo $row['vote_average'];?></div></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>" />
                        </div>
                </div>
	        <?php 
                }
        endif;
        ?>
        </div>
        <div class="clearfix"></div>
        <nav class="text-center">
                <?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/oc-includes/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 10000) :
                                $totalResults = 10000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?do=tv-popular";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>