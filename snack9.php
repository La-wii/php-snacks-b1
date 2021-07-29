<?php
    include 'classe.php';
    //var_dump($classe);

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
    <?php       
        foreach($classe as $studente) {
            echo $studente['name'] . ' ' . $studente['lastname'] . '<br>';
            foreach ($studente as $key => $voto); {
                $array_lunghezza = count($voto);
                //var_dump($voto);
                foreach ($voto as $materia => $num){
                    echo  $materia . ' ' . $num . ' ' . '<br>'; 

                }
            }

            $media = array_sum($voto);
            echo 'La media è ' . ($media/$array_lunghezza) . '<br>';
            echo '<br>';
        }
    ?>
</body>
</html>