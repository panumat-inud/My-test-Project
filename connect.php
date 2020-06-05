<?php

$connect = mysqli_connect('127.0.0.1','root','','addmember');

if(mysqli_connect_error($connect)){
    echo 'Failed to connect';
}

else{
   echo 'connect';
}

?>