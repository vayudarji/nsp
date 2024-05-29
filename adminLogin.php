<?php

    if(isset($_POST['submit'])){
        $mail=$_POST['email'];
        $pass=$_POST['password'];
        if($mail == "admin@gmail.com" && $pass== "admin"){
            header("Location: admin/indexAdmin.php");
        }
    else{
        echo"<script>alert('Mail OR Password Not Correct'); </script>";

    }
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
                        <a href="#" class="nav-link" onclick="javascipt:location.href='login.php'">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">User Login</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" onclick="javascipt:location.href='logout.php' ">
                            <i class='bx bx-user icon'></i>
                            <span class="link">User Register</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" onclick="">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Admin Login</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

	<div class="container" id="user-login">
		<div class="form-container sign-in-container">
			<form action="" method="post">
				<h1>Admin Sign in</h1>
            	<br>
				<input type="email" placeholder="Email" id="email" name="email"/>
				<input type="password" placeholder="Password" id="password" name="password"/>
				<button  type="submit" name="submit">Adminnn</button>			
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlayyyy">
				<div class="overlay-panel overlay-right">
					<h1>Welcome Admin</h1>
				</div>
			</div>
		</div>
	</div>


</body>

</html>