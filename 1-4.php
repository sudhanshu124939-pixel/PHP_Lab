<!-- 1.4. Write a PHP program to print current month using if..else& switch case.  -->

<?php
    $currentMonth = date("F");

    echo "<b>Using if..else:</b><br>";
    if ($currentMonth == "January") {
        echo "Current month is January.<br>";
    } elseif ($currentMonth == "February") {
        echo "Current month is February.<br>";
    } elseif ($currentMonth == "March") {
        echo "Current month is March.<br>";
    } elseif ($currentMonth == "April") {
        echo "Current month is April.<br>";
    } elseif ($currentMonth == "May") {
        echo "Current month is May.<br>";
    } elseif ($currentMonth == "June") {
        echo "Current month is June.<br>";
    } elseif ($currentMonth == "July") {
        echo "Current month is July.<br>";
    } elseif ($currentMonth == "August") {
        echo "Current month is August.<br>";
    } elseif ($currentMonth == "September") {
        echo "Current month is September.<br>";
    } elseif ($currentMonth == "October") {
        echo "Current month is October.<br>";
    } elseif ($currentMonth == "November") {
        echo "Current month is November.<br>";
    } else {
        echo "Current month is December.<br>";
    }

    echo "<br><b>Using switch case:</b><br>";
    switch ($currentMonth) {
        case "January":
            echo "Current month is January.<br>";
            break;
        case "February":
            echo "Current month is February.<br>";
            break;
        case "March":
            echo "Current month is March.<br>";
            break;
        case "April":
            echo "Current month is April.<br>";
            break;
        case "May":
            echo "Current month is May.<br>";
            break;
        case "June":
            echo "Current month is June.<br>";
            break;
        case "July":
            echo "Current month is July.<br>";
            break;
        case "August":
            echo "Current month is August.<br>";
            break;
        case "September":
            echo "Current month is September.<br>";
            break;
        case "October":
            echo "Current month is October.<br>";
            break;
        case "November":
            echo "Current month is November.<br>";
            break;
        case "December":
            echo "Current month is December.<br>";
            break;
        default:
            echo "Invalid month.<br>";
            break;
    }
?>