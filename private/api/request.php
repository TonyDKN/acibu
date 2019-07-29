<?php
require_once "auth.php";
$current_date = date("d.m.y");
/**
 * задаем массив запроса который обработается json
 */
$subdomain = 'nowmd';
/**
 * URL метода
 */
$link = 'https://' . $subdomain . '.amocrm.ru/api/v2/tasks?filter[date_create][from]=1561939200&filter[date_create][to]=2524608000,[limit_rows][500]';

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

$code = (int) $code;
$errors = array(
    301 => 'Moved permanently',
    400 => 'Bad request',
    401 => 'Unauthorized',
    403 => 'Forbidden',
    404 => 'Not found',
    500 => 'Internal server error',
    502 => 'Bad gateway',
    503 => 'Service unavailable',
);

try
{
    if ($code != 200 && $code != 204) {
        throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
    }
} catch (Exception $E) {
    die('Ошибка: ' . $E->getMessage() . PHP_EOL . 'Код ошибки: ' . $E->getCode());
}
$Response = json_decode($out, true);
foreach ($Response['_embedded']['items'] as $item){
   $factory [] =  $item['created_at'];
}
?><pre><? print_r($factory); ?></pre><?


foreach ($factory as $value) {
    if ($value=$current_date){

    }
}
