<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex10</title>
</head>
<body>





    <?php
    function convertToLowercase($array)
    {
        return array_map('strtolower', $array);
    }

$colors = array("RED","BLUE", "WHITE","YELLOW"); 
    $lowercaseColors = convertToLowercase($colors);

    echo "<pre>";
    foreach ($lowercaseColors as $color) {
        echo $color . "\n";
    }
    echo "</pre>";
    ?>
</body>
</html>