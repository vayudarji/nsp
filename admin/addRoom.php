<?php
    require '../config.php';
    if(isset($_POST['submit'])){
        $seater=$_POST['seater'];
        $roomno=$_POST['roomno'];
        $fees=$_POST['fee'];

        $query="INSERT into add_room(seater,roomno,fees,postdate) values('$seater','$roomno','$fees',curdate())";
        $result=mysqli_query($conn,$query);
        echo"<script> alert('Room Added'); </script>";
    }
    else{
        echo "error aa gya";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexAdmin.css">
    <link rel="stylesheet" href="css/addRoom.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <span class="logo-name">Admin</span>
               
            </div>

            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='indexAdmin.php'">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">Dashboard</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='manageRoom.php'">
                            <i class='bx bx-user icon'></i>
                            <span class="link">Manage Room</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='addRoom.php'">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Add Room</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='studentsDetails.php'">
                            <i class='bx bx-detail icon'></i>
                            <span class="link">Students Detail</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom-content">
                    <li class="list">
                        <a href="#" class="nav-link" onclick="javascript:location.href='../logout.php'">
                            
                            <i class='bx bx-log-out icon' ></i>
                            <span class="link">Logout</span>
                        </a> 
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <section class="overlay" id="overlayy" >
        
    <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="content-fluid">
                <div class="row containerr">
                    <div class="col-md-11">
                        <h2 class="title">Add Room</h2>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary" style="color: #19234d;">
                                    <div class="panel-heading">Fill all</div>
                                    <div class="panel-body">
                                        <form action="" class="horizontal" id="myForm" method="post">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="seater" >Select Seater</label>
                                                <div class="col-sm-9">
                                                    <select name="seater" class="form-control" id="seater" required="required">
                                                        <option value="">Select Seater</option>
                                                        <option value="1">Single Seater</option>
                                                        <option value="2">Double Seater</option>
                                                        <option value="3">Three Seater</option>
                                                        <option value="4">Four Seater</option>
                                                        <option value="5">Five Seater</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="rmno" class="col-sm-2 control-label">Room No </label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="roomno" id="roomno" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="fee" class="col-sm-2 control-label">Fees (per studentttt)</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="fee" id="fee" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-offset-2">
                                                <div class="submit">
                                                    <!-- <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">create</button> -->
                                                    
                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                                </div>
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

    </section>
    
</body>
</html>