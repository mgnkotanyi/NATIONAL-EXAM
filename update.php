<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
$conn=mysqli_connect("localhost","root","","emp_recruitment");
$id=$_GET['id'];
$select="SELECT * FROM candidates WHERE id='$id'";
$consel=mysqli_query($conn,$select);
while( $row=mysqli_fetch_array($consel)){
?>
    <form method="POST">

                <label> National id:</label>
        <input type="text" name="CandidateNationaId" value ="<?php echo $row['CandidateNationaId'];?>" required><br><br>
                <label>First name:</label>
        <input type="text" name="FirstName" value=" <?php echo $row['FirstName'];?> "required><br><br>
                <label> Last name:</label>
        <input type="text" name="LastName" value=" <?php echo $row['LastName'];?> "required><br><br>
                <label >Gender:</label>
        <input type="text" name="Gender" value=" <?php echo $row['Gender'];?> "required><br><br>
                <label> Date of birth:</label>
        <input type="text" name="DateOfBirth" class="ih" value=" <?php echo $row['DateOfBirth'];?> "required><br><br>
                <label> Post id:</label>
        <input type="text" name="PostId" value=" <?php echo $row['PostId'];?> "required><br><br>
                <label>Exam date :</label>
        <input type="text" name="ExamDate" value=" <?php echo $row['ExamDate'];?> " required><br><br>
                <label> Phone number:</label>   x
        <input type="text" name="PhoneNumber" value=" <?php echo $row['PhoneNumber'];?> "required><br><br>
                <label> Marks:</label>
        <input type="text" name="Marks" value=" <?php echo $row['Marks'];?> "required><br><br><br><br><br>
        <input type="submit" name="update" value="Enter" class="ihe">
        <b> <a href="candidates.php"> back</a></b>
    </form>
</div> 
    




<?php
$conn=mysqli_connect("localhost","root","","emp_recruitment");

if (isset($_POST['update'])) {
    $cid=$_POST['CandidateNationaId'];
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];
    $gender=$_POST['Gender']; 
    $birth=$_POST['DateOfBirth'];
    $post=$_POST['PostId'];
    $exam=$_POST['ExamDate'];
    $phone=$_POST['PhoneNumber'];
    $marks=$_POST['Marks'];
    $sql = "UPDATE candidates SET CandidateNationaId='$cid',FirstName='$fname',
    LastName='$lname',Gender='$gender',DateOfBirth='$birth',
    PostId='$post',ExamDate='$exam',PhoneNumber='$phone',Marks='$marks' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
<?php
}
?>
</body>
<style>
	.navbar{
	background: transparent;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0 0 80px rgba(6, 0, 0, 0.1);

    }
    h1{
        color:blue;
    }
    tr{
        border-bottom:0px;

    }
    th{
border-right:0px;
border-top:0px;
    }
    td{
        border-right:0px;

        border-top:0;
        padding:10px;
    }
    .del{
        background-color:red;
        color:white;
        padding:10px;
        
    }
    .ed{
        background-color:green;
        padding:10px;
        color:white;
    }
    a{
        text-decoration:none;
        color:white;
        

    }
    button{
        border:none;
        background-color:blue;
        color:white;
        padding:8px;

    }

</style>

</html>
