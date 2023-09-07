<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>How many even number you want to print</h2>
<form method="POST">
 <label for="number"> NUMBER : </label>
 <input type="number" name="number" required>
 <input type="submit" name="Submit" value="Submit">
</form>

<?php

if (isset($_POST['Submit'])){
$n=$_POST['number'];
$count=2;
for ($i=2; $i < $n; $i++) { 
    if ($i%$count==0) {
        echo $i;
        echo "<br>";
    }
}
echo "<br>";
echo "even number not possible further";
}
?>
</body>
</html>