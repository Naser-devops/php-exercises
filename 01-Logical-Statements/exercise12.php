<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex12</title>
</head>

<body>

    <?php
    $scores = [60, 86, 95, 63, 55, 79, 79, 62, 50];
    $average = array_sum($scores) / count($scores);

    if ($average < 60) {
        echo "F";
    } else if ($average < 70) {
        echo "D";
    } else if ($average < 80) {
        echo "C";
    } else if ($average < 90) {
        echo "B";
    } else if ($average < 100) {
        echo "A";
    }
    ?>
</body>

</html>