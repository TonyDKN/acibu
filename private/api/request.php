<?php
require_once "auth.php";
$current_date = date("d.m.y");
var_dump($current_date);
/**
 * задаем массив запроса который обработается json
 */
$subdomain = 'nowmd';
/**
 * URL метода
 */
$link = 'https://' . $subdomain . '.amocrm.ru/api/v2/tasks?filter[date_create][from]=1564358400&filter[date_create][to]=1561939200,[limit_rows][500]';

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

?>


<html>
<head>
    <title>Просроченные задачи из Amo</title>
</head>
<body>
<h1>Сегодня должны быть сделаны следующие задачи</h1>

<h2>Илья Макаров</h2>
<h3>Просрочено:</h3>
<ul>
<?
    foreach ($Response['_embedded']['items'] as $item):
        $CreateTime = date("d.m.Y", $item['created_at']);

            $current_date_unix = strtotime($current_date);
            $CreateTime_unix = strtotime($CreateTime);
            $days = ($current_date_unix - $CreateTime_unix)/(24 * 60 * 60 );?>

                    <? if ($days>0 && $item['created_by'] === 896158):
                       foreach ($item["_links"] as $links):
                            ?>
                            <li><pre><?print_r($item['created_by']);?></pre> (<a href="<?=$links["href"]?>"><?=$links["href"]?></a>) (просрочено на <?=$days?> дней)</li>
                        <? endforeach;
                    endif;
    endforeach;
 ?>
            </ul>
            <h3>На сегодня:</h3>
            <ul>
                <?
                foreach ($Response['_embedded']['items'] as $item):
                    $CreateTime = date("d.m.Y", $item['created_at']);

                    $current_date_unix = strtotime($current_date);
                    $CreateTime_unix = strtotime($CreateTime);
                    $days = ($current_date_unix - $CreateTime_unix)/(24 * 60 * 60 );?>

                    <? if ($days === 0 && $item['created_by'] === 896158):
                    ?><pre><?print_r($value);?></pre>
                    <? foreach ($item["_links"] as $links):
                    ?>
                    <li><pre><?print_r($item['created_by']);?></pre> (<a href="<?=$links["href"]?>"><?=$links["href"]?></a>) (просрочено на <?=$days?> дней)</li>
                <? endforeach;
                endif;
                endforeach;
                ?>
            </ul>
<h2>Илья Сиркин</h2>
<h3>Просрочено:</h3>
<ul>
    <?
    foreach ($Response['_embedded']['items'] as $item):
        $CreateTime = date("d.m.Y", $item['created_at']);

        $current_date_unix = strtotime($current_date);
        $CreateTime_unix = strtotime($CreateTime);
        $days = ($current_date_unix - $CreateTime_unix)/(24 * 60 * 60 );?>

        <? if ($days>0 && $item['created_by'] === 2498146):
        foreach ($item["_links"] as $links):
            ?>
            <li><pre><?print_r($item['created_by']);?></pre> (<a href="<?=$links["href"]?>"><?=$links["href"]?></a>) (просрочено на <?=$days?> дней)</li>
        <? endforeach;
    endif;
    endforeach;
    ?>
</ul>
<h3>На сегодня:</h3>
<ul>
    <?
    foreach ($Response['_embedded']['items'] as $item):
        $CreateTime = date("d.m.Y", $item['created_at']);

        $current_date_unix = strtotime($current_date);
        $CreateTime_unix = strtotime($CreateTime);
        $days = ($current_date_unix - $CreateTime_unix)/(24 * 60 * 60 );?>

        <? if ($days === 0 && $item['created_by'] === 2498146):
        ?><pre><?print_r($value);?></pre>
        <? foreach ($item["_links"] as $links):
        ?>
        <li><pre><?print_r($item['created_by']);?></pre> (<a href="<?=$links["href"]?>"><?=$links["href"]?></a>) (просрочено на <?=$days?> дней)</li>
    <? endforeach;
    endif;
    endforeach;
    ?>
</ul>

</body>
</html>

