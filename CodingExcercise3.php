<?php

$newPrice = $price * 0.7;
$newPrice = $newPrice - 10;
$newPrice = $newPrice * 1.2;

$loyalityPoints = $newPrice * 100;

echo "After applying discounts and taxes, the item's price is reduced from \${$price} to \${$newPrice}, and you've earned {$loyalityPoints} loyalty points.";
