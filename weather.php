<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="weatherscript.js"></script>
  <link rel="stylesheet" href="weatherstyle.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
  <title>Weather Report</title>
</head>
<body>
    <div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <div class="col-md-8">
                          <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="LocalNews.php">Local News</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="weather.php">Weather</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Edit Account</a>
                          </li>
                          </ul>
                      </div>
                      <div class="col-md-4" id="searchForm">
                           <form class="d-flex" method="post" action="http://localhost/HCIProject/globalSearch.php">
                              <input class="form-control me-2" type="search" placeholder="Search" name="globalSearch" aria-label="Search">
                              <button class="btn btn-outline-light" type="submit">Search</button>
                            </form>
                      </div>
                  </div>
            </nav>
        </div>
    </div>
</div>
<main>
  <div id="title">
    Weather Page
  </div>
  <div id="localWeather">
    <p id="localtitle">
      Local Weather
    </p>
    <p id="localdata"></p>
  </div>
  <div id="worldWeather">
    <p id="globaltitle">
      Global Weather
    </p>
    <p id="worlddata">
    </p>
    <p id="worlddata2">
    </p>
    <p id="worlddata3">
    </p>
    <p id="worlddata4">
    </p>
  </div>
  <div id = "weekforecast">
    <p id="weektitle">
    5 Day Forecast
    </p>
    <p id = "weeklydata1">
    </p>
    <p id="weeklydata2">
    </p>
    <p id="weeklydata3">
    </p>
    <p id="weeklydata4">
    </p>
    <p id="weeklydata5">
    </p>
  </div>
</main>
</body>
</html>
