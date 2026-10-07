<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>

<body>

    <?php

    $a = 5;
    $b = 3;
    $c = 10;

    if ($a >= $b && $a >= $c) {
        echo $a;
    } else if ($b >= $a && $b >= $c) {
        echo $b;
    }else{
        echo $c;
    }



    ?>
</body>

</html>