<!-- Definition : Perform Select query on user table -->

<?php
$conn = mysqli_connect("localhost", "root", "", "lab-9");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

echo "<h2>User Table Records</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>