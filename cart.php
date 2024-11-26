<?php
session_start();
include('database/connection.php');

// Fungsi untuk menghapus produk dari keranjang
function removeFromCart($productId) {
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['productId'] == $productId) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];
    removeFromCart($productId);
    header('Location: cart.php'); // Reload keranjang
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    Produk ID: <?= $item['productId'] ?>, Jumlah: <?= $item['quantity'] ?>
                    <form action="cart.php" method="POST" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?= $item['productId'] ?>">
                        <button type="submit" name="remove_from_cart">Hapus</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Keranjang Anda kosong.</p>
    <?php endif; ?>
</body>
</html>