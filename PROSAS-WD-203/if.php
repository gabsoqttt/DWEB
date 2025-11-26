<?php
$name = 'Prosas, Kim Charles';
$greeting = 'Hello';

if ($name != '') {
    $greeting = 'Welcome back, ' . $name;
}
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
    <h2><?= $greeting ?></h2>

</body>
<?php include 'includes/includes-footer.php'; ?>
</html>
