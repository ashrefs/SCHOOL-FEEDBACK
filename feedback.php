<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rn = $_POST['rn'];
$gender =$_POST['gender'];
$con=mysqli_connect("localhost","root","","fb");
$sql="INSERT INTO fbusers(n,e,f,r,g) VALUES('$name','$email','$feedback','$rn','$gender')";
$r=mysqli_query($con,$sql);
if($r){
    header("location:fbthanks.html");
    exit();
}
else{
    echo "some error in this php codes";
}
?>