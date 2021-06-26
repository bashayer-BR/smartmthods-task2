<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="project1.css" type="text/css" rel="stylesheet"/>
        <title> control Interface </title>
       
    </head>
    <body >
        

        <?php 
            session_start();
            $con=mysqli_connect('127.0.0.1','root','','control_interface1');
            $check=mysqli_select_db($con,"control_interface1");
           // if($check){
             //   echo "conect";
            //}
            
        ?>
        <?php 
                            
            //$get_lasr_record ="SELECT * FROM `motors` ORDER BY id DESC LIMIT 1";
            $get_lasr_record=mysqli_query($con,"SELECT * FROM `directione` ORDER BY id DESC LIMIT 1");
            while ($row=mysqli_fetch_array($get_lasr_record)) {
               
                echo $row['dir']."<br>";
               
                # code...
            }
        
            
        ?>
    </body>
</html>