<?php
$conn = require_once __DIR__ . '/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid Request');
}

$id = (int) $_GET['id'];

$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
    die('User not found');
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');

    $profile_name = $row['profile'];
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['profile']['tmp_name'];
        $orig = basename($_FILES['profile']['name']);
        $ext = pathinfo($orig, PATHINFO_EXTENSION);
        $allowed = ['jpg','jpeg','png','gif'];
        if (!in_array(strtolower($ext), $allowed)) {
            $errors[] = 'Profile picture must be an image (jpg,png,gif).';
        } else {
            $newname = uniqid('p_') . '.' . $ext;
            $dest = __DIR__ . '/uploads/' . $newname;
            if (move_uploaded_file($tmp, $dest)) {
                // remove old file
                if (!empty($profile_name) && file_exists(__DIR__.'/uploads/'.$profile_name)) {
                    @unlink(__DIR__.'/uploads/'.$profile_name);
                }
                $profile_name = $newname;
            } else {
                $errors[] = 'Failed to save uploaded file.';
            }
        }
    }

    if (empty($errors)) {
        $up = mysqli_prepare($conn, "UPDATE users SET username=?, phone=?, email=?, profile=? WHERE id=?");
        mysqli_stmt_bind_param($up, 'ssssi', $username, $phone, $email, $profile_name, $id);
        mysqli_stmt_execute($up);
        mysqli_stmt_close($up);
        header('Location: index.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <style>
        body{font-family:Arial, sans-serif; background:#f4f4f4; padding:30px}
        .card{background:#fff; padding:20px; border:1px solid #ddd; max-width:600px; margin:auto}
        label{display:block; margin-top:8px}
        input[type=text], input[type=email]{width:100%; padding:8px}
        input[type=submit]{margin-top:10px; padding:8px 12px}
        img.avatar{width:80px; height:80px; border-radius:50%; object-fit:cover}
        .errors{color:red}
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit User</h2>

        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                <?php foreach($errors as $e): ?>
                    <li><?php echo htmlspecialchars($e); ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>

            <label>Phone Number</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>">

            <label>Email</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">

            <label>Profile Picture</label>
            <?php if (!empty($row['profile']) && file_exists(__DIR__.'/uploads/'.$row['profile'])): ?>
                <div><img class="avatar" src="uploads/<?php echo htmlspecialchars($row['profile']); ?>" alt=""></div>
            <?php endif; ?>
            <input type="file" name="profile" accept="image/*">

            <input type="submit" value="Update User">
        </form>

        <p><a href="index.php">← Back to list</a></p>
    </div>
</body>
</html>
