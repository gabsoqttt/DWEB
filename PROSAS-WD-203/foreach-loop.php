<?php
$products = [
    'Bertie Botts Every-Flavour Beans' => 5.99,
    'Chocolate Frog' => 4.50,
    'Cauldron Cakes' => 9.75,
];
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
        <h2>Price List</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $price ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
<?php include 'includes/includes-footer.php'; ?>
</html>