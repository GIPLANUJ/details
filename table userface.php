<html>
<head>
<title></title>
<style>

<!----link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->

.box-body{
background-color:red;		
}
.table{
	background-color:black;
	border:solid 2px;
}
 th{
background-color:#90B14F;
border:solid 1px;	 
 }
td{
background-color:white;
border:solid 1px;	
}
</style>
</head>
<body>
<center>
<div class="box-body table-responsive no-padding">
<table class="table table-hover" border="0px" height="600px" width="800px">
<tr>
<th>id</th>
<th>first name</th>
<th>last name</th>
<th>mobile</th>
<th>father name</th>
<th>mother name</th>
<th>address</th>
<th>adhat card</th>
<th>pincode no</th>
<th>state</th>
<th>distict</th>
<th>village</th>
<th>DOV</th>
<th>class</th>
<th>persents</th>
<th>email</th>
<th>password</th>
<th>conf_pass</th>
<th>gender</th>
<th colspan="2"> oprations</th>
</tr>
<?php
include"connection.php";
$sql = "SELECT *FROM `school`";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['first_name'];?></td>
<td><?php echo $row['last_name'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['father_name'];?></td>
<td><?php echo $row['mother_name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['adhaar_card'];?></td>
<td><?php echo $row['pincode'];?></td>
<td><?php echo $row['state'];?></td>
<td><?php echo $row['distict'];?></td>
<td><?php echo $row['village'];?></td>
<td><?php echo $row['DOV'];?></td>
<td><?php echo $row['class'];?></td>
<td><?php echo $row['persents'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['conf_pass'];?></td>
<td><?php echo $row['gender'];?></td>
<td><a href="file name">edit</td></a>
<td><a href="file name">delete</td>
</tr>
<?php
}
}
?>
</center>
</table>
</div>
</body>
</html>
