<?php
function getPoints($hand) {
    $cards = explode(" ", $hand);
    sort($cards);
    $counts = array_count_values($cards);
    $pairs = 0;
    $trips = 0;
    $quads = 0;
    foreach ($counts as $count) {
        if ($count == 2) {
            $pairs++;
        } elseif ($count == 3) {
            $trips++;
        } elseif ($count == 4) {
            $quads++;
        }
    }
    if ($quads == 1) {
        return 200;
    } elseif ($trips == 1 && $pairs == 1) {
        return 50;
    } elseif ($trips == 1) {
        return 20;
    } elseif ($pairs == 2) {
        return 10;
    } elseif ($pairs == 1) {
        return 5;
    } else {
        return 1;
    }
}

$hands = ['6 valet dame as roi', '6 6 dame 6 6', '3 roi valet roi 6', '3 4 9 9 9', '9 9 3 5 3', 'roi 2 10 8 as', 'dame 8 roi valet roi', '5 8 4 as valet', 'dame roi 8 2 valet', '3 valet 10 8 2', '8 roi 6 3 2', 'as 2 9 10 dame', '9 as dame 3 2', 'roi 7 9 9 3', '10 roi 6 dame 7', 'roi 9 8 2 9', '5 dame dame valet 8', '10 valet as 5 7', 
'5 dame 7 as 8', '6 6 10 6 roi', 'valet valet as dame 10', '5 3 8 dame 4', '7 2 9 2 7'];
$points = 0;
foreach ($hands as $hand) {
    $points += getPoints($hand);
}
echo "Total points: $points";