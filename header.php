<?php require_once 'db/DAO.class.php'; ?>
<script type="module" src="js/globalNews.js"></script>
<script type="text/javascript">
  function swap_icon(){
    if ($.getElementById("login_logout").classList.contains("login")){
      $.getElementById("login_logout").addClass("logout");
      $.getElementById("login_logout").removeClass("login");
    } else if ($.getElementById("login_logout").classList.contains("logout")) {
      $.getElementById("login_logout").addClass("logout");
      $.getElementById("login_logout").removeClass("login");
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
</script>
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
