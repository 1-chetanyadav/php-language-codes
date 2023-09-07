<!-- String
Integer
Float (floating point numbers - also called double)
Boolean
Array

LATER >> 

Object
NULL
Resource -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Data Types</h2><br>";
    //String
    $x="this is string";
    echo $x;

    // int && float
    echo "<br>";
    $x=123;
    $x=1234;
    $y=123.123;
    echo $x;
    echo "<br>";
    var_dump($y);

    //bool
    echo "<br>";
$x = true;

//array
echo "<br>";
$cars = array("mxd","tata");
echo "cars > ";
echo $cars[1];

    ?>
</body>
</html>