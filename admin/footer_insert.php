<?php
include 'include/connection.php';  

$logo       = $_POST['name'];
$text       = $_POST['text'];
$address    = $_POST['address'];

$mobile_no  = $_POST['mobile_no'];
$email      =$_POST['email'];


$sql = "INSERT INTO footers(logo,text,address,email,mobile_no) VALUES ('$logo','$text','$address','$email','$mobile_no')" ;

$result = $db->query($sql);

if($result){
    //echo "Data insert successful!";
    header('Location:footer_users.php');
}
else{
    echo "Data insert Fail!";
}
