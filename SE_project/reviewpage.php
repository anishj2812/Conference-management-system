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
<?php
    session_start();
    $cn=$_SESSION['con'];
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection, 'authentication');
    $qry="select Fname,Lname,report,review_status from credentials where conference_id='$cn'";
    $arr=mysqli_query($connection,$qry);
     while($row=mysqli_fetch_array($arr))
    {
        echo $row['Fname']." ".$row['Lname']." ".$row['report']." ".$row['review_status']." ";
        echo "<br>"; 
    }
?>