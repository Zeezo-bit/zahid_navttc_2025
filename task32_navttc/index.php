<?php
$row = 1;

while ($row <= 8) {
    $star = 1;
    while ($star <= $row) {
        echo "*";
        $star++;
    }
    echo "<br>"; // Move to next line after each row
    $row++;
}
?>
