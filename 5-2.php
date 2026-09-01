<!-- 5.2 Create a XMLHttpRequest with a callback function, and retrieve data from a TXT file. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 12</title>
</head>

<body>
    <h2>Retrieve Data from TXT File</h2>
    <button onclick="loadData()">Load Data</button>

    <p id="output"></p>

    <script>
        function loadData() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("output").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "sample-data.txt", true);
            xhr.send();
        }
    </script>
</body>

</html>