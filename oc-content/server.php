<?php
/**
 * OcimScripts
 *
 * @author Ali Munandar <alimunandar@gmail.com>
 */
$uri = isset($uri) ? $uri : '';
if (($pos = strrpos($uri, '/')) !== false) $url_str = substr($uri, $pos+1);

define( 'DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'] );
require __DIR__.'/../oc-config/autoload.php';

if (config('timezone')) {
    date_default_timezone_set(config('timezone'));
} else {
    date_default_timezone_set('Asia/Jakarta');
}

// This file allows us to emulate Apache's "mod_rewrite" functionality
$arrayfuk = array(config('search_url'),config('category_url'),options('url_page'), options('url_movie'),options('url_tv'),options('url_video'),options('url_watch'),options('url_single'),options('url_music'),options('url_news'));

if(isset($_GET['s'])) {
        $destination = config('search_url');
}elseif(isset($_GET['action'])) {
        $destination = 'url_action';
}elseif(isset($_GET['do'])) {
        $destination = 'url_do';
}elseif( f( $uri, 'sitemap.xml' ) == 'sitemap.xml') {
        $destination = 'sitemap.xml';
}elseif( f( $uri, 'sitemap-post.xml' ) == 'sitemap-post.xml') {
        $destination = 'sitemap-post.xml';
}elseif( f( $uri, 'register' ) == 'register') {
        $destination = 'register';
}elseif( strposa( dirname($uri), $arrayfuk ) ) {
        $destination = f( dirname($uri), $arrayfuk );
}else {
        $destination = 'homepage';
}
//debug( $destination );
switch ($destination){
	case 'homepage':
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/index.php';
		break;
	case options('url_movie'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/movie.php';
		break;
	case 'register':
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/register.php';
		break;
	case options('url_tv'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/tv.php';
		break;
	case options('url_watch'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/watch.php';
		break;
	case config('category_url'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/category.php';
		break;
	case config('search_url'):
	case options('url_news'):
	case options('url_music'):
	case options('url_video'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/search.php';
		break;
	case 'url_action':
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/'.$_GET['action'].'.php';
		break;
	case 'url_do':
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$_GET['do'].'.php';
		break;
	case options('url_page'):
                $pathinfo = pathinfo ($uri) ;
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/'.options('url_page').'/'.$pathinfo['filename'].'.php';
		break;
	case options('url_single'):
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/single.php';
		break;
	case 'sitemap.xml':
		$goto =  __DIR__.'/sitemap/sitemap.php';
		break;
	case 'sitemap-post.xml':
		$goto =  __DIR__.'/sitemap/sitemap-post.php';
		break;
	default:
		$goto =  __DIR__.'/themes/'.config('sitethemes').'/index.php';
		break;
}
//debug( $goto );
for ($i = 0; $i <= 1000; $i++) {
        if (strpos($uri, 'sitemap-'.$i.'.xml' ) !== false ) {
                if(file_exists( DOCUMENT_ROOT.'/oc-content/sitemap/sitemap-'.$i.'.php')) {
                        include_once DOCUMENT_ROOT.'/oc-content/sitemap/sitemap-'.$i.'.php';
                        exit;
                }
        }
}
if( file_exists( $goto ) ) 
{
	include $goto;
	exit;
}else{
	if(file_exists(__DIR__.'/themes/'.config('sitethemes').'/index.php')) {
		include_once __DIR__.'/themes/'.config('sitethemes').'/index.php';
		exit;
	}else{
		include __DIR__.'/../oc-includes/class/welcome.php';
		exit;
	}
}
?>