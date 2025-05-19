<?php
$conn=mysqli_connect("localhost","root","","employee");
$id=$_GET['emp_id'];
$select= "SELECT * from employees WHERE emp_id='$id'";
?>