<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Математичні обчислення</title>
</head>
<body>
    <h1>Математичні обчислення</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $c = isset($_POST['c']) ? (int)$_POST['c'] : 0;
        $d = isset($_POST['d']) ? (int)$_POST['d'] : 0;
        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $d != 0 ? $c / $d : 'Ділення на нуль неможливе';
        echo "<p>Число c: $c</p>";
        echo "<p>Число d: $d</p>";
        echo "<p>Сума: $sum</p>";
        echo "<p>Добуток: $product</p>";
        echo "<p>Різниця: $difference</p>";
        echo "<p>Частка: $quotient</p>";
    } else {
        echo "<p>Помилка: Недійсний метод запиту.</p>";
    }
    ?>
</body>
</html>