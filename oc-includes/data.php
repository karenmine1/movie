<?php
require __DIR__.'/class/random_user_agent.php';
if (config('cache') == 'true') {
	$folder	= array(
		'home'		=>	$_SERVER['DOCUMENT_ROOT'] . '/cache/home/',
		'single'        =>	$_SERVER['DOCUMENT_ROOT'] . '/cache/single/',
		'search'	=>	$_SERVER['DOCUMENT_ROOT'] . '/cache/search/',
	);

	foreach ( $folder as $key => $value ) {
		ocim_folder( $value );
	}
}
function ocim_folder( $folder ) {
	if ( !file_exists( $folder ) ) {
		mkdir( $folder, 0755, true );
	} else {
		return false;
	}
}
function ocim_throw() {
        header ( "HTTP/1.1 301 Moved Permanently" ); 
	header ( "Location: /" );
}
function ocim_expire( $file, $expire = 86400 ) {
	$range	= strtotime( date( 'Y-m-d G:i:s' ) ) - filemtime( $file );
	if ( $range >= $expire ) {
		return true;
	}
}
function deleteDirectory($dirPath) {
        if (is_dir($dirPath)) {
        $objects = scandir($dirPath);
        foreach ($objects as $object) {
                if ($object != "." && $object !="..") {
                        if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                                deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
                        } else {
                                unlink($dirPath . DIRECTORY_SEPARATOR . $object);
                        }
                }
        }
        reset($objects);
        rmdir($dirPath);
        }
}
function ocim_xpath( $target ) {
	$ch = curl_init( $target );
        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: private; max-age=90";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $header[] = "Accept-Language: en-us,en;q=0.5";
        $header[] = "Pragma: ";

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, random_user_agent() );
	curl_setopt($ch, CURLOPT_REFERER, CURLOPT_REFERER() );
	$html = mb_convert_encoding(curl_exec($ch), "HTML-ENTITIES", "UTF-8" );
	curl_close($ch);
	if ( $html === FALSE ) {
		return false;
	} else {
                libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->preserveWhiteSpace = false;
                $dom->strictErrorChecking = false;
                $dom->recover=true;
	       @$dom->loadHTML("<html><body>".$html."</body></html>");
		$xpath = new DOMXPath($dom);
		return $xpath;
	}
}
function ocim_dom( $target ) {
	$ch = curl_init( $target );
        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: private; max-age=90";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $header[] = "Accept-Language: en-us,en;q=0.5";
        $header[] = "Pragma: ";

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, random_user_agent() );
	curl_setopt($ch, CURLOPT_REFERER, CURLOPT_REFERER() );
	$html = mb_convert_encoding(curl_exec($ch), "HTML-ENTITIES", "UTF-8" );
	curl_close($ch);
	if ( $html === FALSE ) {
		return false;
	} else {
                libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->preserveWhiteSpace = false;
                $dom->strictErrorChecking = false;
                $dom->recover=true;
	       @$dom->loadHTML("<html><body>".$html."</body></html>");
		return $dom;
	}
}
// Create robots.txt
$robot = $_SERVER['DOCUMENT_ROOT'];
$hostname = $_SERVER['HTTP_HOST'];
$rname  = "/robots.txt";
if ( ! file_exists( $robot.'/robots.txt' ) ) {
	$txt	= "";
	$txt	.= "User-Agent: *\n";
	$txt	.= "Disallow: /oc-config\n";
	$txt	.= "Disallow: /oc-content\n";
	$txt	.= "Disallow: /oc-includes\n";
	$txt	.= "Disallow: /*?*\n\n";
	$txt	.= "Sitemap: http://$hostname/sitemap.xml";
	file_put_contents( $robot . $rname, $txt );
}
if(options('dmca') != null){
        if(strposa(canonical(), preg_split('/\n|\r\n?/',options('dmca')) )) :
                header("Location: /");
        endif;
}
?>