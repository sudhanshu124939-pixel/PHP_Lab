<?php
define("COLLEGE_NAME", "Marwadi University");

$studentName = "Sudhanshu Tiwari";
$semester = "Semester 4";
$Python = 78;
$php = 82;
$OS = 75;
$CN = 80;
$DBMS = 85;

$total = $Python + $php + $OS + $CN + $DBMS;
$percentage = $total / 5;

// Display result
echo "<h2>" . COLLEGE_NAME . "</h2>";
echo "<h3>Previous Semester Result</h3>";

echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br><br>";

echo "Python Marks: " . $Python . "<br>";
echo "PHP Marks: " . $php . "<br>";
echo "Operating Systems Marks: " . $OS . "<br>";
echo "Computer Networks Marks: " . $CN . "<br>";
echo "Database Management Systems Marks: " . $DBMS . "<br><br>";

echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>