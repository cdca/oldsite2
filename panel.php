<?PHP
$date=$_POST['datum'];
$time=$_POST['vrijeme'];
$phone=$_POST['telefon'];
$address=$_POST['adresa'];


$data = $date . "," . $time . "," . $phone . "," . $address ;

$file = "orders.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
    
    
    <link href="style.css" rel="stylesheet" type="text/css" />

    
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600,700,200' rel='stylesheet' type='text/css'>
    
    
    
    <link href="asw_final.css" rel="stylesheet" type="text/css" />
    <title>InstaLaundry</title>
</head>
   
    
    
    
<body>
    
    <div id="wrapper">
        <div id="thanks">
         <h1>Thank you for using our service. We'll call you back on     <?PHP
 echo $phone;

?> to confirm your order.</h1>
          <a href="index.html">Go back to webiste</a>
        </div>

    </div><!-- wrapper-->
    
</body
</html>