<!-- %progdir%\modules\php\%phpdriver%\php-win.exe -c %progdir%\modules\php\%phpdriver%\php.ini -q -f %sitedir%\acibus\private\send\message.php -->
<?php
require_once ("private/result.php");
$myobj = new result(what1, what2, what3);
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

mail ($to, $subject, $message, $headers); ?>