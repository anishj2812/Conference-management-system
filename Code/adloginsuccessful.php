<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>International Conference Management System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->
</head>
<body>
</body>
</html>
<h1> Admin login successful </h1>
<h2> Running conference </h2>
<?php
	$connection=mysqli_connect('localhost','root');
	mysqli_select_db($connection,'authentication');
    $qry="select * from conference";
    $ans=mysqli_query($connection,$qry);
    while($row=mysqli_fetch_array($ans))
    {
        echo $row['id']." ".$row['topic']." ".$row['deadline'];
		echo "<br>";
    }
?>
<h2> New conference </h2>
<form action="conference.php" method="post">
		<!-- <h2>Login</h2> -->
		<p>Add new!</p>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
<h2> Go to conference </h2>
<form action="currentconference.php" method="get">
		<!-- <h2>Login</h2> -->
		<p>Please enter Conference id</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="int" class="form-control" name="id" placeholder="Id" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>  
    </form>
    <h2> Delete conference </h2>
<form action="deleteconference.php" method="post">
		<!-- <h2>Login</h2> -->
		<p>Please enter Conference id</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="int" class="form-control" name="cid" placeholder="Id" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>  
    </form>
<form action="adminlogin.php" method="post">
    <div class="form-group">    
        <button type="submit" class="btn btn-primary btn-lg">Logout</button>
    </div> 
    </form>