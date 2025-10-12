<?php
include_once "config.php";
$categories = include_once "data/categories.php";
$products = include_once "data/products.php";

echo "<h2>Debug Category: customized-items</h2>";

$category = $categories['customized-items'];
echo "<p><strong>Category Title:</strong> " . $category['category_title'] . "</p>";
echo "<p><strong>Category Slug:</strong> " . $category['slug'] . "</p>";

echo "<h3>Product IDs in Category:</h3>";
echo "<pre>";
print_r($category['product_ids']);
echo "</pre>";

$keyFilter = array_flip($category['product_ids']);
$category_products = array_intersect_key($products, $keyFilter);

echo "<h3>Found Products (" . count($category_products) . "):</h3>";
echo "<pre>";
print_r(array_keys($category_products));
echo "</pre>";

echo "<h3>Product Details:</h3>";
foreach ($category_products as $id => $product) {
    echo "<div style='border: 1px solid #ccc; margin: 10px; padding: 10px;'>";
    echo "<strong>ID:</strong> " . $id . "<br>";
    echo "<strong>Title:</strong> " . $product['product_title'] . "<br>";
    echo "<strong>Price:</strong> $" . $product['product_price'] . "<br>";
    echo "<strong>Image:</strong> " . $product['image'] . "<br>";
    echo "<strong>Full Image Path:</strong> " . BASE_URL . $product['image'] . "<br>";
    echo "<img src='" . BASE_URL . $product['image'] . "' style='max-width: 200px; height: auto;' alt='" . $product['product_title'] . "'>";
    echo "</div>";
}

echo "<h3>Images Array for JavaScript:</h3>";
$images = array_values(array_map(function ($prod) {
    return BASE_URL . $prod["image"];
}, $category_products));
echo "<pre>";
print_r($images);
echo "</pre>";

echo "<h3>JavaScript Debug:</h3>";
echo "<script>";
echo "console.log('Images array:', " . json_encode($images) . ");";
echo "console.log('Images count:', " . count($images) . ");";
echo "</script>";
?>