var data = document.getElementById("localdata");
var weekData = document.getElementById("weeklydata1");
var worlddata = document.getElementById("worlddata");
var worlddata2 = document.getElementById("worlddata2");
var worlddata3 = document.getElementById("worlddata3");
var Latitude;
var Longitude;
var key = "a235109645429817ed4cb575d70b7df9";
var url = "http://api.openweathermap.org/data/2.5/weather?";
var weekurl = "https://api.openweathermap.org/data/2.5/onecall?";
var londonurl = "https://api.openweathermap.org/data/2.5/weather?lat=51.509865&lon=-0.118092&units=imperial&appid=a235109645429817ed4cb575d70b7df9"
var bejingurl = "https://api.openweathermap.org/data/2.5/weather?lat=39.9042&lon=116.4074&units=imperial&appid=a235109645429817ed4cb575d70b7df9"
var moscowurl = "https://api.openweathermap.org/data/2.5/weather?lat=55.7558&lon=37.6173&units=imperial&appid=a235109645429817ed4cb575d70b7df9"

//var weekUrl = "http://api.openweathermap.org/data/2.5/onecall?"

// Function to get the latitude and longitude data
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showData);
    } else {
        data_of_Lat_Lon.innerHTML = 
            "Geolocation is not supported by this browser";
    }
}
  
// Function to fetch the Latitude and Longitude
// from position data
function showData(position) {
    Latitude = position.coords.latitude;
    Longitude = position.coords.longitude;
  
    getData(Latitude, Longitude);
    getWeekData(Latitude,Longitude);
}

// Fetching the data and calling the API
function getData(Lat,Lon) {
    const readyToSent = (url + "lat=" + Lat 
        + "&lon=" + Lon + "&appid=" + key + "&units=imperial");
    
    fetch(readyToSent)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            fetchData(data)
        })

    const fullurl = (weekurl + "lat=" + Lat 
        + "&lon=" + Lon + "&appid=" + key + "&exclude=currently,minutely,hourly,alerts&units=imperial");
    fetch(fullurl)
        .then(response => response.json())
        .then(weekData => {
            console.log(weekData);
            fetchWeekData(weekData)
        })
}

    
// Fetching the data and calling the API for London
function getData2() {
    fetch(londonurl)
        .then(response => response.json())
        .then(worlddata => {
            console.log(worlddata);
            fetchData2(worlddata)
        })
}
getData2()



// Fetching the data and calling the API for Bejing
function getData3() {
    fetch(bejingurl)
        .then(response => response.json())
        .then(worlddata2 => {
            console.log(worlddata2);
            fetchData3(worlddata2)
        })
}
getData3();

// Fetching the data and calling the API for Melbourne
function getData4() {
    fetch(moscowurl)
        .then(response => response.json())
        .then(worlddata3 => {
            console.log(worlddata3);
            fetchData4(worlddata3)
        })
}

getData4();

function fetchData(data) {
    const icon = "http://openweathermap.org/img/wn/"
        + data.weather[0].icon + "@2x.png"
  
    document.getElementById("localdata").innerHTML =
        "<img src=" + icon + "><br>"
            + "<b>Country: </b>" + data.sys.country 
            + "<br><b>City: </b>" 
            + data.name + "<br><b>Temperature: </b>" 
            + parseFloat(data.main.temp).toFixed(0) + "°" +
            "<br><b>Feels Like: </b>" 
            + parseFloat(data.main.feels_like).toFixed(0) + "°"
            + "<br><b>Minimum Temperature: </b>" 
            + parseFloat(data.main.temp_min).toFixed(0) + "°"
            + "<br><b>Maximum Temperature: </b>" 
            + parseFloat(data.main.temp_max).toFixed(0) + "°"
            + "<br><b>Humidity: </b>" 
            + data.main.humidity + "%" 
            + "<br><b>Conditions: </b>" + " "
            + data.weather[0].main + "<br>"
}

function fetchData2(data) {
    const icon = "http://openweathermap.org/img/wn/"
        + data.weather[0].icon + "@2x.png"
  
    document.getElementById("worlddata").innerHTML = "<br><img src=" + icon + "></br><br><b> City: " + data.name + "</b></br><br><b> Temp: " + parseFloat(data.main.temp).toFixed(0) + "°" +
            "</b></br><b>Feels Like: </b>" 
            + parseFloat(data.main.feels_like).toFixed(0) + "°"
            + "<br><b>Min Temp: </b>" 
            + parseFloat(data.main.temp_min).toFixed(0) + "°"
            + "<br><b>Max Temp: </b>" 
            + parseFloat(data.main.temp_max).toFixed(0) + "°"
            + "<br><b>Humidity: </b>" 
            + data.main.humidity + "%" 
            + "<br><b>Conditions: </b>" + " "
            + data.weather[0].main + "<br>";
      
}

function fetchData3(data) {
    const icon = "http://openweathermap.org/img/wn/"
        + data.weather[0].icon + "@2x.png"
  
    document.getElementById("worlddata2").innerHTML = "<br><img src=" + icon + "></br><br><b> City: " + data.name + "</b></br><br><b> Temp: " + parseFloat(data.main.temp).toFixed(0) + "°" +
            "</b></br><b>Feels Like: </b>" 
            + parseFloat(data.main.feels_like).toFixed(0) + "°"
            + "<br><b>Min Temp: </b>" 
            + parseFloat(data.main.temp_min).toFixed(0) + "°"
            + "<br><b>Max Temp: </b>" 
            + parseFloat(data.main.temp_max).toFixed(0) + "°"
            + "<br><b>Humidity: </b>" 
            + data.main.humidity + "%" 
            + "<br><b>Conditions: </b>" + " "
            + data.weather[0].main + "<br>";
      
}

function fetchData4(data) {
    const icon = "http://openweathermap.org/img/wn/"
        + data.weather[0].icon + "@2x.png";
  
      document.getElementById("worlddata3").innerHTML = "<br><img src=" + icon + "></br><br><b> City: " + data.name + "</b></br><br><b> Temp: " + parseFloat(data.main.temp).toFixed(0) + "°" +
            "</b></br><b>Feels Like: </b>" 
            + parseFloat(data.main.feels_like).toFixed(0) + "°"
            + "<br><b>Min Temp: </b>" 
            + parseFloat(data.main.temp_min).toFixed(0) + "°"
            + "<br><b>Max Temp: </b>" 
            + parseFloat(data.main.temp_max).toFixed(0) + "°"
            + "<br><b>Humidity: </b>" 
            + data.main.humidity + "%" 
            + "<br><b>Conditions: </b>" + " "
            + data.weather[0].main + "<br>";
      
}

function fetchWeekData(data) {
const icon = "http://openweathermap.org/img/wn/"
        + data.daily[0].weather[0].icon + "@2x.png";

    document.getElementById("weeklydata1").innerHTML = "<br><img src=" + icon + "></br><br><b> Temp: " + 
    parseFloat(data.daily[0].temp.day).toFixed(0) + "°<br> Max: " + parseFloat(data.daily[0].temp.max).toFixed(0) + "°</br>Min: " + parseFloat(data.daily[0].temp.min).toFixed(0) + "°</br>Conditions: " + data.daily[0].weather[0].main;
    
const icon2 = "http://openweathermap.org/img/wn/"
        + data.daily[1].weather[0].icon + "@2x.png"; 

    document.getElementById("weeklydata2").innerHTML = "<br><img src=" + icon2 + "></br><br><b> Temp: " + 
    parseFloat(data.daily[1].temp.day).toFixed(0) + "°<br> Max: " + parseFloat(data.daily[1].temp.max).toFixed(0) + "°</br>Min: " + parseFloat(data.daily[1].temp.min).toFixed(0) + "°</br>Conditions: " + data.daily[1].weather[0].main; 

    const icon3 = "http://openweathermap.org/img/wn/"
        + data.daily[2].weather[0].icon + "@2x.png"; 

    document.getElementById("weeklydata3").innerHTML = "<br><img src=" + icon3 + "></br><br><b> Temp: " + 
    parseFloat(data.daily[2].temp.day).toFixed(0) + "°<br> Max: " + parseFloat(data.daily[2].temp.max).toFixed(0) + "°</br>Min: " + parseFloat(data.daily[2].temp.min).toFixed(0) + "°</br>Conditions: " + data.daily[2].weather[0].main;        

 const icon4 = "http://openweathermap.org/img/wn/"
        + data.daily[3].weather[0].icon + "@2x.png"; 

    document.getElementById("weeklydata4").innerHTML = "<br><img src=" + icon4 + "></br><br><b> Temp: " + 
    parseFloat(data.daily[3].temp.day).toFixed(0) + "°<br> Max: " + parseFloat(data.daily[3].temp.max).toFixed(0) + "°</br>Min: " + parseFloat(data.daily[3].temp.min).toFixed(0) + "°</br>Conditions: " + data.daily[3].weather[0].main;        

const icon5 = "http://openweathermap.org/img/wn/"
        + data.daily[4].weather[0].icon + "@2x.png"; 

    document.getElementById("weeklydata5").innerHTML = "<br><img src=" + icon5 + "></br><br><b> Temp: " + 
    parseFloat(data.daily[4].temp.day).toFixed(0) + "°<br> Max: " + parseFloat(data.daily[4].temp.max).toFixed(0) + "°</br>Min: " + parseFloat(data.daily[4].temp.min).toFixed(0) + "°</br>Conditions: " + data.daily[4].weather[0].main;
}

  
getLocation();
showData();
getData();
getdata3();
