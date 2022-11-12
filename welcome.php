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
	
	<div class="gallary">
	  <div class="container-fluid">
  <h3 class="text-center mt-3">VIEW-ONLY GRID Gallery</h3>
  <h5 class="text-center">TO DOWNLOAD LONG-PRESS(ANDROID) OR MOUSEPAD-RIGHT-PRESS(PC) TO SEE MORE OPTIONS</h5>
    <?php
    // Enter your Directry/Folder Name I have Given Folder Name As Images
      $files = scandir('uploads/');
      echo "<div class='row'>";
      foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
          // Give Image source -- src='folder-name/$file'
          echo "<div class=' col-6 col-sm-4 col-md-3 mt-3 mb-3' style='width:400px;height:300px;disply:block;margin-left:auto;margin-right:auto'>
                <img src='uploads/$file' alt='image' width='100%' /><figcaption>$file</figcaption></div>";
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
    padding:20px;
		
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
  .gallery {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 15px;

}
		
	
	

</style>