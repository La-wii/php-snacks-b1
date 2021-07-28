<?php

    $stringa = $_GET['password'];
    
    if (empty($_GET['password'])) {
        echo 'Errore';
    } else {
        $stringa == $_GET['password'];
        if ($stringa == 'Boolean') {
            $class = 'green';
        } else {
            $class = 'red';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        .green{
            color: green;
        }

        .red{
            color: red;
        }
    </style>    
    <p>
        
        <h1 class="<?php echo $class ?>"> La parola é <?php echo $stringa ?></h1>
        
    </p>
</body>
</html>
</html>