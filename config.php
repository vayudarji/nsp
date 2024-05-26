<?php

$conn = mysqli_connect("localhost" , "root" , "" , "hostel_registration_management");
session_start();

if($conn->connect_error) {
    echo 'sab theek nhi hai';
    die("Connection Failed" . $conn->connect_error);

}