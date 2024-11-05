<?php
$rows = 7; // Total number of rows

for ($i = 0; $i < $rows; $i++) {
    if ($i == 0 || $i == $rows - 1) {
        // First and last rows: print 5 stars
        echo "*****";
    } else {
        // Middle rows: print 3 spaces followed by 1 star
        echo "   *";
    }
    echo "<br>";
}
?>
