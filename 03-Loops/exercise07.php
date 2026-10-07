<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>

<body>



    <?php
    $n = 10;
    $first = 0;
    $second = 1;
    $fib = [];
    $fib[] = $first;
    $fib[] = $second;

    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        $fib[] = $next;
        $first = $second;
        $second = $next;
    }
    echo implode(", ", $fib);
    ?>

</body>

</html>