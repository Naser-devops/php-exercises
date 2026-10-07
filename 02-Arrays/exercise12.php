<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex12</title>
</head>

<body>

    <?php
    $words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
    $lengths = array_map('strlen', $words);
    $min_length = min($lengths);
    $max_length = max($lengths);
    echo "The shortest array length is  " . $min_length . "<br>" . " The longest array length is : " . $max_length ;
    ?>

</body>

</html>