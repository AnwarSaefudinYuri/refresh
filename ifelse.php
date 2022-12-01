<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse</title>
    <style>
        .warna-table {
            background-color : silver;
        }
    </style>
</head>
<body>
    <table border="1">
    <?php  for($i = 1; $i <"5"; $i++) {?>
    <?php if($i % 2 == 0) { ?>
            <tr class="warna-table">
    <?php }else{ ?>  
        <tr>
    <?php } ?>
    <?php  for($c = 1; $c <"5"; $c++) {?>    
        <td>
            <?php echo "$i, $c"; ?>
        </td> <?php } ?>
    </tr>
    <?php } ?>
    </table>
</body>
</html>