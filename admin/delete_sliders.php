<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM sliders WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:slider_users.php');

