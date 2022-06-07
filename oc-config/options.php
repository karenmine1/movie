<?php
$oc_options = array (

    /*
    |--------------------------------------------------------------------------
    | Iklan/Ads Banner
    |--------------------------------------------------------------------------
    | NOTE: Tolong di parse misal jika iklan <script javascript="___" ubah menjadi 
    | <script javascript='___'
    */

    "300x250" => "<a href='http://www.adversiting.com/'><img src='' alt='' title=''/></a>",
    "468x60" => "<a href='http://www.ocimscripts.com/'><img src='' alt='' title=''/></a>",
    "728x90" => "<a href='http://www.adversiting.com/'><img src='' alt='' title=''/></a>",

    /*
    |--------------------------------------------------------------------------
    | Page View URL = Default is 'view'
    |--------------------------------------------------------------------------
    | example = http://domain.com/view/contact/
    | if you want change this, please rename folder "view" on folder /oc-content/themes/themes-name/view
    */

    "url_page" => "view",

    /*
    |--------------------------------------------------------------------------
    | Movie URL = Default is 'movie'
    |--------------------------------------------------------------------------
    | example = http://domain.com/movie/294254/maze-runner-the-scorch-trials.html
    */

    "url_movie" => "movie",

    /*
    |--------------------------------------------------------------------------
    | TV Show URL = Default is 'tv'
    |--------------------------------------------------------------------------
    | example = http://domain.com/tv/1418/the-big-bang-theory.html
    */

    "url_tv" => "tv",

    /*
    |--------------------------------------------------------------------------
    | Video Page URL = Default is 'video'
    |--------------------------------------------------------------------------
    | example = http://domain.com/video/xxxx/the-big-bang-theory.html
    */

    "url_watch" => "watch",

    /*
    |--------------------------------------------------------------------------
    | Google Youtube Api v3 --> https://console.developers.google.com/
    |--------------------------------------------------------------------------
    | example = "api1,api2,api3,api4,api5"
    */

    "youtube_api" => "AIzaSyDp_uY4_zERTADMvvNGIN5_sw10phupoSc,AIzaSyDFtGaz9bPUpaDvyY-9M4yo3M0sjTD0YVI,AIzaSyCs7hqTf1MNU7I2VbrA6ODehLfAF4iwqYA",

    /*
    |--------------------------------------------------------------------------
    | TMDB.org Api
    |--------------------------------------------------------------------------
    | example = "api1,api2,api3,api4,api5"
    */

    "tmdb_api" => "9bb47842ee1cf14bf7a1ec4eca50375a",

    /*
    |--------------------------------------------------------------------------
    | DMCA URL LINK
    |--------------------------------------------------------------------------
    | Example = "http://domain.com/xxxx.html
http://domain.com/xxxx.html
http://domain.com/xxxx.html"
    | 
    | Separate by new line/Pisahkan dengan baris baru seperti diatas
    |
    */

    "dmca" => ""
);
?>