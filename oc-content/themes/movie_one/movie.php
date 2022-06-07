<?php
/**
 * The template for displaying all single posts
 *
 * @author www.ocimscripts.com
 * @subpackage TMDB TWO 1.0
 *
 */
include('header.php');?>
<div class="col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb hidden" xmlns:v="//rdf.data-vocabulary.org/#">
                        <li itemscope itemtype="//data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url();?>"><span itemprop="title">Home</span></a></li>
                        <li itemscope itemtype="//data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo seocat(permalink($category),$categoryid);?>"><span itemprop="title"><?php echo $category;?></span></a></li>
                        <li><?php echo $title;?></li>
        </ol> <!-- end breadcrumb -->

        <div class="single">

                <div id="player" onclick="thevid=document.getElementById('thevideo');document.getElementById('iframe').src = document.getElementById('iframe').src.replace('autoplay=0','autoplay=1');">
                        <header class="entry-header">
                                <h1 class="entry-title ellip"><span itemprop="name"><?php echo $title;?> (<?php echo $year;?>)</span></h1>
                        </header>
                        <div class="player-container">
                                <img class="impl img-responsive" src="<?php echo $images;?>" width="1280" height="720" alt="<?php echo $title;?>">
                                <span class="mpaa">HD</span>
                                <div class="inline play-button registration">
                                        <span class="player-loader" style="display: none;"></span>
                                        <i class="fa fa-youtube-play" style="visibility: visible;"></i>
                                </div>
                        </div>
                        <div id="controls">
                                <div class="controls-wraper">
                                        <div class="cplay"><a class="play inline cboxElement"><i class="fa fa-play"></i></a></div>
                                        <div class="cvolu"><div class="volume"><i class="fa fa-volume-up"></i></div>
                                        <div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div></div>
                                        <div class="duration"><span class="dmax">0<?php echo convertToHoursMins($runtime);?>:00</span></div>
                                        <div class="progress"><span class="buffering"><span class="progressbar"></span></span></div>
                                        <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
                                        <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
                                </div>
                        </div>
                </div>

                

                <div class="hidden" id="thevideo"><iframe class="embed-responsive-item" id="iframe" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div>
        </div><!-- .col-md-12 -->
<div class="text-center"><div class="btn-group btn-group-lg" style="padding:15px"> 
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static" style="width: 88; height: 26"><span class="glyphicon glyphicon-play">Watch</span></button> 
	&nbsp;&nbsp;&nbsp; 
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static" style="width: 89px; height: 26px"><span class="glyphicon glyphicon-save">Download</span></button></div></div>
</div><!-- .single -->

<div class="col-md-8 col-sm-8 col-xs-12">
        <div class="panel panel-body">

                <?php if( options('468x60') ):?>
                        <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
                <?php endif;?>

                <div class="poster-wrap">
                        <img itemprop="image" class="impo img-responsive" src="<?php echo $images_small;?>" width="150" height="225" alt="<?php echo $title;?>">
                        <div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="//schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?><div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users</div>
                        </div>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#trailer" data-backdrop="static"><span class="glyphicon glyphicon-save"></span> Watch Trailer</a>
                </div>

                <table class="movie-detail"><tbody>
                        <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar"></i>Release Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-clock-o"></i>Runtime</td><td>:</td><td><time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> minutes</time></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genre;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-suitcase"></i>Production Company</td><td>:</td><td><?php echo $companies;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-globe"></i>Production Countries</td><td>:</td><td><?php echo $country;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-users"></i>Casts</td><td>:</td><td><?php echo $cast;?></td></tr>
                         <tr><td class="tdtitle"><i class="fa fa-tags"></i>Plot Keywords</td><td>:</td><td><?php echo $keywords;?></td></tr>
                </tbody></table>

                <div class="clearfix"></div>
        </div>
        <?php 
        if (is_array($row['similar_movies'][results])) {
        ?>
        <h3 class="text-center clearfix heading">Similar Movies <?php echo $title;?> (<?php echo $year;?>)</h3>
        <div class="clearfix" style="margin-bottom:15px;">
        <?php
                foreach((array)$row['similar_movies'][results] as $similar) :
                if ($similar[backdrop_path]) {
                    $backdrop_path = '//image.tmdb.org/t/p/w300'.$similar[backdrop_path];
                }else{
                    $backdrop_path = site_theme().'/images/no-backdrop.png';
                }
                ?>
                <div class="col-row-2 episode-row" itemscope itemtype="//schema.org/Movies">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_movie($similar['id'],$similar['title']);?>" title="<?php echo $similar['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path" itemprop="image" src="<?php echo $backdrop_path;?>" width="100%" height="auto" alt="<?php echo $similar['title'];?>" title="<?php echo $similar['title'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $similar['vote_count'];?> vote count</div>
                                                <h3 itemprop="name" style="font-size: 14px;"><?php echo $similar['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $similar['release_date'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $similar['release_date'] ) );?>" />
                        </div>
                </div>
                <?php 
                endforeach;
        ?>
        </div>
        <?php 
        }
        ?>
</div><!-- .col-md-8 -->
<div id="modal-login" class="modal fade" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true"><div class="modal-dialog"><div id="login" class="modal-content"><div class="top-content"><p class="text-center top"><button type="button" class="close" data-dismiss="modal">&times;</button><?php echo $title;?></p></div><div class="bottom-content"><div class="modal-body clearfix">
                                <div class="row">
                                <div class="col-md-6" id="login">					

				                        <p><b>You should be logged in to use this feature</b></p>
                                        <h5>Member Login</h5>
                                        <div class="form-group">
                                                <input type="text" class="form-control input-sm" id="userid" placeholder="username">
	                                </div>
                                        <div class="form-group">
                                                <input type="password" class="form-control input-sm" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                                <span class="onload label label-info" style="display:none;">Please wait...</span>
                                                <span class="onerror label label-warning" style="display:none;">Wrong Username or Password</span>
                                        </div>
                                        <p><input type="submit" id="submov" class="btn btn-success" value="Log in"></p>
                          <p><b>Don't have account?</b></p>
               <p><i>Spend a little time now for free register and you could benefit later. You will be able to Stream and Download <b><i><?php echo $row['name'];?></i></b> in High-Definition on PC (desktop, laptop, tablet, handheld pc etc.) and Mac. Download as many as you like and watch them on your computer, your tablet, TV or mobile device.</i></p>
                                </div>
								<div class="modal-footer bg-info">
                        <a class="btn btn-primary btn-lg" href="/?action=register">Sign Up For Free</a>
                </div>
                                <div class="col-md-6">
                                <ul class="list-group">                                                

     				
					                     </ul>
                                              <hr>                                
                                                    </div>
                        </div>
                </div>               
        </div>
</div></div></div>

<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Watch Trailer <?php echo $title;?></h4></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div></div></div></div></div>

<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>