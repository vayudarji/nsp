<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
                        <a href="#" class="nav-link" onclick="changeDash('overlayy')" >
                            <i class='bx bx-home-alt icon'></i>
                            <span class="link">Dashboard</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="changeRegistration('overlayy')">
                            <i class='bx bx-user icon'></i>
                            <span class="link">Profile</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="changeBook('overlayy')">
                            <i class='bx bxs-bookmarks icon'></i>
                            <span class="link">Book hostel</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link" onclick="changeDetail('overlayy')">
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
        <div class="logout" id="logout" >
            
        </div>
        <div class="registration in" id="registration">

        </div>
        <div class="book in" id="book">

        </div>
        <div class="dashboard in" id="dashboard">

        </div>
        <div class="roomDetail" id="roomDetail"></div>

    </section>
    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");

            // menuBtns.forEach(menuBtns =>{
            //     menuBtns.addEventListener("click",()=>{
            //         navBar.classList.toggle("open");
            //     });
            // });
        function changeRegistration(contentType) {
            var regDiv = document.getElementById('overlayy');

            regDiv.innerHTML = '';
            if (regDiv === overlayy) {
                fetch('registration.php')
                    .then(response => response.text())
                    .then(data =>{
                        regDiv.innerHTML = data;
                    })
                    .catch(error => console.error('error loding content'));
            }
            else{

            }
        }
        function changeBook(contentType) {
            var bookDiv = document.getElementById('overlayy');

            bookDiv.innerHTML = '';
            if (bookDiv === overlayy) {
                fetch('book-hostal.php')
                    .then(response => response.text())
                    .then(data =>{
                        bookDiv.innerHTML = data;
                    })
                    .catch(error => console.error('error loding content'));
            }
            else{

            }
        }
        function changeDash(contentType) {
            var dashDiv = document.getElementById('overlayy');

            dashDiv.innerHTML = '';
            if (dashDiv === overlayy) {
                fetch('dashboard.php')
                    .then(response => response.text())
                    .then(data =>{
                        dashDiv.innerHTML = data;
                    })
                    .catch(error => console.error('error loding content'));
            }
            else{

            }
        }
        function changeDetail(contentType) {
            var detailDiv = document.getElementById('overlayy');

            detailDiv.innerHTML = '';
            if (detailDiv === overlayy) {
                fetch('roomDetail.php')
                    .then(response => response.text())
                    .then(data =>{
                        detailDiv.innerHTML = data;
                    })
                    .catch(error => console.error('error loding content'));
            }
            else{

            }
        }
    </script>
</body>
</html>