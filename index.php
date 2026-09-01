<!-- 
    Create PHP Script to insert record into database, then display that data on screen in table format with action button edit and delete, When user click on edit button it will open edit page allow the user to edit record and if user click on delete  button then delete the record from table.
    Table : 
        UserName
        Password

        Confirm Password
        Phone Number
        Email 
        Profile Picture in round sharp 
-->

<?php
$conn = require_once __DIR__ . '/db.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if ($username === '' || $password === '') {
        $errors[] = 'Username and password are required.';
    }

    if ($password !== $confirm) {
        $errors[] = 'Passwords do not match.';
    }

    $profile_name = null;
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['profile']['tmp_name'];
        $orig = basename($_FILES['profile']['name']);
        $ext = pathinfo($orig, PATHINFO_EXTENSION);
        $allowed = ['jpg','jpeg','png','gif'];
        if (!in_array(strtolower($ext), $allowed)) {
            $errors[] = 'Profile picture must be an image (jpg,png,gif).';
        } else {
            $profile_name = uniqid('p_') . '.' . $ext;
            $dest = __DIR__ . '/uploads/' . $profile_name;
            if (!move_uploaded_file($tmp, $dest)) {
                $errors[] = 'Failed to save uploaded file.';
            }
        }
    }

    if (empty($errors)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, "INSERT INTO users (username,password,phone,email,profile) VALUES (?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, 'sssss', $username, $hash, $phone, $email, $profile_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header('Location: index.php');
        exit;
    }
}

$res = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lab-13 - User CRUD</title>
    <style>
        body{font-family:Arial, sans-serif; background:#f4f4f4; padding:30px}
        .card{background:#fff; padding:20px; border:1px solid #ddd; max-width:800px; margin:auto}
        label{display:block; margin-top:8px}
        input[type=text], input[type=password], input[type=email]{width:100%; padding:8px}
        input[type=submit]{margin-top:10px; padding:8px 12px}
        table{width:100%; border-collapse:collapse; margin-top:20px}
        th,td{border:1px solid #ccc; padding:8px; text-align:left}
        img.avatar{width:56px; height:56px; border-radius:50%; object-fit:cover}
        .actions a{display:inline-block; margin-right:6px; padding:6px 8px; color:#fff; border-radius:4px}
        .edit{background:green}
        .delete{background:red}
        .errors{color:red}
    </style>
</head>
<body>
    <div class="card">
        <h2>Create User</h2>

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
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" required>

            <label>Phone Number</label>
            <input type="text" name="phone">

            <label>Email</label>
            <input type="email" name="email">

            <label>Profile Picture</label>
            <input type="file" name="profile" accept="image/*">

            <input type="submit" value="Create User">
        </form>

        <h2>User List</h2>
        <table>
            <tr><th>ID</th><th>Avatar</th><th>Username</th><th>Phone</th><th>Email</th><th>Action</th></tr>
            <?php while($row = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <?php if (!empty($row['profile']) && file_exists(__DIR__.'/uploads/'.$row['profile'])): ?>
                            <img class="avatar" src="uploads/<?php echo htmlspecialchars($row['profile']); ?>" alt="">
                        <?php else: ?>
                            <img class="avatar" src="https://via.placeholder.com/56" alt="">
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td class="actions">
                        <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
