
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP Clock</title>
        <meta  http-equiv="refresh"  content="1; url=ClockLoop1.php">
        <!-- MIS 314 students may copy html & css from samples -->
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <FIELDSET >
        <div class="bodyContainer">   
            <h1>Simple PHP clock</h1><hr  />
                    <?php for($i=0;$i<5;$i++):    ?>
            <div class="clockBorder" >
                <span class="clockFont">
   
                <?php 
                    //echo current time
                    //Format parameters: g hour, i minutes
                    //s seconds
                    echo date("G:i:s"); 
                    ?>
                </span>
             </div>
                <h3>Today is <?php echo date("F j, Y") ?></h3>
            
            <?php endfor;?>
        </div></FIELDSET>
    </body>
</html>
