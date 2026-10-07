<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex1</title>
</head>

<body>

    <?php

    function checkPrime($number)
    {
        $isPrime = true;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $isPrime = false;
            }
        }
        if ($isPrime) {
            echo $number . " is a prime number";
        } else {
            echo $number . " is not a prime number";
        }
    }


    checkPrime(7);
    ?>

</body>

</html>