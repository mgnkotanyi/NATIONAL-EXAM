<?php
$conn=mysqli_connect('localhost','root','','employee');
$id=$_GET['emp_id'];
$delete="DELETE FROM employees WHERE emp_id='$id'";
if (mysqli_query($conn,$delete)) {
        echo"<script>alert('Candidate is deleted!!');
        location.href='employees.php'
        </script>";
}   
?>