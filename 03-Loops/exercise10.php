<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex10</title>
</head>

<body>



    <?php
    $n = 5;
    $current_number = 1;

    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $current_number . " ";
            $current_number++;
        }
        echo "<br>";
    }
    ?>

</body>

</html>