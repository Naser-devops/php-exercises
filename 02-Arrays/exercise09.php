<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex9</title>
</head>

<body>

<?php
function convertToUppercase($array) {
    return array_map('strtoupper', $array);
}

$colors = array("red","blue", "white","yellow"); 

$uppercaseColors = convertToUppercase($colors);

echo "<pre>";
echo "Array\n";
echo "(\n";

foreach ($uppercaseColors as $color) {
    echo $color . "\n";
}

echo ")";
echo "</pre>";
?>


</body>

</html>