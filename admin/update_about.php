<?php

include 'include/connection.php';

$id        = $_POST['id'];
$title     = $_POST['name'];
$history   = $_POST['history'];
$image     = $_FILES['image']['name'];
$target    ="images/".basename($image);



$sql = "UPDATE abouts SET title='$title',history='$history',image='$image' WHERE id='$id'";


 $result = $db->query($sql);

if($result){

 if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('Location:about_users.php');
    
  }
 }
