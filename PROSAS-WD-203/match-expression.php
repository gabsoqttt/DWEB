<?php 
$day = 'Monday';

$offer = match($day) {
    'Monday' => '20% off Bertie Botts Every-Flavour Beans',
    'Saturday', 'Sunday' => '20% off Cauldron Cakes',
    default => '10% off entire menu',

};
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>The HoneyDukes Store</h1>
        <h2>Offers on <?= $day ?></h2>
        <p><?= $offer ?></p>
    </body>
<?php include 'includes/includes-footer.php'; ?>
</html>