<?php
include 'dBconnection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>