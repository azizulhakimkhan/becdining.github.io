<?php
  include 'config.php';
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>Login-BEC</title>
<h2 align="center" class="h"> Log-in to Your Account</h2>
<h2 class="notice"><marquee behavior="loop" direction="left"> The Dining of Barishal Engineering College is now on online!! Please register on bellow and log in to your account. The meal calculation of yours is in your control!!! </marquee></h2>
</head>
<body id="b" bgcolor=" #f9e79f">
<center>
<div id="r">
<img src="logo.png" class="img"></img>
<h2 style="font-family:Comic Sans MS; font-size:20pt; "> Barishal Engineering College </h2>
<center><form style="font-family:cursive; font-size:14pt; " action="login.php" method="POST">

<b><label>Email</label><br>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input>
<b><label>Password</label><br>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input><br>

<!button work>

<input name="login" type="submit" id="button" value="LOGIN">
</input>
<a href="register.php"><input name="reg" type="button" id="button" value="REGISTER">
</input>


</form></center>

</center>



<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='home.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>










</div>
</body>

</html>
