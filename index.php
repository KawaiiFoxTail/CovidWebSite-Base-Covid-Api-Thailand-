<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/main1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class = "covid-api-box" ><?php
$url = "https://covid19.th-stat.com/api/open/today";

$sasa = curl_init($url);

curl_setopt($sasa, CURLOPT_URL, $url);
curl_setopt($sasa, CURLOPT_POST, true);
curl_setopt($sasa, CURLOPT_RETURNTRANSFER, true);


$sasa1 = curl_exec($sasa);

if($e = curl_error($sasa)) {
    echo $e;
}
else {
    $decode = json_decode($sasa1);
    foreach($decode as $sasa2 => $sasa3) {
        echo $sasa2 . ': ' . $sasa3 . '<br>';
    }
}


?></div>
</body>
</html>
