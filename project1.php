<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="project1.css" type="text/css" rel="stylesheet"/>
        <title> control Interface </title>
    </head>
    <body style="background: url(robot1.PNG); background-repeat: no-repeat; background-size: 100%;">
        <?php 
            session_start();
            $con=mysqli_connect('127.0.0.1','root','','control_interface1');
            $check=mysqli_select_db($con,"control_interface1");
            if($check){
                echo "conect";
            }
            
        ?>
        <form method="post" action="">
        <div class="main">
            <p> contol panle</p>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك الأول   </h2>
                    
                    <div id="rangeValue" >  90 </div>
                     <input type="range" name="motor1" min="0" max="180" value="90" oninput="rangeValue.innerText=  this.value"> 
               </div>
            </div>
            <br>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك الثاني </h2>
                    <div id="rangeValue1">  90 </div>
                     <input type="range" name="motor2"  min="0" max="180" value="90" oninput="rangeValue1.innerText=  this.value">
               </div>
            </div>
            <br>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك الثالث </h2>
                    <div id="rangeValue2">  90 </div>
                     <input type="range" name="motor3" min="0" max="180" value="90" oninput="rangeValue2.innerText=  this.value">
               </div>
            </div>
            <br>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك الرابع</h2>
                    <div id="rangeValue3">  90 </div>
                     <input type="range"  name="motor4"min="0" max="180" value="90" oninput="rangeValue3.innerText=  this.value">
               </div>
            </div>
            <br>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك الخامس</h2>
                    <div id="rangeValue4">  90 </div>
                     <input type="range" name="motor5" min="0" max="180" value="90" oninput="rangeValue4.innerText=  this.value">
               </div>
            </div>
            <br>
            <div class="center">
                <div class="ele1">
                    <h2>المحرك السادس</h2>
                    <div id="rangeValue5">  90 </div>
                     <input type="range" name="motor6" min="0" max="180" value="90" oninput="rangeValue5.innerText=  this.value  ">
               </div>
            </div>

            <br>
            <br>
            <button class="save">حفظ</button>
            <button class="run" ><a href="new22.php">تشغيل</a></button>
          
            
            

        </div>
        
        <?php
        

                error_reporting(0);/*هذا عشان يخفي التحذير اللي جالس طالع لي */
            $motor1=$_POST['motor1'];
            $motor2=$_POST['motor2'];
            $motor3=$_POST['motor3'];
            $motor4=$_POST['motor4'];
            $motor5=$_POST['motor5'];
            $motor6=$_POST['motor6'];
            
    
        
         /*echo $motor1;
         echo $motor2;
         echo $motor3;
         echo $motor4;
         echo $motor5;
         echo $motor6;*/

   
   
     mysqli_query($con,"INSERT INTO motors(`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ($motor1,$motor2,$motor3,$motor4,$motor5,$motor6)");

               
        ?>
        
        
        </form >
    </body>
</html>