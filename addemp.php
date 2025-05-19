<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD EMPLOYEE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center> <div class="header"><h1>WELCOME TO BEAUTY COMPANY</h1><br></center>
    </div>

    <div class="formco">
        <form method="POST">
            <h2> ADD EMPLOYEE</h2>
            <label for="in">EMPLOYEE_Id:</label>
            <input type="text" name="emp_id" placeholder="enter employee  id" required><br><br>
            <label for="in">FIRSTName:</label>
            <input type="text" name="emp_firstname" placeholder="enter employee first name" required><br><br>
            <label for="ps">LASTName:</label>
            <input type="text" name="emp_lastname" placeholder="enter employee last name" required><br><br>
            <label for="ps">POSITION:</label>
            <select name="position" id="" value="positon">
                <option value="01" name="position">01</option>
                 <option value="03" name="position">03</option>
                  <option value="05" name="position">05</option>
            </select><br><br>
            <label for="ps">SALARY:</label>
            <input type="text" name="salary" placeholder="enter employee salary" required><br><br>
            <label for="ps">ADDRESS:</label>
            <input type="text" name="address" placeholder="enter employee address location" required><br><br>
            <label for="ps">TELEPHONE:</label>
            <input type="tel" name="telephone" placeholder="enter your password" required><br><br>
            <label >GENDER</label><br><br>
            FEMALE<input type="radio" name="gender" value="female" required>&nbsp;&nbsp;&nbsp;&nbsp;MALE<input type="radio" name="gender" value="MALE"><br><br>
            
           <label for="ps">HIRED DATE:</label>
            <input type="date" name="hired_date" placeholder="enter hired date" required><br><br>


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="add employee" name="submit"><br><br>
            <a href="employees.php">VIEW EMPLOYEE LIST</a>
            

    </form>
    </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_POST['submit']))
{
    $id=$_POST['emp_id'];
    $fuser=$_POST['emp_firstname'];
    $luser=$_POST['emp_lastname'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $address=$_POST['address'];
    $telephpone=$_POST['telephone'];
    $gender=$_POST['gender'];
    $date=$_POST['hired_date'];
    $insert="INSERT INTO `employees`(`emp_id`, `emp_firstname`, `emp_lastname`, `position`, `salary`, `address`, `telephone`, `gender`, `hired_date`) VALUES
     ('$id','$fuser','$luser','$position','$salary','$address','$telephpone','$gender','$date')";
    if(mysqli_query($conn,$insert))
    {
        echo"<script>alert('Hello, you are registered!!!');</script>";
    }
    else {
        echo"<script>alert('Hello, you are registered!!!');</script>";
    }
}
mysqli_close($conn);
?>