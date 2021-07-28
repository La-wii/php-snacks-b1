<?php 
    $random = [];

    for($i = 0; $i < 15; $i++){
        $numero = rand(1,100);
        //var_dump($numero);
        if(!in_array($numero, $random)){
            $random[] = $numero;
            //echo $numero;
        } else {
            $i--;
        }

    }

    print_r($random);


    //while(count($random) )



    // for ($i = 0 ; $i < 15; $i++){
    //     $rand = rand(1,100){
    //         in (!in_array($rand, $random)) {
    //             $random[] = $rand;
    //         } else {
    //             $i--
    //         }
    //     }
    // }

    //while (count($random) < 15){
    //    $rand = rand(1,100);
    //    if (!in_array($rand, $random)) {
    //        $random[] = $rand;
    //    }
    //}

    var_dump($random)
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

</body>
</html>