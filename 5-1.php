<!-- Create a simple XMLHttpRequest, and retrieve data from a TXT file. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 12</title>
</head>
<body>
    
    <h1>Lab 12 - AJAX Request</h1>
    <button id="loadDataBtn">Load Data</button>
    <p id="dataContainer"></p>

    <script>
        document.getElementById('loadDataBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'sample-data.txt', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('dataContainer').innerText = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
</body>
</html>