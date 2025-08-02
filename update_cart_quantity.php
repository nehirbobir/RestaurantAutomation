<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['action'])) {
    $productId = $data['id'];
    $action = $data['action'];

    if (isset($_SESSION['cart'][$productId])) {
        if ($action === 'increase') {
            $_SESSION['cart'][$productId]['quantity'] += 1;
            echo json_encode(['success' => true]);
        } elseif ($action === 'decrease') {
            $_SESSION['cart'][$productId]['quantity'] -= 1;
            if ($_SESSION['cart'][$productId]['quantity'] <= 0) {
                unset($_SESSION['cart'][$productId]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Dizi anahtarlarını yeniden sıralar
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid action.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Product not found in cart.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product data.']);
}
?>
