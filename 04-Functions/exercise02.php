<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex1</title>
</head>

<body>

    <?php

 function  reverseString($word){
    for ($i= strlen($word)-1 ; $i >=0 ; $i--){
        echo $word[$i];
    }
 }
 reverseString("remove");
    ?>

</body>

</html>