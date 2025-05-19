<?php
$conn=mysqli_connect('localhost','root','','employee');
$id=$_GET['id'];
$delete="DELETE FROM employees WHERE id='$id'";
if (mysqli_query($conn,$delete)) {
        echo"<script>alert('Candidate is deleted!!');
        location.href='employees.php'
        </script>";
}   
?>
