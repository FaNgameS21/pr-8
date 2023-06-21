<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Обробка рядків</title>
</head>
<body>
    <h1>Обробка рядків</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $e = isset($_POST['e']) ? $_POST['e'] : '';
        $f = isset($_POST['f']) ? $_POST['f'] : '';

        // Виведення першої, потім другої
        echo "<p>а) Перший рядок: $e Другий рядок: $f</p>";
   
      echo "<p>б) Перший рядок: $f Другий рядок: $e</p>";
    } else {
        echo "<p>Помилка</p>";
    }
    ?>
</body>
</html>