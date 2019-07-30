<?php
$user = array(
    'USER_LOGIN' => 'im@nowmedia.ru',
    'USER_HASH' => '26d6267bb25fdb76b0d6a6a41b01c317',
);

$subdomain = 'nowmd';

$link = 'https://' . $subdomain . '.amocrm.ru/private/api/auth.php?type=json';


        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($user));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname
            (__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname
            (__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('IF-MODIFIED-SINCE: Mon, 01 Aug 2017 07:07:23 UTC'));
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE); #Получим HTTP-код ответа сервера
        curl_close($curl); #Завершаем сеанс cURL
        /* Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
        $code = (int)$code;
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
        try {
            #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
            if ($code != 200 && $code != 204) {
                throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
            }

        } catch (Exception $E) {
            die('Ошибка: ' . $E->getMessage() . PHP_EOL . 'Код ошибки: ' . $E->getCode());
        }
        /*
        Данные получаем в формате JSON, поэтому, для получения читаемых данных,
        нам придётся перевести ответ в формат, понятный PHP
         */
        $Response = json_decode($out, true);

        $Response = $Response['response'];
        if (isset($Response['auth'])) #Флаг авторизации доступен в свойстве "auth"
        {
            return 'Авторизация удалась';
        }
        return 'Авторизация не удалась';


$to = "ad@nowmedia.ru";
$subject = "Просроченные задачи из Amo";
$headers = "Content-type:text/html; charset = utf-8\r\n";
$headers .= "From: AmoCRM";
$headers .= "Reply to ad@nowmedia.ru";
$message = <<<CONTENT
<html>
<head>
    <title>Просроченные задачи из Amo</title>
</head>
<body>
<h1>Сегодня должны быть сделаны следующие задачи</h1>

<h2>Илья Макаров</h2>
<h3>Просрочено:</h3>
<ul>
    <li>Название сделки <? ?> (просрочено на X дней)</li>
    <li>Название сделки (активная ссылка на карточку сделки) (просрочено на X дней)</li>
    <li>Название сделки (активная ссылка на карточку сделки) (просрочено на X дней)</li>
</ul>
<h3>На сегодня:</h3>
<ul>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
</ul>

<h2>Илья Сиркин</h2>
<h3>Просрочено:</h3>
<ul>
    <li>Название сделки (активная ссылка на карточку сделки) (просрочено на X дней)</li>
    <li>Название сделки (активная ссылка на карточку сделки) (просрочено на X дней)</li>
    <li>Название сделки (активная ссылка на карточку сделки) (просрочено на X дней)</li>
</ul>
<h3>На сегодня:</h3>
<ul>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
    <li>Название сделки (активная ссылка на карточку сделки)</li>
</ul>
</body>
</html>
CONTENT;

mail ($to, $subject, $message, $headers);