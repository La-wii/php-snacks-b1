<?php
    include 'db.php'
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
            background-color: green;
        }

        .gray{
            background-color: gray;
        }
    </style> 
    
    <div class="gray">
        <?php foreach($db['teachers'] as $items) {?>
            <p><?php echo $items['name'] . ' ' . $items['lastname']?></p>
        <?php } ?>
    </div>

    <div class="green">
        <?php foreach($db['pm'] as $items) {?>
            <p><?php echo $items['name'] . ' ' . $items['lastname']?></p>
        <?php } ?>
    </div>
</body>
</html>