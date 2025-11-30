<?php
// Task 1: Playlist Verification
// Check if the playlist is empty
if (empty($playlist)) {
    // If the playlist is empty, print a message encouraging the user to add more music
    echo 'Your playlist needs an update. Time to discover more music!';
} else {
    // Task 2: Song Presence Check
    // If the playlist is not empty, check if it contains the song 'Sunny Days'
    if (in_array('Sunny Days', $playlist)) {
        // If 'Sunny Days' is found, compliment the user's taste in music
        echo 'You have great taste! \'Sunny Days\' always lifts the mood!';
    } 
    // Task 3: Playlist Update
    else if (count($playlist) > 1) {
        // If 'Sunny Days' is not in the playlist and there are more than one song,
        // replace the second song with 'Solar Whispers'
        $playlist[1] = 'Solar Whispers';
    }
}
