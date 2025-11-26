<?php
$stock = 5;

$message = ($stock > 0) ? 'In stock' : 'Sold out';
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
    <p><?= $message ?></p>
</body>
<?php include 'includes/includes-footer.php'; ?>
</html>
