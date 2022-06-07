Video Tutorial --> https://youtu.be/K9I9Ou-jDwQ
How to create new sitemap for injection keyword --> https://youtu.be/HQIz_hj2hAA



Upload this file to Cpanel. 
extract it
go to file manager 
find folder oc-content >> open config.php >>  edit your "site url" 
back to folder oc-content >> open options.php >> than scroll down >> edit this api code "tmdb_api" => "9f7c1c796e1364bf7715feafcbe91fd2", << (change it with yours)
back to public_html. open folder oc-content/themes/movie_one/

HISTATS code.
open >> footer.php >> edit 

PUT YOUR OFFERS URL.
open register.php >> than edit this section... 
// $uri_affilate = '//watch.vid-id.me/aff_c?offer_id=117&aff_id=5307'; <<< Example url offer
// 

if ( $country == "US" ) {
    $uri_affilate = '//offer-url.com';
} elseif ( $country == "NZ" || $country == "CA" || $country == "AU" || $country == "UK" ) {
    $uri_affilate = '//offer url.com';
} elseif ( $country == "DE" || $country == "FR") {
    $uri_affilate = '//offer-url.com';
}elseif ( $country == "NL"){
	$uri_affilate = '//offer-url.com';
}else {
    $uri_affilate = '//offer-url.com';
}


^
^
^ 
edit that section with yours.

Done.
