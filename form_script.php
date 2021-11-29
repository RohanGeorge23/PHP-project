<?php


// $user='root';
// $password='';
// $db = 'testdb'
// $db=new mysqli('localhost' ,$user,$password,$db) or die("Unabe to connect");

// echo "amazing"

$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$data=$name.",".$roll_no;


$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your NAME and ROLL NUMBER !</h1>";


?>
<html>
<head>
<title>ThankYou Page</title>    
</head>
<body>
<h1><a href="form.html">GO BACK</a> </h1>    
    
</body>
</html>


