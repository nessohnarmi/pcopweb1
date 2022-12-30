<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM footers WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:footer_users.php');

