<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex9</title>
</head>

<body>

    <?php
    $a =10 ;
    $b=0;
    $operator = "+";

    if ($operator === "+") {
        echo $a + $b;
    } else if ($operator === "-") {
        echo $a - $b;
    } else if ($operator === "*") {
        echo $a * $b;
    } else if ($operator === "/") {
    if( $b == 0) {
        echo "Division by zero is not allowed.";
    } else {
        echo $a / $b;
    }
    } else {
        echo "Invalid operator";
    }

    ?>
</body>

</html>