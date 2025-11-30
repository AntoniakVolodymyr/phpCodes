<?php
// 1.) List Cleaning
// Remove duplicate names to ensure each individual is only listed once
$waitingList = array_unique($waitingList);
// Initialize an empty array to store names after removing those who opted out
$cleanedWaitingList = array();
// Iterate through the deduplicated waiting list
foreach ($waitingList as $name) {
    // Check if the current name is not in the removal list
    if (!in_array($name, $removeFromList)) {
        // If not in the removal list, add the name to the cleaned waiting list
        $cleanedWaitingList[] = $name;  
    }
}

// 2.) Initial Selection
// Alphabetically sort the cleaned waiting list for a fair selection process
sort($cleanedWaitingList);

// Initialize an array to hold the names of the first five selected participants
$selectedParticipants = array();

// Iterate through the cleaned and sorted waiting list
foreach ($cleanedWaitingList as $name) {
    // Check if fewer than five participants have been selected
    if (count($selectedParticipants) < 5) {
        // If less than five, add the current name to the selected participants list.
        $selectedParticipants[] = $name;
    } else {
        // Once five participants have been selected, exit the loop.
        break;
    }
}

// 3.) Attendance Indication
// Begin an unordered list in HTML to display each name with their attendance status
echo "<ul>";
// Iterate through the cleaned waiting list to display each name
foreach ($cleanedWaitingList as $name) {
    // Check if the current name is among the selected participants
    if (in_array($name, $selectedParticipants)) {
        // If selected, append a checkmark (✅) next to the name
        echo "<li>{$name} ✅</li>";
    } else {
        // If not selected, append a cross mark (❌) next to the name
        echo "<li>{$name} ❌</li>";
    }
}
// Close the unordered list
echo "</ul>";
