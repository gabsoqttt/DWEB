<?php
include 'includes/header.php';
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account("20489446", "Checking", -35),
    new Account("20148896", "Savings", 550)
];

// Create customer
$customer = new Customer("Kim Charles", "Prosas", $accounts);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Neo Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <section>
        <h2>Name: <?php echo $customer->getFullName(); ?></h2>
        <table>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance</th>
            </tr>
            <?php foreach ($customer->getAccounts() as $account): ?>
                <tr>
                    <td><?php echo $account->getAccountNumber(); ?></td>
                    <td><?php echo $account->getType(); ?></td>
                    <?php if ($account->getBalance() >= 0): ?>
                        <td class="important">$<?php echo number_format($account->getBalance(), 2); ?></td>
                    <?php else: ?>
                        <td class="overdrawn">$<?php echo number_format($account->getBalance(), 2); ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>
<?php include 'includes/footer.php' ?>
</html>