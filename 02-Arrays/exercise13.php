<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex13</title>
</head>

<body>

    <?php
$range = range(11, 20);
shuffle($range);
$randomNumbers = array_slice($range, 0, 10);
echo implode(" " ,$randomNumbers);
    ?>

</body>

</html>