<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex4</title>
</head>

<body>

    <?php
function swap ($x ,$y){
$temp = $x;
$x=$y;
$y=$temp;
echo "x=$x y=$y";
}

swap(12,10);
    ?>

</body>

</html>