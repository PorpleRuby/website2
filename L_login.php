<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/L_login.css">
</head>
<body>
  <?php 
    if(isset($_SESSION['status'])) {
      echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
      unset($_SESSION['status']);
    }
  ?>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="L_register.php" class="link">Create an Account</a>
        <p id="error-message" style="color: red; display: none;"></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js"></script>
    <script src="js/L_login.js"></script>
</body>
</html>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAfrqEIM6iywN7yVHcEvrDP1xduUvF_8o8",
    authDomain: "se2-dhre-bmre-sample.firebaseapp.com",
    databaseURL: "https://se2-dhre-bmre-sample-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "se2-dhre-bmre-sample",
    storageBucket: "se2-dhre-bmre-sample.firebasestorage.app",
    messagingSenderId: "265567351937",
    appId: "1:265567351937:web:9d9924eca4e8a54c890980",
    measurementId: "G-2S8HHHG44S"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
