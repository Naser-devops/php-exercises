<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>

<body>

    <?php
    $temperatures = array(
        78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
        68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );
    
    // 1. ترتيب المصفوفة
    sort($temperatures);
    
    // 2. حساب وطباعة المعدل
    $average = array_sum($temperatures) / count($temperatures);
    echo "Average Temperature is: " . $average . "<br>";
    
    // 3. استخراج الدرجات الأقل وطباعتها
    $lowest = array_slice($temperatures, 0, 5);
    echo "List of five lowest temperatures: " . implode(", ", $lowest) . ", <br>";
    
    // 4. استخراج الدرجات الأعلى وطباعتها
    $highest = array_slice($temperatures, -5);
    echo "List of five highest temperatures: " . implode(", ", $highest) . ", <br>";
    ?>

</body>

</html>
