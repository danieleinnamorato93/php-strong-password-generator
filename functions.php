<?php
function getRandomPassword($length){
    $charachters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    $password="";

    for ($i=0; $i < $length ; $i++) { 
     $index = random_int(0, strlen($charachters) -1);
     $password .=$charachters[$index];
    }
    return $password ;
}
if(isset($_GET['pwLength'])) {
    $length = $_GET['pwLength'];
    $newPassword = getRandomPassword($length);
}

?>