<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $con = mysqli_connect($server,$username,$password);
     if(!$con){
         die("connect to this database field ddue to".mysqli_connect_error());
     }
     echo "conncted succesfully";
?>