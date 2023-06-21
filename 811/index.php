<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

    <title>Суперглобальні змінні PHP</title>
    
</head>
<body>
    <h1>Суперглобальні змінні PHP</h1>

    <table>
        <tr>
            <th>Позначення зміної</th>
            <th>Характеристика</th>
            <th>Отримане значення</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>Глобальні змінні PHP, доступні з будь-якого місця скрипту</td>
            <td><?php var_dump($GLOBALS); ?></td>
        </tr>
        <tr>
            <td>$_SERVER</td>
            <td>Інформація про сервер та поточний запит</td>
            <td><?php var_dump($_SERVER); ?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Дані, передані методом GET</td>
            <td><?php var_dump($_GET); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Дані, передані методом POST</td>
            <td><?php var_dump($_POST); ?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Інформація про завантажені файли</td>
            <td><?php var_dump($_FILES); ?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>Інформація про куки, збережені на клієнтському браузері</td>
            <td><?php var_dump($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Інформація про поточну сесію</td>
            <td><?php var_dump($_SESSION); ?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Дані, передані методом GET, POST або COOKIE</td>
            <td><?php var_dump($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Інформація про середовище сервера</td>
            <td><?php var_dump($_ENV); ?></td>
        </tr>
    </table>
</body>
</html>
