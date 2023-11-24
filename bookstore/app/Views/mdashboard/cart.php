<!-- app/Views/cart.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

    <h2>Your Shopping Cart</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartContents as $item): ?>
                <tr>
                    <td><?= $item['fk_product_id']; ?></td>
                    <td><?= $item['qty']; ?></td>
                    <td><?= $item['cost']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><a href="<?= site_url('mdashboard/'); ?>home">Continue Shopping</a></p>

</body>
</html>