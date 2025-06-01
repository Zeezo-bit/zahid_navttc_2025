<?php
// Array of month names
$months = ["January", "February", "March", "April", "May", "June", "July"];

// Month to delete
$deleteMonth = "April";

// Create a new array to hold the filtered values
$filteredMonths = [];

foreach ($months as $month) {
    if ($month !== $deleteMonth) {
        $filteredMonths[] = $month; // Add month to new array if it's not the one to delete
    }
}

// Display result
echo "Months after removing '$deleteMonth':<br>";
foreach ($filteredMonths as $month) {
    echo $month . "<br>";
}
?>
