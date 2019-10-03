<?php
?>
<html>
    <head>
        <title>project</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
        <link rel="shortcut icon" href="images/_ico-2.png" type="image/x-icon">
        </head>
        <body>
            <div class="loginbox">
                <img src="css/Images/avatar.png" class="avatar">
                <h1>Sign Up</h1>
                <form action="" method="post"> 
				
				<p>Firstname</p>
                   <input type="text" name="firstname" placeholder="Enter firstname" required pattern="[A-Za-z]{1,15}"title="Username should only contain lowercase letters. e.g. john" >
				   <p>Surname</p>
                   <input type="text" name="surname" placeholder="Enter surname" required pattern="[A-Za-z]{1,15}"title="Username should only contain lowercase letters. e.g. john" >
				
                    <p>Username</p>
                   <input type="text" name="username" placeholder="Enter username" required pattern="[A-Za-z]{1,15}"title="Username should only contain lowercase letters. e.g. john" >
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Enter email" required  >
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter password" 
                           required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" 
                           onchange="form.pwd2.pattern = RegExp.escape(this.value);" 
                           title="Password should contain Capital letter, small letter and a minimum of six characters">
                    <p>Number</p>
                    <input type="text" name="contact" placeholder="Enter your phone number" required pattern="[0-9]{12}" title="twelve digit code example +254 " >
                 <p>Birthday</p>
				 <input type="date" name="birthday" placeholder="" required >
				 <p>Gender</p>
				 <input type="radio" name="gender" value="male" checked> Male<br>
                   <input type="radio" name="gender" value="female"> Female<br>
                   <input type="radio" name="gender" value="other"> Other
				 <input  type="submit"  formaction="signupverify.php"name="" value="Sign Up" >    
                </form>
            </div>
        </body>
</html>