<?php
$un =$_POST['username'];
$ps =$_POST['password'];
$con = mysqli_connect("localhost","root","","sfs");
$sql = "INSERT INTO users(username,password) values('$un','$ps')";
$r =mysqli_query($con,$sql);
if($r){
    header("location:login.html");
    exit();
}
else{
    echo "some error in this codes";
}
?>