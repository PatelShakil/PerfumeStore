<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Website</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin-top: 100px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card p-4">
            <div class="text-center mb-4">
                <h2>Welcome to Motala Perfumes</h2>
                <p>Create an account to get started!</p>
            </div>
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for="phone">Phone No.</label>
                    <input type="phone" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
