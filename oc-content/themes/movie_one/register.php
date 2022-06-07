<?php 
require_once($_SERVER['DOCUMENT_ROOT'] .'/oc-config/autoload.php');
if ($countryCode != "") { 
        $country = $countryCode;
} else { 
        $country = 'US'; 
}

// List Country ID = //countryid.com/
// example atau contoh below:
// 
// $uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
// 

if ( $country == "US" ) {
    $uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
} elseif ( $country == "NZ" || $country == "CA" || $country == "AU" || $country == "UK" ) {
    $uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
} elseif ( $country == "DE" || $country == "FR") {
    $uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
}elseif ( $country == "NL"){
	$uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
}else {
    $uri_affilate = 'https://vod78d.club/tuname.php?z=32238&d=1';
}
?>
<html>
<head>
<title>Redirecting</title>
<meta http-equiv="refresh" content="0;url=<?php echo $uri_affilate;?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
body {padding-top: 70px;padding-bottom: 30px;}
.centered {position: fixed;top: 50%;left: 50%;margin-top: -200px;margin-left: -250px;border: 1px solid #DBDBDB;width: 500px;text-align: center;height: 225px;padding: 20px;font-size: 20px;background-color: rgba(233, 233, 233, 0.44);font-family: Arial, Helvetica, sans-serif;text-shadow: 1px 1px 1px #5F5F5F;}
</style>
</head>
<body>
<div class="centered">
<h2>Please Wait </h2>
You Are Automatic Redirecting<br>
To Secure Page<br><br>
</div>
</body>
</html>