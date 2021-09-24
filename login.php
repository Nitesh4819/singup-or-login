<!DOCTYPE html>
<html lang="en">
<head>

    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
     rel="stylesheet">
     <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <div class="row">
       <div class="col-sm-4" ></div>
       <div class="col-sm-4" >
<div class="login">
        <form action="" method="post">
            <div class="mb-3">
              <label  class="form-label">Email address</label>
              <input type="email"  name="e" class=" inp form-control" id="email">
              
            </div>
            <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="password" name="p" class=" inp form-control" id="pass">
            </div>
           
            <button type="submit" name="sub"  class=" form_btn btn btn-primary" value="login">Login </button>
          
</form>
<p style="font-size: 12px; text-align: center; margin-top: 10px;">forget password</p>
<p>dont have an account?<a href="signup.php">signup</a></p>
        </div>
       </div>
       <div class="col-sm-4"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</div>
<?php 

if(isset($_POST['sub']))
{
$email=$_POST["e"];
$pass=$_POST["p"];

$con=mysqli_connect("localhost","root","","sstechb6");
$c= "SELECT * FROM iswitch WHERE sEmail='$email' &&  sPassword='$pass'";

$query=mysqli_query($con,$c);
$row=mysqli_num_rows($query);
if($row>0)
{
  echo "<script> alert('Login successfully');</script>";
}
else{

  echo"<script> alert('login failed');</script>";
}

}


?>

</body>
</html>