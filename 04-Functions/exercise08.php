<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex4</title>
</head>

<body>

    <?php
    function removeDuplicates($array)
    {
        print_r(array_values(array_unique($array)));
    }

    $numbers = [2, 4, 7, 4, 8, 4];
    removeDuplicates($numbers);
    ?>


</body>

</html>