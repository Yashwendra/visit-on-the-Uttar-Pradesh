<?php
$insert = false;
if(isset($_POST['usname'])){
$server  ="localhost";
$usename ="root";
$password="";
//write a connection on database 
$con = mysqli_connect($server, $usename, $password);
//check for the connection on the database
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "connection is successfully";

//connection variable 
$usname = $_POST['usname'];
$password =$_POST['password'];

$sql = "INSERT INTO `login`.`login` (`usname`, `password`) VALUES ( '$usname', '$password');";

 //execute the query
 if ($con->query($sql)== true) {
    //echo "successfully  inserted";
    //flage for 
    $insert = true;

}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
<style>
body {
	color: #fff;
	
}
.bg-img {
  /* The image used */
  background-image: url("images/bg.jpg");

  min-height: 100vh;
  
    

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.form-control {
	min-height: 41px;
	background: #fff;
	box-shadow: none !important;
	border-color: #e3e3e3;
}
.form-control:focus {
	border-color: #c05bdf;
}
.form-control, .btn {        
	border-radius: 2px;
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;		
}
.login-form form {
	color: #050202;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background:  rgba(235, 160, 231, 0.726);
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;	
	position: relative;	
}
.login-form h2 {
	font-size: 22px;
	margin: 35px 0 25px;
}

.login-form .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -50px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #70c5c0;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
	width: 100%;
}	
.login-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.login-form .btn, .login-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #4638c3 !important;
	border: none;
	margin-bottom: 20px;
}
.login-form .btn:hover, .login-form .btn:focus {
	background:#5cb85c !important;
}    
.login-form a {
	color: #fff;
	text-decoration: underline;
}
.login-form a:hover {
	text-decoration: none;
}
.login-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.login-form form a:hover {
	text-decoration: underline;
}
.login-form .bottom-action {
	font-size: 14px;
}
</style>
</head>
<body>
<div class="bg-img">
<div class="login-form" >
    <form action="login.php" method="post">
		
        <h2 class="text-center"><b>Login Tourist</b></h2> 
        <?php  
        if($insert == true){
       echo" <p class='text-center'><b>Login Successfully</b></p>";
        }
        ?>
        <div class="form-group">
        	<input type="text" class="form-control" name="usname" placeholder="usname" required="required">
        </div>
		   
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
</div>  
             
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block"> Submit</button>
        </div>
	
        
    </form>
    
</div>
</div>
<!--INSERT INTO `login` (`id`, `usname`, `password`) VALUES (NULL, 'sachin', 'singh123');-->
</body>
</html>
