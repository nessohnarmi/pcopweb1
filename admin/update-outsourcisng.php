<?php

include 'include/connection.php';

$id        = $_POST['id'];
$text      =$_POST['text'];
$title     = $_POST['name'];

$image     = $_FILES['image']['name'];
$target    ="images/".basename($image);



$sql = "UPDATE outsourcisngs SET text='$text',title='$title', image='$image' WHERE id='$id'";


$result = $db->query($sql);

if($result){

   if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('Location:outsourcisng_users.php');
  }
}
