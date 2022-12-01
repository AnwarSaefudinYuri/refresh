<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse2</title>
    <style>
        .warna-row{
            background-color : silver;
        }
    </style>
</head>
<body>
    <table border="1">
        
    <?php 
    
    for($r = "1"; $r <= 5; $r++){
        if($r % 2 == 1){ ?>
            <tr class="warna-row">
        <?php } else {?> 
        <tr>
        <?php } ?>
        <?php  for($c = "1"; $c <= 5; $c++){ ?>

            <td>
                <?php echo "$r, $c"; ?>
            </td>

        <?php } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>