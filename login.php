<?php
    require 'config.php';
    if(isset($_POST["submit"])){
        $useremail = $_POST["useremail"];
        $userpass = $_POST["userpass"];
        $result = mysqli_query($conn,"SELECT * FROM user_log where user_email = '$useremail'") or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) > 0){
            if($userpass == $row["user_pass"]){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row["user_id"];
                header("Location: index.php");
            }
            else{
                echo"<script> alert('Worng Password'); </script>";
            }
        }
        else{
            echo"<script> alert('User Not Registered'); </script>";
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
                        <a href="#" class="nav-link">
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
                        <a href="#" class="nav-link" onclick="javascipt:location.href='adminLogin.php' ">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Admin Login</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <h1>hello</h1>
	<div class="container" id="user-login">
		<div class="form-container sign-in-container">
			<form action="" method="post">
				<h1>User Sign in</h1>
            	<br>
				<input type="email" placeholder="Email" id="useremail" name="useremail" required value=""/>
				<input type="password" placeholder="Password" id="userpass" name="userpass" required value=""/>
				<button  type="submit" name="submit">Login</button>			
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


</body>

</html>