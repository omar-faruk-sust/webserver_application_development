<?php
// Pass by value
function addTax($price) {
    $price += $price * 0.1; // Adding 10% tax
    return $price;
}

$itemPrice = 100;
echo "After applying tax the price is: ". addTax($itemPrice) . "</br>"; // Output: 110
echo "The original price is: ". $itemPrice . "</br>"; // Output: 100 (unchanged)

// Pass by reference
function applyDiscount(&$price) {
    $price -= $price * .05;
    return $price;
}

$productPrice = 300;
echo "The original price is: ". $productPrice . "</br>"; // Output: 299
echo "After applying discount the price is: ". applyDiscount($productPrice) . "</br>"; // Output: 284.05 (changed)
echo "After applying the discount with passed by refference the new price is : ". $productPrice . "</br>"; // Output: 299


//Write a function that calculates the final price after applying a tax (default 7%) and a discount (default 8%)."
function calculateFinalPrice(&$price, $tax = 7, $discount = 8) {
    $price += $price * ($tax / 100);    // Apply tax
    $price -= $price * ($discount / 100); // Apply discount

    return $price;
}

// Example usage
$originalPrice = 100;
$afterApplyingTaxAndDiscount = calculateFinalPrice($originalPrice);
echo "Final Price (Pass-by-reff): $originalPrice <br>"; // Output: 
echo $afterApplyingTaxAndDiscount;

