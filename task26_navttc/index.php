<?php
$day = date("l"); // Gets the full name of the day, e.g., "Monday"

switch ($day) {
    case "Monday":
        echo "Today is Monday. Start of the work week!";
        break;
    case "Tuesday":
        echo "Today is Tuesday. Keep going!";
        break;
    case "Wednesday":
        echo "Today is Wednesday. Midweek motivation!";
        break;
    case "Thursday":
        echo "Today is Thursday. Almost there!";
        break;
    case "Friday":
        echo "Today is Friday. Weekend is near!";
        break;
    case "Saturday":
        echo "Today is Saturday. Time to relax!";
        break;
    case "Sunday":
        echo "Today is Sunday. Prepare for the week ahead!";
        break;
    default:
        echo "Invalid day.";
}
?>
