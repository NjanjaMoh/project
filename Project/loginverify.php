<?php
session_start();
$con=mysqli_connect('localhost', 'root', '','project')
    or die("Could not establish connection");
mysqli_select_db($con,'project') or
    die ("Could not select the db");
if(isset($_POST['Username']) && isset($_POST['Password'])){
    
    $username=$_POST['Username'];
    $password=md5($_POST['Password']);
    
   $_SESSION['Username']=$username;
   $_SESSION['Password']=$password;
    
    
    $sql=mysqli_query($con, "SELECT * FROM users WHERE Username = '$username' AND Password= '$password'");
   
    
    $rows = mysqli_num_rows($sql);
   
   
    if($sql && $rows > 0){
        $arr_result = mysqli_fetch_array($sql);
     header ("location:home.php");
        
    }else{
        #echo "Login failed".mysqli_error($con);
        echo '<script> alert ("Login failed");</script>';
        header("Location:login.php");
        
    }
    
}
?>