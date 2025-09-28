<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbs5_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to webpage";
}

// Function to insert name
function login($username,$password){
    global $conn;
    $sql ="SELECT * FROM users where username='$username'";
    $result = $conn->query($sql);
    echo $result;
    // return $result->fetch_assoc();
    // $check_user =
    // return $conn->query($sql);
}

function register($username, $email,$password){

}




?>