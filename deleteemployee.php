<?php
$conn=mysqli_connect("localhost","root","","employee");

   $id=$_GET[];
   $query="DELETE FROM employees WHERE emp_id='$id'";
   $result=mysqli_query($conn,$query);
   if ($result) {
      echo"<script>alert('employee deleted!!');</script>";
   }
   

mysqli_close($conn);
?>