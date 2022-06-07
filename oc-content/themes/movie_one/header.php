<?php 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package OcimScripts
 * @subpackage Movie One 1.0
 */
include('functions.php');
?><!DOCTYPE html>
<html lang="en">
<head itemscope itemtype="//schema.org/WebSite">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title itemprop="name"><?php oc_title();?></title>
    <meta name="description" content="<?php oc_description();?>">
    <meta name="keywords" content="<?php echo config('sitekeywords');?>" />
    <meta name="robots" content="index,follow">
    <meta name="author" content="admin">
    <link rel="profile" href="//gmpg.org/xfn/11">

    <link href="//fonts.googleapis.com/css?family=Roboto|Dosis" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>/oc-includes/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php style_theme();?>/style.css">

    <link rel="shortcut icon" href="<?php echo site_url();?>/oc-includes/images/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php oc_head(); ?>

	
						
</head>
<body>

<script type="text/javascript">
    amzn_assoc_ad_type = "link_enhancement_widget";
    amzn_assoc_tracking_id = "olkj-20";
    amzn_assoc_linkid = "e6db7eb161a42c82639a63a2556cd84e";
    amzn_assoc_placement = "";
    amzn_assoc_marketplace = "amazon";
    amzn_assoc_region = "US";
</script>
<script src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=US"></script>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <h1 class="site-title"><a class="navbar-brand" href="<?php echo site_url();?>"><?php echo config( 'sitename' ); ?></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-film"></i> Movies <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo view_page( 'movie-upcoming' );?>"><i class="fa fa-random"></i> Upcoming</a></li>
                                                <li><a href="<?php echo view_page( 'movie-toprated' );?>"><i class="fa fa-line-chart"></i> Top Rated</a></li>
                                                <li><a href="<?php echo view_page( 'movie-popular' );?>"><i class="fa fa-trophy"></i> Popular</a></li>
                                        </ul>
                                </li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-file-video-o"></i> TV Show <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo view_page( 'tv-airing' );?>"><i class="fa fa-random"></i> Airing TV Shows</a></li>
                                                <li><a href="<?php echo view_page( 'tv-ontheair' );?>"><i class="fa fa-line-chart"></i> On the Air TV Shows</a></li>
                                                <li><a href="<?php echo view_page( 'tv-popular' );?>"><i class="fa fa-trophy"></i> Popular TV Series</a></li>
                                        </ul>
                                </li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open"></i> Genres <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo seocat( 'Action','28' );?>">Action</a></li>
                                                <li><a href="<?php echo seocat( 'Adventure','12' );?>">Adventure</a></li>
                                                <li><a href="<?php echo seocat( 'Animation','16' );?>">Animation</a></li>
                                                <li><a href="<?php echo seocat( 'Comedy','35' );?>">Comedy</a></li>
                                                <li><a href="<?php echo seocat( 'Crime','80' );?>">Crime</a></li>
                                                <li><a href="<?php echo seocat( 'Documentary','99' );?>">Documentary</a></li>
                                                <li><a href="<?php echo seocat( 'Drama','18' );?>">Drama</a></li>
                                                <li><a href="<?php echo seocat( 'Family','10751' );?>">Family</a></li>
                                                <li><a href="<?php echo seocat( 'Fantasy','14' );?>">Fantasy</a></li>
                                                <li><a href="<?php echo seocat( 'Foreign','10769' );?>">Foreign</a></li>
                                                <li><a href="<?php echo seocat( 'History','36' );?>">History</a></li>
                                                <li><a href="<?php echo seocat( 'Horror','27' );?>">Horror</a></li>
                                                <li><a href="<?php echo seocat( 'Music','10402' );?>">Music</a></li>
                                                <li><a href="<?php echo seocat( 'Mystery','9648' );?>">Mystery</a></li>
                                                <li><a href="<?php echo seocat( 'Romance','10749' );?>">Romance</a></li>
                                                <li><a href="<?php echo seocat( 'Science-Fiction','878' );?>">Science Fiction</a></li>
                                                <li><a href="<?php echo seocat( 'TV-Movie','10770' );?>">TV Movie</a></li>
                                                <li><a href="<?php echo seocat( 'Thriller','53' );?>">Thriller</a></li>
                                                <li><a href="<?php echo seocat( 'War','10752' );?>">War</a></li>
                                                <li><a href="<?php echo seocat( 'Western','37' );?>">Western</a></li>
                                        </ul>
                                </li>
                        </ul>
                        <form accept-charset="UTF-8" class="navbar-form" method="get" action="/">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input class="form-control search-form ui-autocomplete-input" name="s" placeholder="Search here..." autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
</nav>

<div class="container">
        <div id="mobisearch">
                <form action="/" method="GET">
                        <div class="input-group stylish-input-group">
                                <input type="text" name="s" class="form-control" placeholder="Search">
                                <span class="input-group-addon">
                                        <button type="submit">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>  
                                </span>
                        </div>
                </form>
        </div>

        <div class="row">

        <?php if( options('728x90') ):?>
                <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('728x90');?></div>
        <?php endif;?>