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
<form action="newconference.php" method="post">
		<!-- <h2>Login</h2> -->
		<p><h2>Please enter Conference details!<h2></p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="topic" placeholder="Topic" required="required"></div>
				<div class="col-xs-6"><input type="date" class="form-control" name="deadline" placeholder="Deadline" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>  
    </form>

