<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PERFIL USUARIO</h2>
    <?php
        foreach($usuario as $value){
             echo $value->ape_nom .'<br>';
             echo $value->usu_user .'<br>';
             echo $value->usu_pass .'<br>';
        }
    ?>
</body>
</html>