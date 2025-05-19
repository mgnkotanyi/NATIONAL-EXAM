<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="header"><h1>WELCOME TO BEAUTY COMPANY</h1><br>
    </div>

    <div class="formco">
        <form method="POST">
            <h2> CREATE ACCOUNT</h2>
            <label for="in">UserId:</label>
            <input type="text" name="Gmanager_id" placeholder="enter your  id" required><br><br>
            <label for="in">UserName:</label>
            <input type="text" name="username" placeholder="enter your username" required><br><br>
            <label for="ps">Password:</label>
            <input type="password" name="password" placeholder="enter your password" required><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="REGISTER" name="submit"><br>
            if you  have account click <a href="index.php">HERE TO LOG IN</a>
            

    </form>
    </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_POST['submit']))
{
    $id=$_POST['Gmanager_id'];
    $user=$_POST['username'];
    $password=$_POST['password'];
    $insert="INSERT INTO `gmanager`(`Gmanager_id`, `username`, `password`) VALUES ('$id','$user','$password')";
    if(mysqli_query($conn,$insert))
    {
        echo"<script>alert('Hello, you are registered!!!');
        header('location:index.php')</script>";
        
    }
    else {
        echo"<script>alert('Hello, you are registered!!!');</script>";
    }
}
mysqli_close($conn);
?>