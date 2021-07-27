<?php 
    //$name = $_GET['name'];
    //$email = $_GET['email'];
    //$age = $_GET['age'];

    if (empty($_GET['name'])|| empty($_GET['email']) || empty($_GET['age'])){
        $accesso = 'i campi sono vuoti';
    } else if(strpos($_GET['email'], '@') == true && strpos($_GET['email'], '.') == true && strlen($_GET['name']) > 3 && is_numeric($_GET['age']) == true){
        $accesso = 'Puoi accedere';
    } else {
        $accesso = 'Non puoi accedere';
    }
   
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati GET</title>
</head>
<body>
        <p>
            <?php 
                echo $accesso;
            ?>
        </p>
</body>
</html>