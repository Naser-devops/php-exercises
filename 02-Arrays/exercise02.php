<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>

<body>

    <ul>
        <?php
$color = array("white", "green", "red");
sort($color);
foreach($color as $value){
    echo "<li>$value</li>";
}
        ?>
    </ul>



</body>

</html>