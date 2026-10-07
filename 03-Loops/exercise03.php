<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>

<body>

    <?php //اعاده مشفاهمو 
    for ($i = 1; $i <= 5; $i++) { //done
        for ($j = 1; $j <= 5; $j++) {//done
            if ($j < 6 - $i) {
                echo "1 ";           // ← بدل "A "
            } else {
                echo $i . " ";       // ← بدل chr(64 + $i)
            }
        }
        echo "<br>";
    }
    ?>

</body>

</html>