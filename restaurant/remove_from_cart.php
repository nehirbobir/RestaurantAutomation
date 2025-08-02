<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'])) {
    $productId = $data['id'];

    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Dizi anahtarlarını yeniden sıralar
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Product not found in cart.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product id.']);
}
?>
