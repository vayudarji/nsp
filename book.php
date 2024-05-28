<?php
    require 'config.php';
    if (isset($_POST['submit'])) {

        $room=$_POST["room"];
        $room_no=$_POST["room_no"];
        $food_without=$_POST["food_without"];
        $date=$_POST["date"];
        $duration=$_POST["duration"];
        $course=$_POST["course"];
        $registration=$_POST["registration"];
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $gender=$_POST["gender"];
        $contact=$_POST["contact"];
        $email=$_POST["email"];
        $emergency=$_POST["emergency"];
        $guardianname=$_POST["guardian_name"];
        $guardianno=$_POST["guardian_no"];
        $address=$_POST["address"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $pincode=$_POST["pincode"];
        $session_id=$_SESSION['id'];

        $duplicate = mysqli_query($conn,"SELECT * from user_book where sessionid = '$session_id' ");
        if(mysqli_num_rows($duplicate)> 0){
            echo "<script>	alert('User Already Registered'); </script>";
        }
        else{
            $query="INSERT into user_book(id,seaterr,roomno,foodwithout,date,duration,course,registration,firstname,lastname,gender,contactno,email,emergency,guardianname,guardianno,address,city,state,pincode,sessionid) values('','$room','$room_no','$food_without','$date','$duration','$course','$registration','$first_name','$last_name','$gender','$contact','$email','$emergency','$guardianname','$guardianno','$address','$city','$state','$pincode','$session_id')";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
            echo "<script>	alert('Registration Done'); </script>";
        }


    }
    else{
        echo"not okk";
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
                        <a href="#" class="nav-link" onclick="javascript:location.href='index.php'">
                            <i class='bx bx-user icon'></i>
                            <span class="link">Profile</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link">
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

        
        <div class="book in" id="book">
        <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="content-fluid">
                <div class="row containerr">
                    <div class="col-md-11">
                        <h2 class="title">Registration</h2>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary" style="color: #19234d;">
                                    <div class="panel-heading">Fill all</div>
                                    <div class="panel-body">
                                        <form action="" class="horizontal" method="post">

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"><h4 >Room Related info </h4> </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Seater</label>
                                                <div class="col-sm-9">
                                                    <select name="room" id="room" class="form-control" required>
                                                        <option value="">Seater</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                             
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Room NO. :</label>
                                                <div class="col-sm-9">
                                                    <select name="room_no" id="room_no" class="form-control" required>
                                                        <option value="">Select Room</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Food Status :</label>
                                                <div class="col-sm-9">
                                                    <input type="radio" value="0" name="food_without" id="food_without"  > Without Food
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Stay From :</label>
                                                <div class="col-sm-9">
                                                    <input type="date" name="date" id="date" class="form-control" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Duration :</label>
                                                <div class="col-sm-9">
                                                    <select name="duration" id="duration" class="form-control" required>
                                                        <option value="">Select Duration in Month</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"><h4 >Personal info </h4> </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Course :</label>
                                                <div class="col-sm-9">
                                                    <select name="course" id="course" class="form-control" required>
                                                        <option value="">Select Course</option>
                                                        <option value="1">B.Tech</option>
                                                        <option value="2">B.Com</option>
                                                        <option value="3">BSC</option>
                                                        <option value="4">BCA</option>
                                                    </select>
                                                </div>
                                            </div>

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
                                                    <select name="gender" class="form-control" required id="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Contact No :</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="contact" id="contact" class="form-control" value="" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Email :</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" id="email" class="form-control" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Emergency Contact :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="emergency" name="emergency" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Guardian Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="guardian_name" name="guardian_name" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Gurdian Contact No. :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="guardian_no" name="guardian_no" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><h4 >Parmanent Address </h4> </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Address :</label>
                                                <div class="col-sm-9">
                                                    <Textarea class="form-control" id="address" name="address" required value=""></Textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">City :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="city" name="city" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">State :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="state" name="state" required value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Pincode :</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="pincode" name="pincode" required value="">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-offset-2">
                                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
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