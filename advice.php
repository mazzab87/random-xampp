<!doctype html>
<?php   session_start();  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                  <a class="nav-link active" href="advice.php">Advice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="weather.php">Weather</a>
                </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                  </li>
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
              <h1 class="display-5 fw-bold">Advice</h1>
              <p class="col-md-8 fs-4">This page provides advice on how to have a improved lifestyle for those with certain conditions.</p>
            </div>
          </div>
          <div class="row align-items-md-stretch">
            <div class="col-md-4">
              <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Allergies</h2>
                <p>An allergy is where your body reacts to something that's normally harmless like pollen, dust or animal fur. The symptoms can be mild, but for some people they can be very serious.</p>
                <button class="btn btn-outline-light" type="button" onclick="location.href='https:\/\/www.nhs.uk\/conditions\/allergies\/'">Learn more</button>
              </div>
            </div>
            <div class="col-md-4">
              <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Respitarory</h2>
                <p>Respiratory diseases affect the lungs and other parts of the respiratory system. Some of the most common are asthma, chronic obstructive pulmonary disease (COPD), lung cancer, cystic fibrosis, sleep apnea and occupational lung diseases.</p>
                <button class="btn btn-outline-secondary" type="button" onclick="location.href='https:\/\/www.nhs.uk\/conditions/shortness-of-breath/'">Learn more</button>
              </div>
            </div>
            <div class="col-md-4">  
              <div class="h-100 p-5 bg-dark-subtle border rounded-3">
                <h2>Extreme Temperatures</h2>
                <p>Extreme temperatures can be dangerous to your health. In the winter, the cold can cause hypothermia and frostbite. In the summer, the heat can cause heat exhaustion and heat stroke.</p>
                <button class="btn btn-outline-secondary" type="button" onclick="location.href='https:\/\/www.nhs.uk\/live-well/healthy-body/heatwave-how-to-cope-in-hot-weather/'">Learn more</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>