<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>

<body>


    <?php
$cities=array("italy"=>"Rome","France"=>"Paris","Germany"=>"Berlin","Greece"=>"Athens");
asort($cities);
foreach($cities as $country=>$capital){
 echo "the capital of $country is $capital <br>";
}
    ?>



</body>

</html>