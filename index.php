<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Kunti Najma</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h2 class="text-center">Login</h2>
                <br>
                <?php if (isset($_GET['message'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo htmlspecialchars($_GET['message']); ?>
                    </div>
                <?php endif; ?>
                <form action="proses.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="register.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
