<?php
include 'include/connection.php';  

$title      = $_POST['name'];

$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);

$sql = "INSERT INTO sliders(title,image) VALUES ('$title ','$image')" ;

$result = $db->query($sql);

if($result){
    echo "Data insert successful!";
    //header('Location:slider_users.php');
}
else{
    echo "Data insert Fail!";
}




