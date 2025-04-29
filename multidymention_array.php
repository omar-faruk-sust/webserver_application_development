
<?php
// Array to store product details
$products = [
    ["ID" => 101, "Name" => "Laptop", "Price" => 1200],
    ["ID" => 102, "Name" => "Smartphone", "Price" => 800],
    ["ID" => 103, "Name" => "Tablet", "Price" => 500],
];

// Displaying product details
echo "<h2>Product List</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Price</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["ID"] . "</td>";
    echo "<td>" . $product["Name"] . "</td>";
    echo "<td>$" . $product["Price"] . "</td>";
    echo "</tr>";
}
echo "</table>";
