<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h2>CONTROL CLIENTE</h2>
    <?php
        foreach($cliente as $value){
            echo $value->ape_nom .'<br>';
        }
    ?>
   
</body>
</html>