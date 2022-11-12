<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	
	
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	
</head>
<body>

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
	
	<div>
	  <div class="container-fluid">
  <h3 class="text-center mt-3">DISPLAY ALL IMAGES FROM DIRECTORY/FOLDER</h3>
  <h5 class="text-center">Responsive Grid Image Gallery Using PHP AND BOOTSTRAP</h5>
    <?php
    // Enter your Directry/Folder Name I have Given Folder Name As Images
      $files = scandir('images/');
      echo "<div class='row'>";
      foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
          // Give Image source -- src='folder-name/$file'
          echo "<div class=' col-6 col-sm-4 col-md-3 mt-3 mb-3'>
                <img src='images/$file' alt='image' width='100%' /></div>";
        }
      }
      echo "</div>";
    ?>
  </div>
	
	
	</div>
	

    <a href="logout.php">Logout</a>
</body>
</html>
<style type="text/css">
	h1{
	background-color: #FF6F61;
	color: #2E2E2E;
	padding:30px;
    margin: 0 auto;
    text-align: center;
	border-radius:25px;
		
	}
	body{
		background-color:#F7CAC9;
		
	}
	a{
		padding:15px;
		color:white;
		margin: 0 auto;
		text-align: center;
		background-color: #16488F;
		color:white;
		border-radius:25px;
		position:absolute; 
		right:0px;
		
	}
		
	
	

</style>