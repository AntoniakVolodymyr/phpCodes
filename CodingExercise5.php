<?php
// Check if the customer has 6000 or more loyalty points
if ($loyaltyPoints >= 6000) {
    // Apply a 15% discount: Multiply the total cost by 85% (0.85), then add 8% tax
    $newTotalCost = $totalCost * 0.85 * 1.08;
    // Calculate new loyalty points earned based on the discounted and taxed cost
    $newLoyaltyPoints = $newTotalCost * 100;
    // Update the loyalty balance: Subtract 6000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints - 6000;
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}
// Check if the customer has 3000 or more (but less than 6000) loyalty points
if ($loyaltyPoints >= 3000) {
    // Apply a 5% discount: Multiply the total cost by 95% (0.95), then add 8% tax
    $newTotalCost = $totalCost * 0.95 * 1.08;
    // Calculate new loyalty points earned based on the discounted and taxed cost 
    $newLoyaltyPoints = $newTotalCost * 100;
    // Update the loyalty balance: Subtract 3000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints - 3000;
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";

} else {
    // If the customer has fewer than 3000 loyalty points, no discount is applied
    $newTotalCost = $totalCost * 1.08; // Apply only 8% tax
    // Calculate new loyalty points earned based on the total cost with tax
    $newLoyaltyPoints = $newTotalCost * 100;
    // Update the loyalty balance by adding the new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints;
    // Display a message to the customer stating no discount and the final price
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}
