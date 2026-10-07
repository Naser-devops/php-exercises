<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex8</title>
</head>

<body>



    <?php
    echo "<table cellpadding='3px' cellspacing='0px' border='1'>";

    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            $result = $i * $j;
            echo "<td>$i * $j = $result</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>