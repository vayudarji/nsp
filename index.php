<?php
    require 'config.php';
    if (isset($_SESSION["id"])) {
        echo"okk";
    } 
    else {
        echo "not okkk";
    }

    if(isset($_POST['submit'])){
        $session_id = $_SESSION['id'];
        $reg = $_POST["registration"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $gender = $_POST["gender"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $duplicate = mysqli_query($conn,"SELECT * from user_profile where session_id = '$session_id' ");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script>	alert('Profile Already Made'); </script>";
        }
        else{   
            $query = "INSERT into user_profile values('' , '$session_id' , '$reg' , '$first_name' , '$last_name' , '$gender' , '$contact' , '$email' , '$password')";
            mysqli_query($conn, $query);
        }
        
    }
    else{
        echo "Submit nhi hui";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
 <body>
    <nav>
        <div class="logo">
            <!-- <i class='bx bx-menu-alt-left menu-icon'></i> -->
            <span class="logo-name">Hostel</span>
        </div>

        <div class="sidebar">
            <div class="logo">
                <!-- <i class='bx bx-menu-alt-left menu-icon'></i> -->
                <span class="logo-name">Hostel Managment</span>
               
            </div>

            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='dash.php'" >
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">Dashboard</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" >
                            <i class='bx bx-user icon'></i>
                            <span class="link">Profile</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='book.php'">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Book hostel</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='roomDetails.php'">
                            <i class='bx bx-detail icon'></i>
                            <span class="link">Room Details</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom-content">
                    <li class="list">
                        <a href="signout.php" class="nav-link">
                            
                            <i class='bx bx-log-out icon' ></i>
                            <span class="link">Logout</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <section class="overlay" id="overlayy" >

        <div class="registration in" id="registration">
        <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="content-fluid">
                <div class="row containerr">
                    <div class="col-md-11">
                        <h2 class="title">Profile</h2>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary" style="color: #19234d;">
                                    <div class="panel-heading">Fill all</div>
                        
                                    <div class="panel-body">
                                        <form action="" class="horizontal" method="post">

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Registration No. :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="registration" name="registration" required value="">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">First Name :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="first_name" name="first_name" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Last Name :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="last_name" name="last_name" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Gender : </label>
                                                <div class="col-sm-9">
                                                    <select name="gender" class="form-control" required="required" id="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label" >Contact No :</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="contact" id="contact" class="form-control" required valur="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Email :</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" id="email" class="form-control" value="" required>
                                                </div>
                                            </div>

                                            <div class="form-group last">
                                                <label for="" class="col-sm-2 control-label">Password :</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" id="password" class="form-control" required value="">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-offset-2">
                                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        

    </section>
</body>
</html>