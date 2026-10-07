<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex4</title>
</head>

<body>

    <?php
  
  function isPalindrome($text)
    {
        $clean = strtolower(preg_replace("/[^a-zA-Z]/", "", $text));

        if ($clean === strrev($clean)) {
            echo "Yes it is a palindrome";
        } else {
            echo "No it is not a palindrome";
        }
    }

    isPalindrome("Eva, can I see bees in a cave?");
    ?>


</body>

</html>