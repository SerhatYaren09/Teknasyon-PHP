<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

            $age = 25;

            if ($age>=0 AND $age<=14) {
             	    
             	     echo "Çocuk";
             } 

             elseif ($age>=15 AND $age<=24) {
             	     
             	     echo "Genç";
             }
             
             elseif ($age>=25 AND $age<=64) {
             	     
             	     echo "Yetişkin";
             }

             else{

             	     echo "Yaşlı";
             }
    ?>
    
</body>
</html>

