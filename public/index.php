<?php
/**
 * @author  Foma Tuturov <fomiash@yandex.ru>
 */

// All calls are sent to this file.
// Все вызовы направляются в этот файл.

// define('HLEB_START', microtime(true));
// define('HLEB_FRAME_VERSION', "1.6.69");
// define('HLEB_PUBLIC_DIR', __DIR__);


// General headers.
// Общие заголовки.

// header("Referrer-Policy: no-referrer-when-downgrade");
// header("X-XSS-Protection: 1; mode=block");
// header("X-Content-Type-Options: nosniff");
// header("X-Frame-Options: SAMEORIGIN");
// ...

// Initialization.
// Инициализация.

// require __DIR__ . '/../vendor/phphleb/framework/bootstrap.php';






// https://api.openweathermap.org/data/2.5/weather?q=London
// &appid=599abb33dacb212628592cd89fc30f3f


$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = array(
	'id' => '2656396',
	'appid' => '57be7c28549ba906dda991a015238f2a',
	'units' => 'metric',
	'lang' => 'en',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);

echo '<hr/>';

$date = date('d-m-y h:i:s');
echo 'Request has been done at: ' . $date;

echo '<hr/>';

$milliseconds = floor(microtime(true) * 1000);
echo 'UNIX Time: ' . $milliseconds;

// exit();


