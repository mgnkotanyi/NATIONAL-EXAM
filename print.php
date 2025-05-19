<?php
$conn=mysqli_connect("localhost","root","","emp_recruitment");
$select=mysqli_query($conn,"SELECT * FROM candidates")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidate list</title>
</head>
<body>
      <center>
    <h1>CANDIDATE LIST </h1>
  
<table id="print_table" border="2">
    <tr>
        
<th>CandidateNationaId</th>
	
<th>FirstName</th>
	
<th>LastName</th>
	
<th>Gender</th>
	
<th>DateOfBirth</th>
	
<th>PostId	</th>

<th>ExamDate</th>
	
<th>PhoneNumber</th>
	
<th>Marks</th>

<?php
while ($row=mysqli_fetch_array($select)) {
    
    
?>
 
<tr>
    <td><?php echo $row['CandidateNationaId'];?></td>
    <td><?php echo $row['FirstName'];?></td>
    <td><?php echo $row['LastName'];?></td>
    <td><?php echo $row['Gender'];?></td>
    <td><?php echo $row['DateOfBirth'];?></td>
    <td><?php echo $row['PostId'];?></td>
    <td><?php echo $row['ExamDate'];?></td>
    <td><?php echo $row['PhoneNumber'];?></td>
    <td><?php echo $row['Marks'];?></td>
 


    
</tr>

<?php
}
?>
</table><br>

<button onclick="window.print() "> print

    
</button>
<a href="dashboard.php"> <button>back</button></a>
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
        background-color:skyblue;
        border-left:skyblue;
        border-right:skyblue;
    }
    th{
        border-right:0px;
        border-top:0px;
        border-left:skyblue;
        border-right:skyblue;
    }
    td{
        border-right:skyblue;
        border-top:skyblue;
        border-left:skyblue;
        padding:10px;
        background-color:skyblue;
    }
    .del{
        background-color:red;
        color:white;
        padding:10px;
        border-left:skyblue;
        border-right:skyblue;
        
    }
    .ed{
        background-color:green;
        padding:10px;
        color:white;
        border-left:skyblue;
        border-right:skyblue;
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
    table{
        border-left:skyblue;
        border-right:skyblue;
        border-top:skyblue;
        border-bottom:skyblue;
    }

</style>

</html> 