<!-- Select a few HTML elements (e.g., paragraphs, headings, buttons) and set their background color to red using jQuery -->

<!DOCTYPE html>
<html>

<head>
    <title>jQuery Background Color</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <h1>jQuery Example</h1>

    <h2>This is a heading</h2>

    <p>This is the first paragraph.</p>
    <p>This is the second paragraph.</p>

    <button>Click Me</button>

    <script>
        $(document).ready(function() {
            $("h2, p, button").css("background-color", "red");
        });
    </script>

</body>

</html>