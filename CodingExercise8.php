<?php
// Task 1:
// Highlight the latest addition to your playlist
if (!empty($playlist)) {
    $lastIndex = count($playlist) - 1;
    $lastSong = $playlist[$lastIndex]; // Retrieve the last song in the playlist
    echo "Your lastly added song was: '$lastSong'.";
}

// Task 2:
// Keep your playlist fresh
if (count($playlist) <= 3) {
    // If the playlist has 3 or fewer songs, add a random song from the recommendations
    $randomIndex = rand(0, count($songRecommendations) - 1);
    $randomSong = $songRecommendations[$randomIndex];
    $playlist[] = $randomSong; // Add the randomly selected song to the end of the playlist
}

// Task 3:
// Remove the first Song
if (count($playlist) > 10) {
    // If the playlist has more than 10 songs, remove the song at the first position
    unset($playlist[0]); // Removes the first element from the playlist
}
