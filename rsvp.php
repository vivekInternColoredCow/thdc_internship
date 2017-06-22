<!DOCTYPE html>
<html>
	<head>
		<title>RSVP</title>
			<meta charset="UTF-8">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse bg-primary">
        <span class="navbar-brand" style="text-align: center;">ADD YOUR RESPONSE FOR &quot;SOIREE&quot;</span>
    	</nav>
    	<center>
    	<br>
    	<div class="row container">
			<table class="table bg-warning table-bordered">
				<?php
					$details=array();
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "internrsvp";
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT event_theme_name, event_date, event_venue FROM eventdetails
						ORDER BY event_date Asc";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) 
						{
					    $row = $result->fetch_assoc();
					    	echo "<br/>";
					    	echo "<thead>";
					    	echo "<tr>";
					    	echo "<th>";
					    		echo "THEME NAME :- ".$row["event_theme_name"];
					   			echo "</th>";
					   			echo "<th>";
				    			echo "DATE :- ".$row["event_date"];
				    			echo"</th>";
				    			echo "<th>";
				    			echo "EVENT VENUE :- ".$row["event_venue"];
				    		echo "</th>";
				    		echo "</tr>";
				    		echo"</thead>";
						} else {
					    echo "0 results";
					}
					$conn->close();
				?>
			</table>
		</div>	
		<br><br>
		<div class="row container">
			<div class="col-sm">
				<form  method="POST" id="rsvp_form">
					<label for="Email" class="col-8 col-sm col-form-label"><strong><em>Email address :-</em></strong></label>
	                <div class="col-12">
	                    <input type="email" class="form-control" id="email_guest" placeholder="Enter email" name="email_guest">
	                <p id="validate_email" class="text-danger"></p>
	                </div>
	                <label for="password" class="col-8 col-sm col-form-label"><strong><em>Password :-</em></strong></label>
	                <div class="col-12">
	                    <input type="password" class="form-control" id="guest_password" placeholder="Enter password" name="guest_password">
	                <p id="validate_pass" class="text-danger"></p>
	                </div>
	                <a href="forgotpassword.php" style="float:right; color:red;">Forgot Password?</a>
	                <br>
	                <button type="submit" class="btn btn-success" name="select" value="dorsvp" id="rsvp">RSVP</button>
				</form>
			</div>			
			&nbsp;&nbsp;
			<div class="col-sm">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
					      <div class="item active">
					        <img src="bg1.jpg" alt="dyce" style="width:100%;">
					      </div>

					      <div class="item">
					        <img src="bg2.jpg" alt="handshake" style="width:100%;">
					      </div>
					    
					      <div class="item">
					        <img src="bg3.jpg" alt="flower" style="width:100%;">
					      </div>
					      <div class="item">
					        <img src="bg4.jpg" alt="lighting lamp" style="width:100%;">
					      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				</div>
			</div>
		</div>	
		</center>
	    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="main.js"></script>
</html>