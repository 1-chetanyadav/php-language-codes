<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="php">
        <?php
    echo "<h2>Arithematic-ops</h2>";
    echo "<br>";

    //not-case-senstive

    ?>
        <?php
    echo "<br>";
    $variable1 = 12;
    $variable2 = 22;
    $variable3 = $variable2+$variable1;
    $variable4 = $variable2-$variable1;
    $variable5 = $variable2*$variable1;
    $variable6 = $variable2/$variable1;
    
    echo "add > $variable3";
    echo "<br>";
    echo "sub > $variable4";
    echo "<br>";
    echo "multi > $variable5";
    echo "<br>";
    echo "div > $variable6";
    echo "<br>";
    echo "<h4> ops -> *=2</h4>";
    echo "<br>";
    $variable7 = $variable6*=2;
    echo "var x 2 = >$variable7";
    $variable7 = $variable6+=2;
    echo "<br>";
    echo "var x 2 = >$variable7";
    echo "<br>";
    
    
    echo "<h4> Var_dump</h4>";
    echo "<h5> store info and type >> The function var_dump() displays structured information (type and value) about one or more expressions/variables</h5>";
    echo "<br>";
    echo "the value of 1==2 is:";
    echo var_dump(1==2);
    echo "<br>";
    echo "the value of 10>=2 is:";
    echo var_dump(10>=2);
    echo "<br>";
    echo "the value of 9>2 is:";
    echo var_dump(9>2);
    echo "";
    echo "";

    echo "<br>";
    
    ?>
        i am me
    </div>
</body>

</html>