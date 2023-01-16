<?php
include "config.php";
$char_table = "test_chars";


function dice_roll( $side, $rolls ) {
    $total_dice = array();
    $rolls = $rolls -1;
    for ($x = 0; $x <= $rolls; $x++) {
        $dice = rand( 1, $side );
        

    if ( $side == 6 ) {
        if ( $dice === 1 ) {
            $dice_img = "<img src='pics/dice/1d6-1.png' width='40' height='40'>";
        }
        elseif ($dice === 2) {
            $dice_img = "<img src='pics/dice/1d6-2.png' width='40' height='40'>";
        }
        elseif ($dice == 3) {
            $dice_img = "<img src='pics/dice/1d6-3.png' width='40' height='40'>";
        }
        elseif ($dice == 4) {
            $dice_img = "<img src='pics/dice/1d6-4.png' width='40' height='40'>";
        }
        elseif ($dice == 5) {
            $dice_img = "<img src='pics/dice/1d6-5.png' width='40' height='40'>";
        }
        elseif ($dice == 6) {
            $dice_img = "<img src='pics/dice/1d6-6.png' width='40' height='40'>";
        }
    }
        else {
        echo "<li>". $dice . "</li>";
    }
        $total_dice[] = $dice;
        $total = array_sum($total_dice);
        echo "<p>". $dice_img ."</p>";
        
    }
    echo "<p>Total = ". $total . "</p>";
    return $total;
}
?>