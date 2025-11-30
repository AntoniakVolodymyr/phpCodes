<?php
    if(empty($selectedCoffee)){
        $selectedCoffee = 'drip';
    }
?>

<div class="coffee-info">
    <?php if ($selectedCoffee == 'espresso'): ?>  
    <div id="espresso-info">
        <h1>Espresso ☕</h1>
        <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
    </div>

    <?php else: ?>
    <div id="drip-coffee-info">
        <h1>Drip Coffee ☕</h1>
        <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
    </div>

    <?php endif; ?>
</div>
