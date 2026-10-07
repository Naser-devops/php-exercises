<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex8</title>
</head>

<body>

    <?php
 
    $units = 120;

    if ($units <= 50) {
        echo $units * 2.5;
    } else if ($units <= 150) {
        echo (50 * 2.5) + (($units - 50) * 5);
    } else if ($units <= 250) {
        echo (50 * 2.5) + (100 * 5) + (($units - 150) * 6.2);
    } else {
        echo (50 * 2.5) + (100 * 5) + (100 * 6.2) + (($units - 250) * 7.5);
    }
    ?>
</body>

</html>