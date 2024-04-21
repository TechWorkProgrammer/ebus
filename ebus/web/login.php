<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $userId = $result->fetch_assoc();



    if ($count == 1) {
        if ($username == 'admin' && $password == 'admin'){
            $_SESSION['role'] = 'admin';
            $_SESSION['username'] = $data['username'];
            $_SESSION['user_id'] = $data['id_user'];
            $_SESSION['outlet_id'] = $data['outlet_id'];
            header('location: admin/index.php');
            exit();
        } else {
            $_SESSION['login_user'] = $username;
            $_SESSION['user_id'] = $userId['id'];
            header("location: index.php"); 
            exit();

        }
        

    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-8 text-center">Login</h2>
            <form action="login.php" method="POST">
                <?php if(isset($error)): ?>
                    <p class="text-red-500 text-sm mb-4"><?= $error ?></p>
                <?php endif; ?>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" class="form-input mt-1 block w-full border" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" class="form-input mt-1 block w-full border" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</button>
            </form>
            <p class="text-sm mt-4">Not yet have account? <a href="register.php" class="mt-4 underline">Register</a>.</p>
        </div>
    </div>
</body>
</html>
