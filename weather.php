<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Weather Report</title>
  <link rel="stylesheet" href="weatherstyle.css">
  <?php require_once 'db/DAO.class.php'; ?>
</head>
<body>
  <?php require_once "header.php" ?>
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
  <script src="weatherscript.js"></script>
</body>
</html>
