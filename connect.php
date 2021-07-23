<?php 
/*$nameErr = $mobErr = $emailErr = $genderErr = $bloodErr = $propicErr = $addressErr = "";
$name = $mob = $email =$gender = $blood = $propic = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["mob"])) {
    $mobErr = "Name is required";
  } else {
    $mob = test_input($_POST["mob"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Name is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Name is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["blood"])) {
    $bloodErr = "Name is required";
  } else {
    $blood = test_input($_POST["blood"]);
  }
  if (empty($_POST["propic"])) {
    $propicErr = "Name is required";
  } else {
    $propic = test_input($_POST["propic"]);
  }
  if (empty($_POST["addess"])) {
    $addressErr = "Name is required";
  } else {
    $address = test_input($_POST["address"]);
  }
}*/
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
 $propic = $_FILES['propic']['name'];
 $address=$_POST['address'];
 
//print_r($_FILES['propic']['name']);die;
 
 $target_path = "c:/xampp/htdocs/work/regimages/";  
$target_path = $target_path.basename( $_FILES['propic']['name']);
//print_r($target_path);die;   
  
if(move_uploaded_file($_FILES['propic']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 

 $sql= "INSERT INTO form (name,mob,email,gender,blood,propic,address) VALUES ('$name','$mob','$email','$gender','$blood','$propic','$address')";
 $rs=mysqli_query($conn,$sql);
 if($rs)
 {
	 echo "records inserted";
 }
 else{
	 echo "SQL ERROR". mysqli_error($conn);
 }
 
 ?>