<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>

<body>
//اعاده مشفاهمووو 
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j < 6 - $i) {
                echo "A ";
            } else {
                echo chr(64 + $i) . " ";
            }
        }
        echo "<br>";
    }
    ?>

</body>

</html>