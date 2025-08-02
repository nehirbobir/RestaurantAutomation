<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['name']) && isset($data['category']) && isset($data['price']) && isset($data['image'])) {
    $productId = $data['id'];
    $productName = $data['name'];
    $productCategory = $data['category'];
    $productPrice = $data['price'];
    $productImage = $data['image'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity'] += 1; 
            $found = true;
            break;
        }
    }

    if (!$found) {
        $product = array(
            'id' => $productId,
            'name' => $productName,
            'category' => $productCategory,
            'price' => $productPrice,
            'image' => $productImage,
            'quantity' => 1 
        );
        $_SESSION['cart'][] = $product;
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product data.']);
}
?>
