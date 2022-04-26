<?php require_once 'db/DAO.class.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.auth0.com/js/auth0/9.18/auth0.min.js"></script>

<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <div class="col-md-6">
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
                      <div class="col-md-6" id="searchForm">
                           <form class="d-flex" method="post" action="http://localhost/HCIProject/globalSearch.php">
                              <input class="form-control me-2" type="search" placeholder="Search" name="globalSearch" aria-label="Search">

                              <button class="btn btn-outline-light" type="submit">Search</button>
                              <button class="btn btn-outline-light" type="button" id="login_logout">Login</button>
                            </form>
                      </div>
                      </div>
                  </div>
            </nav>
        </div>
    </div>
</div>

<script type="text/javascript">
  function swap_icon(){
    if (document.getElementById("login_logout").classList.contains("login")){
      document.getElementById("login_logout").addClass("logout");
      document.getElementById("login_logout").removeClass("login");
      window.location.href = "Login_and_Registration.html";
      console.log("beep");
    } else if (document.getElementById("login_logout").classList.contains("logout")) {
      document.getElementById("login_logout").addClass("logout");
      document.getElementById("login_logout").removeClass("login");
      console.log("boop");
    }
  }

  function log_out(){

    webAuth.logout({
      returnTo: 'index.php',
      clientID: '1lV30YhZEWN0v4VXuk1OjupKzLyjTyqP'
    });
  window.location.href = "index.php";
  swap_icon();
  }

  var login_logout = document.getElementById("login_logout");
  login_logout.addEventListener("click", log_out);
</script>