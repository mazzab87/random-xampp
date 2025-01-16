<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Weather Checker</title>
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Health</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="advice.php">Advice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="weather.php">Weather</a>
              </li>
              <?php
                if (!isset($_SESSION['user'])) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>';
                }
                else {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>';
                }
                ?>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="container">
          <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">Temperature</h1>
              <p class="col-md-8 fs-4">This page provides the current weather in the area of your decision.</p>
            </div>
          </div>

        <div class="container mt-5 d-flex justify-content-center">
            <div class="weather-app p-4 shadow-lg rounded border border-dark bg-light">
                <div class="search-box mb-4">
                    <div class="input-group">
                        <input type="text" id="city-input" class="form-control" placeholder="Enter city name">
                        <button class="btn btn-outline-primary" onclick="getWeather()">Search</button>
                    </div>
                </div>

                <div class="unit-toggle mb-4 text-center">
                    <label class="form-check-label me-2" for="unit-toggle">Celsius</label>
                    <input class="form-check-input" type="checkbox" id="unit-toggle" onchange="toggleUnit()">
                    <label class="form-check-label ms-2" for="unit-toggle">Fahrenheit</label>
                </div>

                <div class="weather-info text-center rounded shadow-lg p-4 border border-dark bg-white">
                    <h1 id="city-name" class="mb-3">Current Weather in ?</h1>
                    <div id="weather" class="mb-3">Loading Weather Data.....</div>
                    <img id="weather-icon" src="" alt="Weather Icon" class="img-fluid">
                    <p id="more-info" class="mt-3">Loading More Info.....</p>
                </div>
            </div>
        </div>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="weather.js"></script>
</body>
</html>