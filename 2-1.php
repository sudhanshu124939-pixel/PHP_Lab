<!-- 2.1 Write a PHP code to create numeric array for Monday to Saturday, associative array for month with total days of month such as
January=>30,February=>28 upto December and multidimensional array for laptop along with company name inside that model and price(any
two companies). -->

<?php
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

echo "<h3>Numeric Array</h3>";
print_r($days);

echo "<h3>Associative Array</h3>";
print_r($months);

echo "<h3>Multidimensional Array</h3>";
print_r($laptops);
?>