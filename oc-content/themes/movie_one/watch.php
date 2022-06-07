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
                <div id="player" onclick="thevid=document.getElementById('thevideo');document.getElementById('iframe').src = 
document.getElementById('iframe').src.replace('autoplay=0','autoplay=1');">
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
                                        <div class="duration"><span class="dmax"><?php echo covtime($items['items'][0]['contentDetails'][duration]);?></span></div>
                                        <div class="progress"><span class="buffering"><span class="progressbar"></span></span></div>
                                        <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
                                        <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
                                </div>
                        </div>
                </div>

                <div class="hidden" id="thevideo"><iframe class="embed-responsive-item" id="iframe" src="//www.youtube.com/embed/<?php echo $items['items'][0]['id'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div>

                

 
       </div><!-- .col-md-12 -->
<div class="text-center"><div class="btn-group btn-group-lg" style="padding:15px"> <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-play">Watch</span></button> <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-save">Download</span></button></div></div>
</div><!-- .single -->

<div class="col-md-8 col-sm-8 col-xs-12">
        <div class="panel panel-body">
                <?php if( options('468x60') ):?>
                        <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
                <?php endif;?>
                <div class="poster-wrap">
                        <img itemprop="image" class="impo img-responsive" src="<?php echo $items['items'][0][snippet]['thumbnails']['medium']['url'];?>" width="150" height="225" alt="<?php echo $title;?>" title="<?php echo $title;?>">
                        <div class="rating-star" itemprop="aggregateRating" itemscope itemtype="//schema.org/AggregateRating"><div class="movie-rating" style="padding: 10px 0;color: #444;"><i class="fa fa-eye"></i> <?php echo $items['items'][0][statistics]['viewCount'];?> views <br><i class="fa fa-thumbs-o-up"></i> <?php echo $items['items'][0][statistics]['likeCount'];?> likes / <i class="fa fa-thumbs-o-down"></i> <?php echo $items['items'][0][statistics]['dislikeCount'];?> Dislike</div>
                        </div>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#trailer" data-backdrop="static"><span class="glyphicon glyphicon-save"></span> Watch Trailer</a>
                </div>

                <table class="movie-detail"><tbody>
                        <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo nl2br($description);?></p></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar"></i>Release Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $items['items'][0][snippet]['publishedAt'];?>"><?php echo date('M d, Y', strtotime($items['items'][0][snippet]['publishedAt']));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-clock-o"></i>Runtime</td><td>:</td><td><time itemprop="duration" datetime="<?php echo $items['items'][0]['contentDetails'][duration];?>"><?php echo covtime($items['items'][0]['contentDetails'][duration]);?></time></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $categ['items'][0][snippet]['title'];?></td></tr>
                </tbody></table>

                <div class="clearfix"></div>
        </div>
        <?php 
        if (is_array($youtuberelated['items'])) {
        ?>
        <h3 class="text-center clearfix heading">Similar Video <?php echo $title;?> (<?php echo $year;?>)</h3>
        <div class="clearfix" style="margin-bottom:15px;">
        <?php
                foreach((array)$youtuberelated['items'] as $related) :
                ?>
                <div class="col-row-1 episode-row" itemscope itemtype="//schema.org/Movies">
                        <div class="movie-list-fanart">
                                <a href="<?php echo seo_video($related['id']['videoId'],$related['snippet']['title']);?>" title="<?php echo $related['snippet']['title'];?>" rel="bookmark" itemprop="url">
                                        <img class="img-responsive poster_path" itemprop="image" src="<?php echo $related[snippet]['thumbnails']['default']['url'];?>" width="100%" height="auto" alt="<?php echo $related['snippet']['title'];?>" title="<?php echo $related['snippet']['title'];?>">
                                        <div class="movie-list-title">
                                                <h3 itemprop="name" style="font-size: 12px;"><?php echo $related['snippet']['title'];?></h3>
                                        </div>
                                </a>
                        </div>
                        <div class="movie-list-info">
                                <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $related['snippet']['publishedAt'] ) );?></div>
                                <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $related['snippet']['publishedAt'] ) );?>" />
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

<div id="modal-login" class="modal fade"><div class="modal-dialog"><div id="login" class="modal-content"><div class="top-content" style="background-image:url(<?php echo $items['items'][0][snippet]['thumbnails']['high']['url'];?>)"><p class="text-center top"><?php echo $title;?></p><p class="text-center bottom">Released Date: <?php echo date('M d, Y', strtotime($items['items'][0][snippet]['publishedAt']));?></p></div><div class="bottom-content"><img class="img-responsive" src="<?php echo site_theme();?>/images/offer.jpg"><p class="text-center"><a href="/?action=register" class="btn btn-primary btn-lg">Register Free Account <span class="glyphicon glyphicon-play-circle"></span></a></p></div></div></div></div>
<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Watch Trailer <?php echo $title;?></h4></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $items['items'][0]['id'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div></div></div></div></div>

<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>