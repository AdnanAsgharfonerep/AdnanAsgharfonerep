<?php
$hostname="localhost";
$username="root";
$password="";
$database="crudfonerep";
$conn=mysqli_connect($hostname,$username,$password,$database);
if ($conn) {
    echo"";
    # code...
}else{
    echo"failed";
}


?>