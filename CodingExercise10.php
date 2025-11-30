<?php
    // Task 1: Priority Inclusion and Selection
    // Merge priority participants with the waiting list
    $combinedList = array_merge($priorityParticipants, $waitingList);
    // Remove duplicates and sort the combined list
    $uniqueAttendees = array_unique($combinedList);
    // Select the top 5 attendees from the unique, sorted list
    $finalAttendees = array_slice($uniqueAttendees, 0, 5);
    sort($finalAttendees);
    // Task 2: Backup Candidates Identification
    // Select the next three unique names for backup candidates, excluding final attendees
    $backupCandidates = array_slice($uniqueAttendees, 5, 3);
    // Display personalized backup candidate messages
    foreach ($backupCandidates as $candidate) {
        echo "Hey {$candidate}, we want to inform you that you are one of our backup candidates. 🥳\n";
    }
    // Task 3: Individual Status Inquiry
    // Manually filter the waiting list to exclude final attendees and backup candidates
    $remainingWaitingList = [];
    foreach ($uniqueAttendees as $person) {
        if (!in_array($person, $finalAttendees) && !in_array($person, $backupCandidates)) {
            $remainingWaitingList[] = $person;
        }
    }
    // Determine the individual's status
    if (in_array($individualName, $finalAttendees)) {
        $individualStatus = 'Final Attendee';
    } else if (in_array($individualName, $backupCandidates)) {
        $individualStatus = 'Backup Candidate';
    } else if (in_array($individualName, $remainingWaitingList)) {
        $position = array_search($individualName, $remainingWaitingList) + 1; // +1 for human-readable position (1-indexed)
        $individualStatus = 'Waiting, position ' . $position;
    } else {
        $individualStatus = 'Not found';
    }
