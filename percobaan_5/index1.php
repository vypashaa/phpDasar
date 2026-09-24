<?php 
    //pengulangan pada array
    //for

    $angka = [12,34,45,23,123,12324,32534];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for, foreach</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        
            .clear { clear: both; }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count($angka); $i++) {?>
    <div class="kotak"><?php echo $angka[$i];?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a ) :?>
        <div class= "kotak"><?php echo $a;?></div>
    <?php endforeach;?>
</body>
</html>