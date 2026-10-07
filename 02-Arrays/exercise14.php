<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex14</title>
</head>

<body>

    <?php
$array1 = array(2, 0, 10, 12, 6);

$filtered = array_filter($array1, function($value) {
    return $value != 0;
});

$min = min($filtered);
echo $min;
    ?>

</body>

</html>