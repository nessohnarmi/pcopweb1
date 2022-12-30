<?php

include 'include/connection.php';

$id         = $_POST['id'];

$logo       = $_POST['name'];
$text       = $_POST['text'];
$address    = $_POST['address'];

$mobile_no  = $_POST['mobile_no'];
$email      =$_POST['email'];

$sql = "UPDATE footers SET logo ='$logo', text='$text', address='$address', mobile_no='$mobile_no', email='$email' WHERE id='$id'"; 


$result = $db->query($sql);


if($result){
   header('Location:footer_users.php');

}
