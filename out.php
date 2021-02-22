<?php
include "connection.php";
//$na=$_POST['name'];
//$mo=$_POST['father_name'];
//$fa=$_POST['mobile_no'];
//echo $na;
//$sql = "SELECT * FROM `shop`where name='$na'";
//$sql = "SELECT * FROM `complete` WHERE name='$na'AND father_name='$mo'AND mobile_no='$fa'";
//$sql = 'SELECT *FROM shop LIMIT 3';
$sql = "SELECT * FROM `school`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo"<br>
		id: ". $row["id"]." <br>
		first name: ". $row["first_name"]."<br>
		last name: ". $row["last_name"]."<br>
		father name:".$row["father_name"]."<br>
		mother:".$row["mother_name"]."<br>
		address:".$row["address"]."<br>
		mobile:".$row["mobile"]."<br>
		adhar card:".$row["adhaar_card"]."<br>
		state:".$row["state"]."<br>
		Date of birth:".$row["DOV"]."<br>
		persents:".$row["persents"]."<br>
		class:".$row["class"]."<br>
		pincode no:".$row["persents"]."<br>
		email:".$row["email"]."<br>
		password:".$row["password"]."<br>
		confirm password:".$row["conf_pass"]."<br>
		gender:".$row["gender"]."<br>------------------------------------------------------";
	    /*echo "<table border='0px'>
        <hr>
		<tr>
		<td>".$row["id"]."</td>
		<td>".$row["first_name"]."</td>
		<td>".$row["last_name"]."</td>
		<td>".$row["father_name"]."</td>
		<td>".$row["mobile"]."</td>
		<td>".$row["pincode"]."</td>
		<td>".$row["email"]."</td>
		<td>".$row["password"]."</td>
		<td>".$row["conf_pass"]."</td>
		<td>".$row["address"]."</td>
		<td>".$row["distict"]."</td>
		<td>".$row["state"]."</td>
		<td>".$row["DOV"]."</td>
		<td>".$row["gender"]."</td>
		<td>".$row["mother_name"]."</td>
		<td>".$row["class"]."</td>
		</tr>
		</table>";*/
   }
} else {
    echo "0 results";
}
$conn->close();
?>






