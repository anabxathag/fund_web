<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flag</title>
    <style>
    body {
        background-color: #ffdaff;
    }
    </style>
    
</head>
<body>
    <?php
        $url = "http://10.0.15.21/lab12/restapis/10countries.json";    
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach ($result as $couty) {  
            echo "<img src='$couty->flag' width='120' 
                height='90'> <br>";
            echo "Name : $couty->name<br>";
            echo "Capital : $couty->capital<br>";          
            echo "Population : $couty->population<br>";          
            echo "Region : $couty->region<br>";
            echo "Location : ";        
            foreach ($couty->latlng as $lc) {  
                echo "$lc ";           
            }
            echo "<br>Borders : ";
            foreach ($couty->borders as $bd) {  
                echo "$bd ";           
            }
            echo "<br><br>";  
        }
    ?>
</body>
</html>
