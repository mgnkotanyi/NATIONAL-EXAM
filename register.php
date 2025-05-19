<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body><center>

    <h2>Registration Form</h2>
    <div class="log">
    <form action="" method="post">
        <br><br><br><br>
        <label > Names:</label>
        <input type="text" name="username" placeholder="User name"required><br><br><br><br><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password"required><br><br><br><br><br>
        <input type="submit" value="Sign up" name="submit" class="ibu" >&nbsp;&nbsp;<br><nav> _________________________or_______________________</nav><br><br>
        <label> Already have account? </label><button><a href="login.php">Log in</a></button>
    </form>
</div>
    </center>

<?php
	$conn=mysqli_connect("localhost","root","","employee");

	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO gmanager (UserName, Password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
<style>
    .log{
        height: 550px;
        width:600px;
        box-shadow: 0 0 80px rgba(6, 0, 0, 0.1);
        border-radius: 15px;
        left: 50%;
        background-color:black;
    }
    h2{
        color:blue;
        font-weight:bold;
        font-size :50px;;
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
    color :yellow;
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
    label{
        color:yellow;
    }
    nav{
        color:yellow;
    }


</style>
</html>