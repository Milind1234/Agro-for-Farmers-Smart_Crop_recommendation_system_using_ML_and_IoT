<?php
include('floginScript.php'); // Includes Login Script
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Farmer Portal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <style>
    /* Background Gradient */
    body {
      background: linear-gradient(135deg, #b5d48a, #eef2e1) !important;
    }

    /* Navbar Styling */
    .navbar {
      background-color: #2D6A4F;
      padding: 15px;
    }

    .navbar-brand img {
      width: 250px;
    }

    .nav-link {
      color: white !important;
      font-size: 1.1rem;
      padding: 10px 15px;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #D4A373 !important;
      text-decoration: underline;
    }

    .navbar-toggler {
      background-color: #D4A373;
    }

    .navbar-collapse {
      justify-content: flex-end;
    }

    /* Hover Transition for Dropdown Items */
    .dropdown-item {
      color: #333;
      padding: 10px 20px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .dropdown-item:hover {
      background-color: #A6B91A;
      color: white;
    }

    /* Form Container Styling */
    .form-section {
      background-color: #f8faf5;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 50px; /* Add margin to create space before footer */
    }

    /* Input Styling */
    input[type="email"],
    input[type="password"] {
      background-color: #e9f3dc;
      border: 1px solid #adc58f;
      border-radius: 5px;
    }

    /* Button Styling */
    .btn-login {
      background-color: #4b8e3b;
      border: none;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .btn-login:hover {
      background-color: #3e752f;
    }

    /* Label Styling */
    label {
      font-weight: bold;
      color: #3d5831;
    }

    /* Error Message */
    .error-message {
      color: #b33939;
    }

    /* Footer Styling */
    footer {
      background-color: #2c5f2d;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    footer a {
      color: #d4e157;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <div class="ml-3">
            <span class="badge badge-pill" style="background: linear-gradient(45deg, #D4A373, #A6B91A); font-size: 0.9rem; color: white; padding: 8px 15px;">
                Empowering Farmers with Technology
            </span>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home</a>
            </li>

            <!-- Dropdown for Login -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <div class="dropdown-menu" aria-labelledby="loginDropdown">
                    <a class="dropdown-item" href="../farmer/flogin.php">Farmer</a>
                    <a class="dropdown-item" href="../admin/alogin.php">Admin</a>
                </div>
            </li>

            <!-- Dropdown for Sign Up -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="signupDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
                <div class="dropdown-menu" aria-labelledby="signupDropdown">
                    <a class="dropdown-item" href="../farmer/fregister.php">Farmer</a>
                </div>
            </li>
        </ul>
    </div>
  </nav>

  <!-- Form Section -->
  <section class="section-lg mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form-section">
            <h3 class="text-center mb-4">Farmer Login</h3>
            <form method="post" action="flogin.php">
              <div class="form-group">
                <label for="farmer_email">Email Id</label>
                <input type="email" id="farmer_email" name="farmer_email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="farmer_password">Password</label>
                <div class="input-group">
                  <input type="password" id="farmer_password" name="farmer_password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <span class="input-group-text" onclick="password_show_hide();">
                      <i class="fas fa-eye" id="show_eye"></i>
                      <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="farmerlogin" class="btn-login">Login</button>
              </div>
              <?php if ($error != ''): ?>
                <p class="error-message mt-3 text-center"><?php echo $error; ?></p>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Farmer Portal. All Rights Reserved.</p>
      <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <!-- Bootstrap JS, jQuery and dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Password Show/Hide Script -->
  <script>
    function password_show_hide() {
      var x = document.getElementById("farmer_password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>

</body>

</html>
