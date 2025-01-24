<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/L_login.css">
</head>

<body>
    <div class="login-container">
        <h2>Register</h2>
        <form action="L_registrtion_getData.php" id="registrationForm" method="POST">
            <input type="text" id="name" name="full_name" placeholder="Full Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" name="register_submitBtn">Register</button>
        </form>
        </form>
        <a href="L_login.php" class="link">Already have an account? Login here</a>
        <p id="error-message" style="color: red; display: none;"></p>
        <p id="success-message" style="color: green; display: none;"></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js"></script>
    <script src="js/register.js"></script>
</body>

</html>