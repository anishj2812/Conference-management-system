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
    $name=$_POST['first_name'];
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection,'authentication');
    $qry="select * from reports";
    $ans=mysqli_query($connection,$qry);
    while($row=mysqli_fetch_array($ans))
    {
        
        // <a href="$row['Pdf']">Report</a>
        if($row['Name']==$name)  
        {
            echo $row['Name']; 
            echo "<br>"; 
            $url = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';   
            $string= preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $row['Pdf']);
            echo $string;
            echo "<br>";
            //header('Location: '.$row['Pdf']);
        }
        // echo (,"Report");
        // https://stackoverflow.com/questions/1960461/convert-plain-text-urls-into-html-hyperlinks-in-php
       
    }   
    //echo "data not present";   
?>  
