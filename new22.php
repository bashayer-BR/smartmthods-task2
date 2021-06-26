<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="new2.css" type="text/css" rel="stylesheet"/>
        <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            @media all and(max-width:1024px) {
                #conteneue{background: #ff6666;}
            }
        </style>
       
    </head>
    <body style="background: url(robots.jpg); background-repeat: no-repeat; background-size: 100%;">
        <?php 
            session_start();
            $con=mysqli_connect('127.0.0.1','root','','control_interface1');
            $check=mysqli_select_db($con,"control_interface1");
            
            ?>
            <?php
            if(isset($_POST['forward'])){
                $forward=$_POST['forward'];
                $qu= mysqli_query($con,"INSERT INTO directione(dir) VALUES ('$forward')");
                header("location:new2.php");
            }
            elseif(isset($_POST['left'])){
                $left=$_POST['left'];
                $qu= mysqli_query($con,"INSERT INTO directione(dir) VALUES ('$left')");
                header("location:new2.php");
            }
            
            
            elseif(isset($_POST['stop'])){
                $stop=$_POST['stop'];
                $qu= mysqli_query($con,"INSERT INTO directione(dir) VALUES ('$stop')");
                header("location:new2.php");
            }
            
            
            elseif(isset($_POST['right'])){
                $right=$_POST['right'];
                $qu= mysqli_query($con,"INSERT INTO directione(dir) VALUES ('$right')");
                header("location:new2.php");
            }
           
            elseif(isset($_POST['backward'])){
                $backward=$_POST['backward'];
                $qu= mysqli_query($con,"INSERT INTO directione(dir) VALUES ('$backward')");
                header("location:new2.php");
                /*
                هنا نفس الفكرة بس بدون وقت محدد ينقلك على الصفحة الثانية مباشرة
                */
                
                
            }
            ?>
           <!-- <meta http-equiv="refresh" content="5;url=new2.php"> عدد الثوانيو الصفحة اللي راح يوديك لها بعدد مرور الثواني  -->
            
            
       
        
        
         <form method="post" >
         <button value="forward"  class="up" name="forward" >forward</button>
         <button  value="left" class="cen" name="left" >left</button>
         <button value="stop" class="left" name="stop" >stop</button>
         <button value="right" class="right" name="right" >right</button>
         <button value="backward" class="down" name="backward" >backward</button>
         <button value="reset" class="down" name="reset" ><a href="project1.php">reset</a></button>
        </form>
        
        
    </body>
</html>