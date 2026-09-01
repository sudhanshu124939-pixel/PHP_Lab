<!-- Definition : Upload Image form local device to server folder. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload </title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" placeholder="upload your image">
        <input type="submit" value="upload">
    </form>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];

    $dir = __DIR__ . "/uploads";

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    if ($image_error == 0) {
        move_uploaded_file($image_tmp_name, $dir . "/" . $image_name);
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image.";
    }
}

?>