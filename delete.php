<?php
$conn=mysqli_connect('localhost','root','','emp_recruitment');
$id=$_GET['id'];
$delete="DELETE FROM candidates WHERE id='$id'";
if (mysqli_query($conn,$delete)) {
        echo"<script>alert('Candidate is deleted!!');
        location.href='candidates.php'
        </script>";
}   
?>