<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diamond Pattern</title>
</head>

<body>

    <?php
    for ($i = 1; $i <= 9; $i++) {

        // 1) حساب عدد المسافات
        $spaces = abs(5 - $i);

        // 2) طباعة المسافات (استخدم &nbsp; عشان تظهر في المتصفح)
        for ($s = 1; $s <= $spaces; $s++) {
            echo "&nbsp;";
        }

        // 3) حساب عدد الحروف
        $letters = 5 - abs(5 - $i);

        // 4) طباعة الحروف
        for ($j = 1; $j <= $letters; $j++) {
            echo chr(64 + $j) . " ";
        }

        // 5) نزول سطر جديد
        echo "<br>";
    }
    ?>

</body>

</html>