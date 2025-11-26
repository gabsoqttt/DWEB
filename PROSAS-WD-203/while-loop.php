<?php
$counter = 1;
$packs = 5;
$price = 5.99;
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
    <h2>Bertie Botts Every-Flavour Beans</h2>

<h3>Prices for Multiple Packs</h3>
<p>
<?php
while ($counter <= $packs) {
    echo $counter;
    echo ' packs cost $';
    echo $price * $counter;
    echo '<br>';
    $counter++;
}
?>
</p>

</body>
<?php include 'includes/includes-footer.php'; ?>
</html>
