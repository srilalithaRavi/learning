<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "work";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $name= $_POST['name'];
 $mob=$_POST['contact'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $blood=$_POST['blood'];
 $address=$_POST['address'];
 
 $sql= "INSERT INTO form('name','mob','email','gender','blood','address') VALUES ('$name','$mob','$email','$gender','$blood','$address')";
 $rs=mysqli_query($con,$sql);
 if($rs)
 {
	 echo "records inserted";
 }
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>