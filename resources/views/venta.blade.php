<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CONTROL VENTA</h2>
    <?php
        foreach($venta as $value){
             echo $value->num_corre .'<br>';
             echo $value->serie .'<br>';
        }
    ?>
</body>
</html>