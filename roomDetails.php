<?php
    require 'config.php';
    $session_id=$_SESSION['id'];
    $query="SELECT * from user_book where sessionid='$session_id'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)> 0){
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
                        <a href="#" class="nav-link" onclick="javascript:location.href='book.php'">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Book hostel</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" >
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

        
        <div class="roomDetail" id="roomDetail">

        <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="content-fluid">
                <div class="row containerr">
                    <div class="col-md-11">
                        <h2 class="title">Details</h2>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary" style="color: #19234d;">
                                    <div class="panel-heading">All Room Details</div>
                                    <div class="panel-body">
                                        <table class="table table-bordered" cellspacing="0" width="100%">
                                            <tbody>
                                                <?php   
                                                while($row=mysqli_fetch_array($result)){
                                                    ?>


                                                <tr>
                                                    <td colspan="4"><h4>Room Related Info</h4></td>
                                                    <td colspan="2"><a href="#">Print</a></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6"><b>Registration No. :</b><?php echo $row['registration']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Room No. :</b></td>
                                                    <td><?php echo $row['roomno']; ?></td>
                                                    <td><b>Seater</b></td>
                                                    <td><?php echo $row['seaterr']; ?></td>
                                                    <td><b>Fees PM</b></td>
                                                    <td>7000 rs</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Food Status</b></td>
                                                    <td>With Food</td>
                                                    <td><b>Stay From</b></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><b>Duration</b></td>
                                                    <td><?php echo $row['duration']; ?> Months</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total Fees : </b> 84000 rs</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6"><h4>Personal Information</h4></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Reg No.</b></td>
                                                    <td><?php echo $row['registration']; ?></td>
                                                    <td><b>Full Name</b></td>
                                                    <td><?php echo $row['firstname'] , $row['lastname']; ?></td>
                                                    <td><b>Email</b></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Contact No.</b></td>
                                                    <td><?php echo $row['contactno']; ?></td>
                                                    <td><b>Gender</b></td>
                                                    <td><?php echo $row['gender']; ?></td>
                                                    <td><b>Course</b></td>
                                                    <td><?php echo $row['course']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Gurdian Name.</b></td>
                                                    <td><?php echo $row['guardianname']; ?></td>
                                                    <td><b>Guadian No.</b></td>
                                                    <td><?php echo $row['guardianno']; ?></td>
                                                    <td><b>Emergency No.</b></td>
                                                    <td><?php echo $row['emergency']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6"><h4>Addresses</h4></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Correspondense Address</b></td>
                                                    <td colspan="2"><?php echo $row['address']; ?></td>
                                                    <td><b>Permanent Address</b></td>
                                                    <td colspan="2"><?php echo $row['address']; ?></td>
                                                </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                        <?php } ?>
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