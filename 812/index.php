<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

    <title>Математичні обчислення</title>
    
</head>
<body>
   <h1>Математичні обчислення</h1>
 <form method="GET">
        <label for="a">Число a:</label>
        <input type="number" name="a" id="a" required>

        <label for="b">Число b:</label>
        <input type="number" name="b" id="b" required>

        <input type="submit" value="Обчислити">
    </form>
    <?php

    $a = isset($_GET['a']) ? (int)$_GET['a'] : 0;
    $b = isset($_GET['b']) ? (int)$_GET['b'] : 0;

 
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $b != 0 ? $a / $b : 'Ділення на нуль неможливе';


    echo "<p>Число a: $a</p>";
    echo "<p>Число b: $b</p>";
    echo "<p>Сума: $sum</p>";
    echo "<p>Добуток: $product</p>";
    echo "<p>Різниця: $difference</p>";
    echo "<p>Частка: $quotient</p>";
    ?>


</body>
</html>
