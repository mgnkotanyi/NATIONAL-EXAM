<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center> <H1>Candidates Marks</H1>
<div>
    <form method="POST">

                <label> National id:</label>
        <input type="number" name="CandidateNationaId" required><br><br>
                <label>First name:</label>
        <input type="text" name="FirstName" required><br><br>
                <label> Last name:</label>
        <input type="text" name="LastName" required><br><br>
                <label >Gender:</label>
        <input type="text" name="Gender" required><br><br>
                <label> Date of birth:</label>
        <input type="date" name="DateOfBirth" class="ih" required><br><br>
                <label> Post id:</label>
        <input type="number" name="PostId" required><br><br>
                <label>Exam date :</label>
        <input type="date" name="ExamDate" required><br><br>
                <label> Phone number:</label>
        <input type="number" name="PhoneNumber" required><br><br>
                <label> Marks:</label>
        <input type="number" name="Marks" required><br><br><br><br><br>
        <input type="submit" name="submit" value="Enter" class="ihe">
        <b> <a href="candidates.php"> back</a></b>
    </form>
</div> 

</center>

<style>

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
    width:20%;
}
body{
    background:linear;
}
h1{
    color:blue;
}
.ih{
    border-bottom: 0cap;
}
.ihe{
    border-bottom: 0cap;
    color:blue;
}
a{
        text-decoration:none;
        color:blue;
        font-size:22px;
}
</style>


</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","emp_recruitment");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['CandidateNationaId'];
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];
    $gender=$_POST['Gender']; 
    $birth=$_POST['DateOfBirth'];
    $post=$_POST['PostId'];
    $exam=$_POST['ExamDate'];
    $phone=$_POST['PhoneNumber'];
    $marks=$_POST['Marks'];
    $sql = "INSERT INTO candidates (CandidateNationaId, FirstName, LastName, Gender, DateOfBirth, PostId, ExamDate, PhoneNumber, Marks) VALUES
     ('$id','$fname','$lname','$gender','$birth','$post','$exam','$phone','$marks')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
