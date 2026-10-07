<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex3</title>
</head>

<body>

    <?php
    function checkLower($word)
    {
        if ($word === strtolower($word)) {
            echo "Your String is Ok";
        } else {
            echo "Your String is not Ok";
        }
    }

    checkLower("naser");
    ?>

</body>

</html>