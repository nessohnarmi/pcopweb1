<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM outsourcisngs WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:outsourcisng_users.php');

