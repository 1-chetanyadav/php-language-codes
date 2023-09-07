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
 $sql = "INSERT INTO `formbca`.`form` ( `name` , `roll_no` , `Email` , `dt` )  VALUES 
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
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet"> -->
</head>

<body>
<?php
    if($insert == true){
        echo "thanks";
    }
    ?>
    <div class="main">
        <img src="lnct_mca.jpg" alt="bg" style=" position: absolute;
        width: 100%;
        z-index: -1; ">
    <div class="top">
        <h1>Stutent Information Collection</h1>
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
            </div>
        </div>
    </div>
    <script src="script.js"></script>


    <!-- CREATE TABLE `formbca`.`forminfo` (`Name` VARCHAR(16) NOT NULL , `Roll no` INT(4) NOT NULL , `Email` VARCHAR(20) NOT NULL , `S.no` INT(3) NOT NULL ) ENGINE = InnoDB; -->

</body>

</html>