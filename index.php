<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro for Farmers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
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

        /* Carousel Styling */
        .carousel-item img {
            width: 100%;
            height: 75vh;
            object-fit: cover;
            filter: brightness(85%);
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1.2rem;
        }

        .btn-carousel {
            background-color: #D4A373;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #fff;
            transition: 0.3s;
        }

        .btn-carousel:hover {
            background-color: #A6B91A;
        }


    /* Features Section */
    .features-section {
      padding: 60px 0;
      background-color: #f9f9f9;
    }
    .features-section h3 {
      font-size: 2.5rem;
      color: #218838;
    }
    .features-section p {
      font-size: 1.1rem;
      color: #333;
    }
    .features-section .feature-icon {
      font-size: 3rem;
      color: #218838;
    }
    .features-section ul {
      list-style: none;
      padding: 0;
    }
    .features-section li {
      padding: 10px 0;
      font-size: 1.1rem;
      color: #333;
    }

        /* Footer Styling */
        footer {
            background-color: #2D6A4F;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #D4A373;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: 0.3s;
        }

        footer a:hover {
            color: white;
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
                <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features"><i class="fas fa-seedling"></i> Features</a>
            </li>

            <!-- Dropdown for Login -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <div class="dropdown-menu" aria-labelledby="loginDropdown">
                    <a class="dropdown-item" href="farmer/flogin.php">Farmer</a>
                    <a class="dropdown-item" href="admin/alogin.php">Admin</a>
                </div>
            </li>

            <!-- Dropdown for Sign Up -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="signupDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
                <div class="dropdown-menu" aria-labelledby="signupDropdown">
                    <a class="dropdown-item" href="farmer/fregister.php">Farmer</a>
                </div>
            </li>
        </ul>
    </div>
</nav>




    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
             <div class="carousel-item active">
                <img src="assets/img/crop2.webp" alt="Crop Recommendations">
                <div class="carousel-caption">
                    <h1>Crop Recommendations System Using ML & IoT</h1>
                    <p>Boost Your Yield with Precision</p>
                    <a href="#features" class="btn btn-carousel">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/crop1.webp" alt="Sustainable Farming">
                <div class="carousel-caption">
                    <h1>Sustainable Farming</h1>
                    <p>Empowering Farmers with Technology</p>
                    <a href="#features" class="btn btn-carousel">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/crop3.webp" alt="Weather Forecasting">
                <div class="carousel-caption">
                    <h1>Real-Time Weather Forecasting</h1>
                    <p>Make Data-Driven Farming Decisions</p>
                    <a href="#features" class="btn btn-carousel">Learn More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

     <!-- Features Section -->
  <section class="features-section text-center" id="features">
    <div class="container">
      <h3>Features of the Crop Recommendation System</h3>
      <p>Our system provides multiple features to help farmers grow better crops and manage their farms efficiently.</p>
      <div class="row">
        <div class="col-md-6">
          <div class="feature-box">
            <i class="fas fa-leaf feature-icon"></i>
            <h4>Crop Recommendation</h4>
            <ul>
              <li>Data-driven crop suggestions</li>
              <li>Based on soil type, weather, and location</li>
              <li>Improves yield and reduces risk</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-box">
            <i class="fas fa-cloud-sun feature-icon"></i>
            <h4>Real-time Weather Forecasting</h4>
            <ul>
              <li>Up-to-date weather information</li>
              <li>Rainfall predictions in mm</li>
              <li>Data on temperature, humidity, and wind speed</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Agro for Farmers. All Rights Reserved.</p>
        <div>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
