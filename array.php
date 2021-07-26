<?php

$campionato = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'punteggioCasa' => '55',
        'squadraOspite' => 'Cantù',
        'punteggioOspite' => '60'
    ],
    [
        'squadraCasa' => 'Mens Sana Siena',
        'punteggioCasa' => '30',
        'squadraOspite' => 'V.L Pesaro',
        'punteggioOspite' => '40'
    ]
];

$stampa_calendario = count($campionato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite basket</title>
</head>
<body>
    <?php for ($i = 0; $i < $stampa_calendario; $i++){?>
        <div class="partite">
            <ul>
                <li>
                    <?php echo $campionato[$i]['squadraCasa'];?>
                    -
                    <?php echo $campionato[$i]['squadraOspite'];?>  
                    
                    <?php echo $campionato[$i]['punteggioCasa'];?>
                    -
                    <?php echo $campionato[$i]['punteggioOspite'];?>
                </li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>