<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="weatherscript.js"></script>
   <?php require_once "header.php" ?>
  <link rel="stylesheet" href="weatherstyle.css">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
  <title>Weather Report</title>
</head>
<body>
<main>
  <div id="title">
  </div>
  <div id="localglobal">
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

