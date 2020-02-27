<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $con = mysqli_connect($server,$username,$password);
     if(!$con){
         die("connect to this database field ddue to".mysqli_connect_error());
     }
     $userid=$_POST['userid'];
     $pass=$_POST['pass'];
     echo "conncted succesfully";
     $sql="INSERT INTO `shop`.`login` ( `userid`, `passward`) VALUES ('$userid', '$pass');";
    // echo $sql;
     if($con->query($sql)==true){
         echo "successfull login";
     }
     else
     {
         echo "ERROR:$sql <br> $con->error";
     }
     $con->close();

?>