<?php
session_start();
$con=mysqli_connect('localhost', 'root', '','project')
    or die("Could not establish connection");
mysqli_select_db($con,'project') or
    die ("Could not select the db");
if(isset($_POST['Username']) && isset($_POST['Password'])){
    
    $username=$_POST['Username'];
    $password=md5($_POST['Password']);
    
   $_SESSION['Firstname']=$firstname;
   $_SESSION['Surname']=$surname;
   $_SESSION['Username']=$username;
   $_SESSION['email']=$email;
   $_SESSION['Number']=$number;
   $_SESSION['password']=$password;
   $_SESSION['Birthday']=$birthday;
   $_SESSION['Gender']=$gender;
    
    $sql=mysqli_query($con, "INSERT INTO users(userid, Firstname, Surname, Username, email, Password, Number, Birthday, Gender)
	VALUES (1, 'mary', 'njanja', 'mosh', '123@gmail.com', $password,0700470627, 23/8/2012, 'male');
   
    
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