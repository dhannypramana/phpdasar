<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <!-- Templating Style -->
        <table>
            <?php for ($i=1; $i<=5; $i++) : ?>
                <?php if ($i % 2 == 0) :?>
                    <tr class="genap">
                <?php else :?>
                    <tr class="ganjil">
                <?php endif;?>
                
                <?php for ($j=1; $j<=5; $j++) : ?>
                    <td class="table"><?php echo $i." , "; echo $j; ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>