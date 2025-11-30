<?php
// Check if the loyalty points balance is less than 3000
if ($loyaltyPoints < 3000) {
    // If true - inform the customer that no discount is available due to insufficient points
    echo 'You have fewer than 3000 Loyalty Points. No discount is available.';
}
// Check if the loyalty points balance is less than 6000 but more than or equal to 3000
else if ($loyaltyPoints < 6000) {
    // If true - offer the option to spend 3000 points for a 5% discount
    echo 'You can spend 3000 Loyalty Points for a discount of 5%.';
}
// For loyalty points balance of 6000 or more
else {
    // Offer the option to spend 6000 points for a 15% discount
    echo 'You can spend 6000 Loyalty Points for a discount of 15%.';
}
