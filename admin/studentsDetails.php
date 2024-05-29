<?php

    require '../config.php';
    $query="SELECT * from user_book";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexAdmin.css">
    <link rel="stylesheet" href="css/studentDetail.css">
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
                        <h2 class="title">Student Details</h2>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="panel panel-primary" style="color: #19234d;">
                                    <div class="panel-heading">All Student Details</div>
                                    <div class="panel-body">
                                        <table class="display table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>S No.</th>
                                                    <th>Student Name</th>
                                                    <th>Reg No.</th>
                                                    <th>Contact No.</th>
                                                    <th>Room No.</th>
                                                    <th>Seater</th>
                                                    <th>Staying From</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                while($row=mysqli_fetch_array($result)){
                                                    ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['firstname'] ,' ', $row['lastname']; ?></td>
                                                    <td><?php echo $row['registration']; ?></td>
                                                    <td><?php echo $row['contactno']; ?></td>
                                                    <td><?php echo $row['roomno']; ?></td>
                                                    <td><?php echo $row['seaterr']; ?> Seater</td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><a href="" ><i class='bx bxs-edit-alt'></i></a></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
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

    </section>
    
</body>
</html>