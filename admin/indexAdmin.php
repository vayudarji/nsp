<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexAdmin.css">
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
                        <a href="#" class="nav-link" >
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
    <div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Dashboard</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">Manage Rooms</div>
												</div>
											</div>
											<a href="#" class="">Full Detail <i class='bx bx-arrow-back bx-rotate-180' style='color:#000000' ></i></a>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">Add Rooms</div>
												</div>
											</div>
											<a href="#" class="">Full Detail <i class='bx bx-arrow-back bx-rotate-180' style='color:#000000' ></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success">
												<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">Student Details</div>
												</div>
											</div>
											<a href="#" class="">See &nbsp; <i class='bx bx-arrow-back bx-rotate-180' style='color:#000000' ></i></a>
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