<?php
include 'include/connection.php';  

$title      = $_POST['name'];
$history    = $_POST ['history'];
$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);


$sql = "INSERT INTO abouts (title,history,image) VALUES ('$title ','$history','$image')" ;

$result = $db->query($sql);

if($result){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:about_users.php');
       // echo "Data insert successful!";
    }
  
   
 
}
else{
    echo "Data insert Fail!";
}




