<?php
$products = [
    ['name' => 'Product 1', 'price' => 19.99],
    ['name' => 'Product 2', 'price' => 29.99],
    ['name' => 'Product 3', 'price' => 9.99]
];

foreach ($products as $product) {
    echo '<div class="product">';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>Price: $' . $product['price'] . '</p>';
    echo '<button>Add to Cart</button>';
    echo '</div>';
}
?>
