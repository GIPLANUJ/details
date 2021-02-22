<?php
include "connection.php";
$fna=$_POST['first_name'];
$lna=$_POST['last_name'];
$mo=$_POST['mobile'];
$fa=$_POST['father_name'];
//echo $na;
//$sql = "SELECT * FROM `shop`where name='$na'";
$sql="SELECT * FROM `school` WHERE `first_name` LIKE '$fna' AND `last_name` LIKE '$lna' AND `mobile` LIKE '$mo' AND `father_name` LIKE '$fa'";
//$sql = 'SELECT *FROM shop LIMIT 3';
//$sql = "SELECT * FROM `complete`";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo"<br>
		id: ". $row["id"]." <br>
		first Name: ". $row["first_name"]."<br>
		last Name: ". $row["last_name"]."<br>
		mother:".$row["mother_name"]."<br>
		state:".$row["state"]."<br>
		pincode:".$row["pincode"]."<br>
		class:".$row["class"]."<br>
        adhaar card:".$row["adhaar_card"]."<br>
		distict:".$row["distict"]."<br>
		village:".$row["village"]."<br>
		DOV:".$row["DOV"]."<br>
	persents:".$row["persents"]."<br>
		gender:".$row["gender"]."<br>
		conf_pass:".$row["conf_pass"]."<br>-----------------------------------";
	   /* echo "<table border='0px'>
        <hr>
		<tr>
		<td>".$row["id"]."</td>
		<td>".$row["name"]."</td>
		<td>".$row["father_name"]."</td>
		<td>".$row["mobile"]."</td>
		<td>".$row["pincode"]."</td>
		<td>".$row["email"]."</td>
		<td>".$row["password"]."</td>
		<td>".$row["account"]."</td>
		<td>".$row["address"]."</td>
		<td>".$row["distict"]."</td>           
		</table>";*/
   }
} else {
    echo "0 results";
}
$conn->close();
?>






