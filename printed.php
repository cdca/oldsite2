<?PHP
         
           

    
  
           
$file_handle = fopen("orders.csv", "r");



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
        
        
        <div id="admin_top">
             <h3>Date</h3>
            <h3>Time</h3>
            <h3>Phone</h3>
            <h3>Location</h3>
            
        </div>
        
        <div id="table">
             <?PHP
                while (!feof($file_handle) ) {

                $line_of_text = fgetcsv($file_handle, 1024);


                print '<div class="date_box">'

                 . $line_of_text[0] .


                '</div>' ;


                print '<div class="time_box">'

                 . $line_of_text[1] .


                '</div>' ;


                    print '<div class="phone_box">'

                 . $line_of_text[2] .


                '</div>' ;

                    print '<div class="location_box">'

                 . $line_of_text[3] .


                '</div>' ;


                }


                fclose($file_handle);

                ?>
            </div>
            
       
       
       
    
       
 
        
        

       
        
        <div id="footer">
        <div id="footermenu">
            
             <ul>
                 <a href="index.html">HOME</a>
                 <a href="aboutus.html">ABOUT US</a>
                 <a href="hiw.html">HOW IT WORKS</a>
                 <a href="price.html">PRICING</a>
                 <a href="#footer">CONTACT US</a>
            </ul>
        </div>
        </div><!--footer-->
    </div><!-- wrapper-->
    
</body
</html>