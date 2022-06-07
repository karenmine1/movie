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
                <div id="player">
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
                                        <div class="duration"><span class="dmax"><?php echo $runtime;?></span></div>
                                        <div class="progress"><span class="buffering"><span class="progressbar"></span></span></div>
                                        <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
                                        <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
                                </div>
                        </div>
                </div>

                

        </div><!-- .single -->
<div class="text-center"><div class="btn-group btn-group-lg" style="padding:15px"> <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-play">Watch</span></button> <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-save">Download</span></button></div></div>
</div><!-- .col-md-12 -->

<div class="col-md-8 col-sm-8 col-xs-12">
        <div class="panel panel-body">

                <?php if( options('468x60') ):?>
                        <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
                <?php endif;?>

                <div class="poster-wrap">
                        <img itemprop="image" class="impo img-responsive" src="<?php echo $images_small;?>" width="150" height="225" alt="<?php echo $title;?>">
                        <div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="//schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?><div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users</div>
                        </div>
                </div>

                <table class="movie-detail"><tbody>
                        <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-suitcase"></i>Title</td><td>:</td><td><?php echo $row['name'];?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar"></i>First Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $first_air_date;?>"><?php echo date('M d, Y', strtotime($first_air_date));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar-o"></i>Last Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $last_air_date;?>"><?php echo date('M d, Y', strtotime($last_air_date));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-certificate"></i>Number of Episodes</td><td>:</td><td><?php echo $number_of_episodes;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-certificate"></i>Number of Seasons</td><td>:</td><td><?php echo $number_of_seasons;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genre;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-globe"></i>Networks</td><td>:</td><td><?php echo $networks;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-users"></i>Casts</td><td>:</td><td><?php echo $cast;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-tags"></i>Alternative Titles</td><td>:</td><td><?php echo $alternative_titles;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-tags"></i>Plot Keywords</td><td>:</td><td><?php echo $keywords;?></td></tr>
                </tbody></table>

                <div class="clearfix"></div>

        </div><!-- .panel -->
        <h2 class="text-center clearfix heading">Season List</h2>
        <?php 
        if (is_array($row['seasons'])) {
                foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                        continue;
                }
                if ($for[poster_path]) {
                    $poster_path = '//image.tmdb.org/t/p/w185'.$for[poster_path];
                }else{
                    $poster_path = site_theme().'/images/no-cover.png';
                }
                ?>
                <div class="col-row-6 movie-row" itemscope itemtype="//schema.org/TVSeries">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>" title="<?php echo $title;?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path" itemprop="image" src="<?php echo $poster_path;?>" width="100%" height="auto" alt="<?php echo $title;?> Season <?php echo $for['season_number'];?>" title="<?php echo $title;?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count"><?php echo $for['episode_count'];?> episode</div>
                                                <h3 itemprop="name">Season <?php echo $for['season_number'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $for['air_date'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $for['air_date'] ) );?>" />
                        </div>
                </div>
                <?php 
                endforeach;
        }
        ?>
        <?php 
        if (is_array($row2['episodes'])) {
        ?>
        <h3 class="text-center clearfix heading">Episode List <?php echo $row2['name'];?></h3>
        <?php
                foreach((array)$row2['episodes'] as $eps) :
                if ($eps[still_path]) {
                    $still_path = '//image.tmdb.org/t/p/w300'.$eps[still_path];
                }else{
                    $still_path = site_theme().'/images/no-backdrop.png';
                }
                ?>
                <div class="col-row-2 episode-row" itemscope itemtype="//schema.org/TVSeries">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>" title="<?php echo $title;?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path" itemprop="image" src="<?php echo $still_path;?>" width="100%" height="171" alt="<?php echo $row['name'];?> Season <?php echo $eps['season_number'];?> : <?php echo $eps['name'];?>" title="<?php echo $row['name'];?> Season <?php echo $eps['season_number'];?> : <?php echo $eps['name'];?>">
                                        <div class="movie-list-title">
                                                <div class="vote_count">Episode <?php echo $eps['episode_number'];?></div>
                                                <h3 itemprop="name" style="font-size: 14px;"><?php echo $eps['name'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $eps['air_date'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $eps['air_date'] ) );?>" />
                        </div>
                </div>
                <?php 
                endforeach;
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
                                                                       <li class="list-group-item">
							                     <h4 class="list-group-item-heading"><b>Secure and no restrictions</b></h4></p>
						                      <li class="list-group-item">
							                     <h4 class="list-group-item-heading"><b>High Quality Movies</b></h4>
							                     <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p>
						                      </li>
						                      <li class="list-group-item">
						                      	<h4 class="list-group-item-heading"><b>Watch Without Limits</b></h4>
						                      	<p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.<br>
Thousands of movies to choose from Hottest new releases.</p>
						                      </li>
						                      <li class="list-group-item">
						                      	<h4 class="list-group-item-heading"><b>100% Free Advertising</b></h4>
						                      	<p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
						                      </li>
						                      <li class="list-group-item">
						                      	<h4 class="list-group-item-heading"><b>Watch anytime, anywhere</b></h4>
						                      	<p class="list-group-item-text">It works on your TV, PC, or MAC!</p>
						                      </li>	
                                                                      <li class="list-group-item">
						                      	<h4 class="list-group-item-heading"><b>Guaranteed to save time and money</b></h4>
						                      	<p class="list-group-item-text">Its quick and hassle free, forget going to the post office.</p>
						                      </li>						
					                     </ul>
                                              <hr>                                
                                             <center>FREE TRIAL Coupon code : 105C60EB</center>
                                              <center>(Valid until Jan 11, 2020)</center>
                                                    </div>
                        </div>
                </div>
                <div class="modal-footer bg-info">
                        <a class="btn btn-primary btn-lg" href="/?action=register">Sign Up For Free</a>
                </div>
        </div>
</div></div></div>
<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>