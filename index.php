<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center> <div class="header"><h1>WELCOME TO BEAUTY COMPANY</h1><br></center>
    </div>

    <div class="formco">
        <form method="POST">
            <h2>LOG INTO THE SYSTEM</h2>
            <label for="in">UserName:</label>
            <input type="text" name="username" placeholder="enter your username" required><br><br>
            <label for="ps">Password:</label>
            <input type="password" name="password" placeholder="enter your password" required><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="LOGIN" name="submit"><br>
            if you don't have account click <a href="signup.php">here to create</a>account
            



    </form>
    </div>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_POST['submit']))
{
    
    $user=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM gmanager WHERE username='$user' and password='$password'");
    $check=mysqli_num_rows($query);
    if($check > 0) {
        while ($data=mysqli_fetch_array($query)) {
        $_SESSION['password']=$data['password'];
        header("location:dashbord.php");
        }
    }
    else {
        echo"<script>alert('Hello, check your username or password and try again!!!');</script>";
    }
}
mysqli_close($conn);
?>