<?php
	require 'config.php';
	if (isset($_POST["button"])) {
		$user_email = $_POST["reg_email"];
		$user_pass = $_POST["reg_pass"];
		$duplicate = mysqli_query($conn,"SELECT * from user_log where user_email = '$user_email' ") or die(mysqli_error($conn));
		if (mysqli_num_rows($duplicate)>0) {
			echo "<script>	alert('Email already taken'); </script>";
		}
		else {
			$query = "INERT INTO user_log VALUES('' , '$user_email' , '$user_pass')";
			mysqli_query($conn, $query) or die(mysqli_error($conn));
			echo "<script>	alert('Registration Done'); </script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	<nav>
        <div class="sidebar">
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list" >
                        <a href="#" class="nav-link"  onclick="showForm('user-login'); return false;">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">User Login</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" onclick="showForm('user-register'); return false;">
                            <i class='bx bx-user icon'></i>
                            <span class="link">User Register</span>
                        </a>
                    </li>
                    <li class="list" >
                        <a href="#" class="nav-link" onclick="showForm('admin-login'); return false;">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Admin Login</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<div>

	<div class="container" id="user-login">
		<div class="form-container sign-in-container">
			<form >
				<h1>User Sign in</h1>
            	<br>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button  type="button">Adminnn</button>			
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

	<div class="container" id="user-register">
		<div class="form-container sign-in-container">
			<form >
				<h1>User Register</h1>
            	<br>
				<input type="email" placeholder="Email" id="reg_email" name="reg_email" required value=""/>
				<input type="password" placeholder="Password" id="reg_pass" name="reg_pass" required value=""/>
				<button type="button" name="button">Register</button>			
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

	<div class="container" id="admin-login">
		<div class="form-container sign-in-container">
			<form action="admin/indexAdmin.php">
				<h1>Admin Sign in</h1>
            	<br>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button  onclick="javascript:location.href='index.php'">Admin</button>			
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
<script>
	function showForm(formId){
		event.preventDefault();
		const forms = document.querySelectorAll('.container');
		forms.forEach(form => {
			form.classList.remove('active');
		});
		document.getElementById(formId).classList.add('active')
	}
</script>
</html>