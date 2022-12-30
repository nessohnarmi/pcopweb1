<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM abouts WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:about_users.php');

