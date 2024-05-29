<?php
	require 'config.php';

	if (isset($_POST["submit"])) {
		$user_email = $_POST["reg_email"];
		$user_pass = $_POST["reg_pass"];
		$duplicate = mysqli_query($conn,"SELECT * from user_log where user_email = '$user_email' ");
		if (mysqli_num_rows($duplicate)>0) {
			echo "<script>	alert('Email already taken'); </script>";
		}
		else {
			$query = "INSERT INTO user_log VALUES('','$user_email','$user_pass')";
			mysqli_query($conn, $query);
			echo "<script>	alert('Registration Done'); </script>";
			header("Location: login.php");
		}
	}
	else{
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginn.css">
</head>
<body>
	<nav>
        <div class="sidebar">
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list" >
                        <a href="#" class="nav-link"  onclick="javascipt:location.href='login.php' ">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">User Login</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" >
                            <i class='bx bx-user icon'></i>
                            <span class="link">User Register</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" onclick="javascipt:location.href='adminLogin.php'">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Admin Login</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<div>
	<div class="container" id="user-register">
		<div class="form-container sign-in-container">
			<form action="" method="post">
				<h1>User Register</h1>
            	<br>
				<input type="email" placeholder="Email" id="reg_email" name="reg_email" required value=""/>
				<input type="password" placeholder="Password" id="reg_pass" name="reg_pass" required value=""/>
				<button type="submit" name="submit">Register</button>			
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlayyyy">
				<div class="overlay-panel overlay-right">
					<h1>Welcome</h1>
				</div>
			</div>
		</div>
	</div>

</div>

</body>

</html>