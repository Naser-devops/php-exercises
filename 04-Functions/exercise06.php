<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex4</title>
</head>

<body>

    <?php

    function isArmstrong($number)
    {
        $digits = (string)$number;
        $sum = 0;

        for ($i = 0; $i < strlen($digits); $i++) {
            $sum += $digits[$i] ** 3;
        }

        if ($sum === $number) {
            echo $number . " is Armstrong Number";
        } else {
            echo $number . " is not Armstrong Number";
        }
    }

    isArmstrong(407);
  
  ?>


</body>

</html>