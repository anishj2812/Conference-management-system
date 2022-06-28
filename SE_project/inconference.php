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
<form action="usersignup.php" method="post">
		<!-- <h2>Login</h2> -->
		<p>Add user!</p>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
	<form action="addreviwer.php" method="post">
		<!-- <h2>Login</h2> -->
		<p>Add reviewer!</p>
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
<h2> Submissions </h2>
<?php
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection, 'authentication');
    $qry="select *   from currentconference";
    $con=mysqli_query($connection,$qry);
    $con=mysqli_fetch_array($con);  
    $cn= $con['con_id'];
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection, 'authentication');
    $qry="select * from credentials where conference_id='$cn'";
    $arr=mysqli_query($connection,$qry);
    while($cb=mysqli_fetch_array($arr))
    {
        echo $cb['User_id']." ".$cb['Fname']." ".$cb["Lname"]." ";
        if($cb['report']==NULL)
        {
            echo "NULL ";
        }
        else
        {
            $url = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';   
            $string= preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $cb['report']);
            echo $string;
            echo "      ";
            //header('Location: '.$row['Pdf']);
            // echo (,"Report");
            // https://stackoverflow.com/questions/1960461/convert-plain-text-urls-into-html-hyperlinks-in-php
        }
        if($cb['review_status']==NULL)
        {
            echo "NULL ";
        }
        else
        {
            echo $cb['review_status']."     ";
        }
        echo"<br>";
    }
?>
