<?php
/**
 * The main template file
 *
 * @author www.ocimscripts.com
 * @subpackage Movie One 1.0
 *
 */
include('header.php');
?>
<div class="col-md-8 col-sm-8 col-xs-12">
        <h3 class="heading"><span>Movies</span></h3>
        <div class="movie-list">
        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page) );
        if( is_array($Movies['result']) ):
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
        foreach ( (array) array_slice($Movies['result'], 2, 10) as $row ) {
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
        ?>
        <h3 class="heading"><span>TV Shows</span></h3>
        <?php 
        $TV = unserialize( ocim_data_tv('home_tv_',$page, 'getOnTheAirTVShows') );
        foreach ( (array) array_slice($TV['result'], 0, 2) as $row ) {
                ?>
                <div class="col-row-5" itemscope itemtype="//schema.org/TVSeries">
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
                if ($i++ == 1) break;
                } 
        ?>
        <?php 
        foreach ( (array) array_slice($TV['result'], 2, 10) as $row ) {
                ?>
                <div class="col-row-1 movie-row" itemscope itemtype="//schema.org/TVSeries">
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
</div>
<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>