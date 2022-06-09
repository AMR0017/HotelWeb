<?php
// include database connection file
include_once "koneksi.php";
 
// Get id from URL to delete that user
$rid = $_GET['rid'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM reservation WHERE rid=$rid");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:admin.php");
?>