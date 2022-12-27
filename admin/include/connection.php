<?php

$db = new mysqli('localhost','root','','pcop');

if($db){
    //echo "Database connection successful";
}
else{
    echo "Database connection fail";
}
    
