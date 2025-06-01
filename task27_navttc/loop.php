<?php
echo "<h3>Using For Loop:</h3>";
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}

echo "<h3>Using While Loop:</h3>";
$i = 5;
while ($i <= 15) {
    echo $i . " ";
    $i++;
}

echo "<h3>Using Do...While Loop:</h3>";
$i = 5;
do {
    echo $i . " ";
    $i++;
} while ($i <= 15);
?>
