<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2>Enter Your age !
</h2>
<form method="POST">
    <label for="age">AGE : </label>
    <input type="number" name="age" required>
    <input type="submit" name="Submit" value = "submit">

    
</form>
       <?php
        if (isset($_POST['Submit'])) {
            $age = $_POST['age'];
            # code...
            if ($age>17){
                echo "<br>YOUR AGE IS :";
                echo $age;
                echo "<br>YOU CAN VOTE";
            }
            else {
                echo "<br>YOUR AGE IS :";
                echo $age;
                echo "<br>YOU CAN'T VOTE";
            }
            //echo "your age is $age";
        }
        //echo "your age is $age";
    ?>
</body>

</html>