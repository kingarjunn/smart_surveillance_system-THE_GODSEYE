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
<body style="padding:20px;">
    <div id="loader" class="loader"></div>

<div class="input-group" style="padding:20px;">
<button onclick="location.replace('new1.php')" class="btn" style="background-color:#FF6F61;padding:10px;border-radius:15px;">back</button>
</div>





<table class="center">
<tr>
<th>ID</th>
<th>LICANCE-NUMBER</th>
<th>date</th>
<th>time</th>
<th>location</th>
</tr>

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
	
	<div>
	  <div class="container-fluid">
  <h3 class="text-center mt-3">Traffic Data</h3>
  <h5 class="text-center"></h5>
  <div class="sql">
    <?php
        $plate='';
        $date='';
        $con=mysqli_connect("localhost","root","","traffic");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        if (isset($_POST['submit'])) {
            $plate = $_POST['plate'];
            $date = $_POST['date'];
            $plate=$plate.'%';
            $date=$date.'%';

            $result = mysqli_query($con,"SELECT number,date,time,location FROM vech WHERE number LIKE '$plate' AND date LIKE '$date'");

            if ($result->num_rows > 0) {
            // output data of each row
            $c=1;
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $c . "</td><td>" . $row["number"] . "</td><td>" . $row["date"] . "</td><td>". $row["time"] ."</td><td>". $row["location"] . "</td></tr>";
            $c=$c+1;
            }
            echo "</table>";
            } else { echo "0 results"; }
            $plate='';
            $date='';
        }
        else{
            $result = mysqli_query($con,"SELECT number,date,time,location FROM vech LIMIT 0,10");

            if ($result->num_rows > 0) {
            // output data of each row
            $d=1;
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $d . "</td><td>" . $row["number"] . "</td><td>" . $row["date"] . "</td><td>". $row["time"] ."</td><td>". $row["location"] . "</td></tr>";
            $d=$d+1;
            }
            echo "</table>";
            } else { echo "0 results"; }

        }
        mysqli_close($con);
        
        
        

    ?>
    </div>
  </div>
	
	
	</div>
	

    

    <form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 1rem; font-weight: 400;">FILTER</p>
    <div class="input-group">
				<input type="text" placeholder="plate" name="plate" value="<?php echo $plate; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="date" name="date" value="<?php echo $date; ?>">
			</div>
			<div class="input-group">
				<button name="submit" class="btn" style="background-color:#FF6F61;">Apply Filter</button>
			</div>
		</form>

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
		right:15px;
		
	}
    .sql{
        text-align:center;
    }
	td{
        padding:20px;
        border: 1px solid #FF6F61;
        background-color: #F7CAC9;


    }
    tr{
        padding:15px;
        border: 1px solid #FF6F61;
        background-color:#FF6F61;

    }
    table{
        text-align:center;
    }
    .center {
    margin-left: auto;
    margin-right: auto;
    }
	#loader{
        background:grey url(loader.gif) no-repeat center center;
        background-size:50%;
        height:100%;
        width:100%;
        position: fixed;
        z-index: 100%;
    }

	

</style>

<script>
    var loader=document.getElementById("loader");
    window.addEventListener("load",function(){
        loader.style.display="none";
    })
</script>