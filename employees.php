<?php
$conn=mysqli_connect("localhost","root","","employee");
$select=mysqli_query($conn,"SELECT * FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee list</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="link_container">
        <div class="link">
            <ul>
              
                 <li><a href="dashbord.php">HOME</a></li>
                <li><a href="addemp.php">ADD EMPLOYEE</a></li>

            </ul>
        </div>
       <center> <div class="header"><h1>WELCOME TO BEAUTY COMPANY</h1><br></div></center>

    </div>
    <center>   <table border="1" cellspacing="1">
        <tr>
        <th> EMP_ID</th>
        <th> EMP_FASTNAME</th>
        <th> EMP_LASTNAME</th>
        <th> POSITION</th>
        <th> SALARY</th>
        <th> ADDRESS</th>
        <th> TELEPHONE</th>
        <th> GENDER</th>
        <th> HIRED_DATE</th>
        <th> Modify</th>
        
        </tr>
        <tr>
        <?php
        while ($fetch=mysqli_fetch_array($select))
         {
           ?>
        <td><?php echo $fetch['emp_id'];?></td>
           
		<td><?php echo $fetch['emp_firstname'];?></td>
		<td><?php echo $fetch['emp_lastname'];?></td>
		<td><?php echo $fetch['position'];?></td>	
		<td><?php echo $fetch['salary'];?></td>
		<td><?php echo $fetch['address'];?></td>
		<td><?php echo $fetch['telephone'];?></td>	
		<td><?php echo $fetch['gender'];?></td>
        <td><?php echo $fetch['hired_date'];?></td>
        <td><button><a href="update.php">update</a></button> &nbsp;&nbsp;&nbsp;
<a href="del.php?id=<?php echo $fetch["emp_id"];?>">delete</a>
    </td>
         </tr>
      <?php
        }
    
       ?>
    
    </table>
    </center>
 <a href="dashbord.php">BACK</a>
</body>
</html>