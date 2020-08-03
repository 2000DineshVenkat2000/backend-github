<!-- Bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<title>Payment Details</title>
<?php
																																																											
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Backend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['ee'];
$phone = $_POST['ph'];
$fullname = $_POST['na'];
$address = $_POST['ad'];
$city = $_POST['ci'];
$country = $_POST['co'];
$zip = $_POST['zi'];
$v1 = $_POST['n1'];
$v2 = $_POST['n2'];
$total = 0;


if ($v1 == 0 and $v2 ==0) {
	$total = 0;
}
else {
	$total = (54.99*$v1)+(74.99*$v2)+19;
}
$sql = "INSERT INTO checkout_tab (email,phone,names,address,city,country,zip,v1,v2,total)
VALUES ('$email','$phone','$fullname','$address','$city','$country','$zip','$v1','$v2','$total')";

if ($conn->query($sql) === TRUE) {
  echo "\n<center><h2>Your Purchase is Added Successfully!</h2></center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<ceter><center><h3>Your Payment Details:</h3></center></center><br><br>";

echo "<div class=jumbotron>";
			echo "<center><br><b>E-mail : </b>",$email;
			echo "<br><b>Phone : </b>",$phone;
			echo "<br><b>Full Name : </b>",$fullname;
			echo "<br><b>Address : </b>",$address;
			echo "<br><b>City : </b>",$city;
			echo "<br><b>Country : </b>",$country;
			echo "<br><b>Zip Code : </b>",$zip;
			echo "<br><b>Number of Vintage Bags : </b>",$v1;
			echo "<br><b>Number of Vin Shoes : </b>",$v2;
			echo "<br><b>Total : $</b>",$total;
			echo "</center>";
echo "</div>";



$conn->close();
?>
<center>
<form method="post" action="index.html">
	<button class = "btn-primary">Go Back!</button>
</form>
<br><br>
<div style="background-color: rgb(232,225,153);width: 500px;height: 90px;">To see the Complete Purchase list from DataBase, click Retrieval<br><br>
	<form action="retrieval.php" method="post">
		<button class="btn-primary">Retrieval</button>
   	</form>
</div>
</center>