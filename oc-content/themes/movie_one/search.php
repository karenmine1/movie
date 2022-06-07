<?php
/**
 * The template for displaying Search Result.
 *
 * @author www.ocimscripts.com
 * @subpackage tmdbtwo 1.0
 *
 */
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<div class="col-md-8 col-sm-8 col-xs-12">
        <h1 class="heading"><span>Search Result for "<?php echo $newquery;?>"</span></h1>

        <ul class="nav nav-tabs" style="margin-top: 15px;">
                <li class="active"><a data-toggle="tab" href="#movietab">Movies</a></li>
                <li><a data-toggle="tab" href="#tvtab">TV Show</a></li>
        </ul>
        <div class="tab-content">
        <div id="movietab" class="tab-pane active">
        <div class="panel-body row">
        <div class="movie-list">
        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
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
                                        <img class="img-responsive" itemprop="image" src="<?php echo $row['backdrop_path'];?>" width="100%" height="141" alt="<?php echo $row['title'];?>" title="<?php echo $row['title'];?>">
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

        $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
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
                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?s='.get_search_query();
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
        </div>
        </div>

        <div id="tvtab" class="tab-pane">
        <div class="panel-body row">
        <div class="movie-list">
        <?php 
        $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
        if(is_array($TV['result'])) :
        foreach ( (array) array_slice($TV['result'], 0, 2) as $row ) {
                ?>
                <div class="col-row-5" itemscope itemtype="//schema.org/Movie">
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
        foreach ( (array) array_slice($TV['result'], 2, 3) as $row ) {
                ?>
                <div class="col-row-3 movie-row last" itemscope itemtype="//schema.org/Movie">
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
        foreach ( (array) array_slice($TV['result'], 5, 15) as $row ) {
                ?>
                <div class="col-row-1 movie-row" itemscope itemtype="//schema.org/Movie">
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
                if ($TV['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/oc-includes/class/CSSPagination.class.php');

                        if ($TV['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $TV['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?s='.get_search_query();
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
        </div>
        </div>

        </div>
</div>
<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>