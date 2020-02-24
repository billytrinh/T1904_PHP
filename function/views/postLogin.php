<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

// server info
$serverName = "localhost";
$serverUser = "root";
$serverPassword = "root";
$database = "t1904a";
// connect database
$conn = new mysqli($serverName,$serverUser,$serverPassword,$database);
// check connection
if($conn->connect_error){
    die("Connection failed");
}

$sql = "SELECT * FROM users WHERE username LIKE '".$username."' AND password LIKE '".$password."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "Login successfully";
    $user = null;
    while ($row = $result->fetch_assoc()){
        $user = $row;
    }
    $_SESSION["user"] = $user;
    header("Location: index.php");
}else{
    $_SESSION['login_err'] = "Username or password is wrong";
    header("Location: login.php");
}