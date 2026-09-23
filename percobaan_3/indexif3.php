<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolom perulangan</title>
    <style>
        .warna_baris1 {
            background-color : #f26262;
        }

        .warna_baris2 {
            background-color : skyblue;
        }
    </style>
</head>
<body>
    <table border = "1" cellpadding = "10" cellspacing = "0">
       <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class = "warna_baris1">
            <?php else :?>
                <tr class = "warna_baris2">
                <?php endif?>

                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j";?></td>
                <?php endfor; ?>
            </tr>
       <?php endfor; ?>
    </table>
</body>
</html>