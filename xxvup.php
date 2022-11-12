<?php 

include 'sqlconfig.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	$number = $_POST['number'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$location = $_POST['location'];


	$sql = "INSERT INTO vech (number, date, time,location)
		    VALUES ('$number', '$date', '$time','$location')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
	    echo "<script>alert('Wow! User Registration Completed.')</script>";
        header("Location: xxvup.php");
		
	} else {
		echo "<script>alert('Woops! Something Wrong Went.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>number-Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email" id="myForm">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			
            <div class="input-group">
				<input type="text" placeholder="number" name="number" value="<?php echo $number; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="date" name="date" value="<?php echo $date; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="time" name="time" value="<?php echo $time; ?>" required>
            </div>
            <div class="input-group">
				<input type="text" placeholder="location" name="location" value="<?php echo $location; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<div class="input-group">
			<input type="button" onclick="myFunction()" value="Reset form">
			</div>
		</form>
	</div>
</body>


<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>

</html>