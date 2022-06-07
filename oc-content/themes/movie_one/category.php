<?php
/**
 * The template for displaying Category.
 *
 * @author www.ocimscripts.com
 * @subpackage tmdbtwo 1.0
 *
 */
if ( empty( $_GET[page] ) ) { 
        $pathinfo = pathinfo ($uri);
        $dirname = str_replace('/'.config('category_url').'/','',$pathinfo['dirname']);
        $filename = $pathinfo['filename'];
        $page = 1;
}else{ 
        $dirname = $_GET[terms];
        $filename = $_GET[id];
        $page = $_GET[page];
        $hal = ' Pages ' .$page;
        $title_after = $hal;
        $description_after = $hal . ' on ' . site_path();
}
include('header.php');
?>
<div class="col-md-8 col-sm-8 col-xs-12">
        <h1 class="heading"><span>Category for "<?php echo $dirname;?>"<?php echo $hal;?></span></h1>
        <div class="movie-list">
        <?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if(is_array($Movies['result'])) :
        foreach ( (array) array_slice($Movies['result'], 0, 2) as $row ) {
                ?>
                <div class="col-row-5" itemscope itemtype="//schema.org/Movie">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
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
                <div class="col-row-3 movie-row last" itemscope itemtype="//schema.org/Movie">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
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
                <div class="col-row-1 movie-row" itemscope itemtype="//schema.org/Movie">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" rel="bookmark" itemprop="url">
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
        else:

        $unserialize = unserialize( ocim_search($newquery, $newquery.'_search') );
        if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
                <div class="col-row-3 movie-row last" itemscope itemtype="//schema.org/Movie">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_video($sect['id'],$sect['title']);?>" title="<?php echo $sect['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive" itemprop="image" src="<?php echo $sect['img'];?>/mqdefault.jpg" width="100%" height="auto" alt="<?php echo $sect['title'];?>" title="<?php echo $sect['title'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $sect['channel'];?></div>
                                                <h3 itemprop="name"><?php echo $sect['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime( $sect['date'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $sect['date'] ) );?>" />
                        </div>
                </div>
	        <?php
                } 
        endif;

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
                        $link   = '/?action=category&terms='.$dirname.'&id='.$filename;
                        $pagination = new CSSPagination($totalResults, $limit, $link );
                        $pagination->setPage($_GET[page]);
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
</div>
<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>