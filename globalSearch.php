<!--- Robin Oster --->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global News</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel=stylesheet>
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"  rel="stylesheet" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>
    <?php require_once 'db/DAO.class.php'; ?>
  </head>

  <script>
    <?php
        if(isset($_POST["globalSearch"])){
            $searchTerm = "'" . $_POST['globalSearch'] . "'";
            $currentDate = "'" . date("Y-m-d") . "'";
        }
        $newTrend = new GlobalTrendsDAO;
        $stmt = $newTrend->addTrend($_POST['globalSearch']);
    ?>
        window.onload = async function(){
            var url = 'https://newsapi.org/v2/everything?q='  + <?php echo $searchTerm; ?> + '&from=' + <?php echo $currentDate; ?> + '&sortBy=popularity&apiKey=653a1affea5f4084a09d20d4863a0a0c';

            return await fetch(url).then(function(response){
                return response.json();
            }).then(function(json){
                return json;
            }).then(function(result){
                console.log(result.articles);
                for(let i = 0; i < 20; i++){

                        var img = document.createElement('img');
                        img.src = result.articles[i].urlToImage;
                        var link = document.createElement("a");
                        link.href = result.articles[i].url;
                        var link2 = document.createElement("a");
                        link2.href = result.articles[i].url;
                        var hr = document.createElement("hr")

                        const title = document.createElement("h5");
                        const node = document.createTextNode(result.articles[i].title);
                        title.appendChild(node);

                        const element = document.getElementById('searchRow');
                        const element2 = document.getElementById('textRow');
                        link.appendChild(img);
                        link2.appendChild(title);
                        element.appendChild(link);
                        element2.appendChild(link2);

                }
        });
    }
    </script>
  <body>
      <?php require_once "header.php" ?>
      <main>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8" id="newsCol">
            <div class = "row">
              <div class="col-md-4" id="searchRow">
  
              </div>
              <div class="col-md-8" id="textRow">
  
              </div>
            </div>
            <div class="col-md-2"></div>
      </main>
  </body>
</html>