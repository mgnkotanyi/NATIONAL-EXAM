<?php
session_start();
?>

<?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_POST['submit']))
{
 $usename=$_POST['UserName'];
 $password=$_POST['password'];
 $select=mysqli_query($conn,"SELECT * FROM gmanager WHERE UserName='$usename' and password='$password'");
 $check=mysqli_num_rows($select);
    if($check > 0) {
        while ($data=mysqli_fetch_array($select)) 
        {
         $_SESSION['password']=$data['password'];
          $_SESSION['UserName']=$data['UserName'];
          header("location:dashboard.php");
        }
    }
    else {
        echo"<script>alert('Hello, check your username or password and try again!!!');</script>";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    
</head>
<body> 
<div> </div>

   <center> <h1>WELCOME TO BEAUTY COMPANY</h1>
    
<br>
    <div class="log">
        <form method="POST">
            <br><br><br><br><br>
            <label for="in">UserName:</label>
            <input type="text" name="UserName" placeholder="enter your username" required><br><br><br><br><br>
            <label for="ps">Password:</label>
            <input type="password" name="password" placeholder="enter your password" required><br><br><br><br><br>
             <input type="submit" value="LOGIN" name="submit" class="ibu" >&nbsp;&nbsp;<br>_________________________or_______________________<br><br>
             Dont have an account? <button><a href="register.php">Sign up</a></button>
             
        
            
   </form>
    </div>
    </center>
</body>

<style>
    .log{
        height: 550px;
        width:600px;
        box-shadow: 0 0 80px rgba(6, 0, 0, 0.1);
        border-radius: 15px;
        left: 50%;
        margin-bottom:5%;
    }

    h2{
        margin-left:800px;
        font-size:30px;
    }
    label{
        font-size:25px;
    }
    input{
    font-size:18px;
    background: transparent;
    padding: 10px;
     font-size: large;
    font-weight: bold;
    border-left: 0cap;
    border-right: 0cap;
    border-top: 0cap;
    outline: none;
    cursor:pointer;
}
        
    
    button{
     border:none; 
     background:transparent; 
     font-size: 20px;
    }
    a{
        text-decoration:none;
        color:blue;
        
    }
    body{
        font-size:21px;
    }
    .ibu{
        border-bottom:0px;
        width:50%;
        background-color:blue;
        color:white;
    }
    h1{
        color:blue;
    }


</style>
</html>

