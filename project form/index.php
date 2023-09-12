<?php
$insert=false;
if(isset($_POST['name'])) {
    

    $server ="localhost";
 $username="root";
 $password="";
 $con = mysqli_connect($server, $username, $password);

 if(!$con){
    die("connection failed". mysqli_connect_error());
 }
 //echo "sucess";
 $name = $_POST['name'];
 $roll_no = $_POST['roll_no'];
 $Email = $_POST['Email'];
 $sql = "INSERT INTO `formbca`.`forms` ( `name` , `roll_no` , `Email` , `dt` )  VALUES 
 ('$name' , '$roll_no' , '$Email' , current_timestamp());";
 
 //echo $sql;
 
 if($con->query($sql)==true){
     //echo "sucessful inserted";
     $insert = true;
    }
 else{
       echo "Unsucessful Inserted $sql <br> $con->error";
     }
 $con->close();
 $insert = true;
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="main">
        <img src="lnct_mca.jpg" alt="bg" style=" position: absolute;
        width: 100%;
        z-index: -1; ">
    <div class="top">
        <h1>Stutent Information Collection</h1>
        <h3>made by chetan yadav</h3>
        <h3>Please enter your details to get reward</h3>
       
    </div>
 
        <div class="main2">
            <div class="form">
                <form action="index.php" method="post">
                    <!-- <label for="form"></label> -->
                    <input type="text" id="name"  name="name" placeholder="Name" require>
                    <input type="text" id="roll_no"  name="roll_no" placeholder="Roll no" require>
                    <input type="text" id="Email"  name="Email" placeholder="Email" require>
                    <!-- <input type="submit"  id="submit" name="submit" value="submit"> -->
                    <button class="btn">Submit</button>
                </form>
                <div class="sucess">
                    <?php
    if($insert == true){
        echo "<p class='sucess-message'>THANK  U  FOR  SUBMISSION  QT </p>";
    }
    ?>
</div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>


    <!-- CREATE TABLE `formbca`.`forminfo` (`Name` VARCHAR(16) NOT NULL , `Roll no` INT(4) NOT NULL , `Email` VARCHAR(20) NOT NULL , `S.no` INT(3) NOT NULL ) ENGINE = InnoDB; -->

</body>

</html>