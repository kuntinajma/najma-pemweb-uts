<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Kunti Najma</title>
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
                <h2 class="text-center">Register</h2>
                <br>
                <form action="process.php" method="post">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Sudah punya akun? <a href="index.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
