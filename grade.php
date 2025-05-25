<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>

    <?php
   
   $science = 75;
   $maths = 63;
   $ict = 56;
   $english = 80;

   

   $average = ($science + $maths +$ict + $english) / 4;

   echo "Average is $average<br>";

   if($average > 0 && $average < 40){
        echo "Your grade is F";
   }
   elseif($average >= 40 && $average < 55){
        echo "your grade is S";
   }
   elseif($average >= 55 && $average < 65){
        echo "your grade is C";
   }
   elseif($average >= 65 && $average < 75){
        echo "your grade is B";
   }
   else{
        echo "your grade is A";
   }


    
    ?>
    
</body>
</html>