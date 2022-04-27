<!--Author: Kaleb Miller-->
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src='LocalNews.js'></script>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">

        <title>
            Local News
        </title>
        
    </head>
    <body>
        <div class="row">
        <?php require_once "header.php" ?>
        <link rel='stylesheet' href='LocalNews.css'>
        </div>
        <main>
            <div class="container mt-5" id='City'>
                <h1 id = 'City News'>
                    City News
                </h1>
                <div class="row" id='city-row'>
                </div>
            </div>
            <div class="container mt-5" id='State'>
                <h1 id='State News'>
                    State News
                </h1>
                <div class="row" id="state-row">
                </div>
            </div>
        </main>
    </body>
</html>