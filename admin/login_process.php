<?php
include 'include/connection.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $db->query($sql);
$data = $result->fetch_assoc();

if($data){
    session_start();
    $_SESSION['id'] = $data['id'];
}

if(mysqli_num_rows($result)){
    header('Location:registration.php');
}
else{
    echo "You are not registared member";
}