<?php
$conn=mysqli_connect("localhost","root","","employee");
$select=mysqli_query($conn,"SELECT * FROM employees")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidate list</title>
</head>
<body><center>
   <div class="navbar"> <h1>CANDIDATE LIST </h1></div><br><br>
<table border="">
    <tr>
<th>Id</th>
        
<th>CandidateNationaId</th>
	
<th>FirstName</th>
	
<th>LastName</th>
	
<th>Gender</th>
	
<th>DateOfBirth</th>
	
<th>PostId	</th>

<th>ExamDate</th>
	
<th>PhoneNumber</th>
	
<th>Marks</th>
<th>action</th>
<?php
while ($row=mysqli_fetch_array($select)) {
?>
 
<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['CandidateNationaId'];?></td>
    <td><?php echo $row['FirstName'];?></td>
    <td><?php echo $row['LastName'];?></td>
    <td><?php echo $row['Gender'];?></td>
    <td><?php echo $row['DateOfBirth'];?></td>
    <td><?php echo $row['PostId'];?></td>
    <td><?php echo $row['ExamDate'];?></td>
    <td><?php echo $row['PhoneNumber'];?></td>
    <td><?php echo $row['Marks'];?></td>
    <td><b> <a href="update.php?id=<?php echo $row['id'];?>" class="ed">EDIT</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="delete.php?id=<?php echo $row['id'];?>" class="del">DELETE</a></td>
</b>
</tr>

<?php
}
?>
</table><br>
<button><b><a href="result.php">ADD CANDIDATE</a></b></button>
<a href="dashboard.php"> <button><b>Back</b></button></a>
</center>
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