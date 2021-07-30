<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variable
$server  ="localhost";
$usename ="root";
$password="";
//create a database connection
$con = mysqli_connect($server, $usename, $password);

//check for connection sussess
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the db";

//collection of post variable 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO `us`.`us` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
 VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other', 
 current_timestamp());";
 //echo $sql;

 //execute the query
 if($con->query($sql)== true){
     //echo "successfully  inserted";
     //flage for 
     $insert = true;

 }
 else{
     echo "ERROR: $sql <br> $conn->error";
}
 $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img class="bh" src="images/hd.jpg" alt="bg">
    <div class="container">
        <h1><b>Visit On the Uttar Pradesh</b></h1>
        <p>Write a feedback ofter visited to discribe a place .</p>
        <?php
        if($insert == true){
      echo  "<p class='sb'>Thank for submitting your form. we are happy to see you joining for the US trip  </p>";
        }
       ?>
        <form action="mes.php" method="post">
<input type="text" name="name" id="name" placeholder="enter your name">
<input type="text" name="age" id="age" placeholder="enter your age">
<input type="text" name="gender" id="gender" placeholder="enter your gender">
<input type="email" name="email" id="email" placeholder="enter your email">
<input type="phone" name="phone" id="phone" placeholder="enter your phone">
<textarea name="other" name="other" id="other" cols="30" rows="10" placeholder="enter any other information"></textarea>
<button class="btn">Submit</button>
      
</form>
        </div>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `us` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'sachin singh', '22', 'male', 'singh@1gmail.com', '8052172863', 'this is the good value for in this number ', current_timestamp());-->
</body>
</html>