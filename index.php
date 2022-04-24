<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global News</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel=stylesheet>
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"  rel="stylesheet" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>
    <?php require_once 'db/DAO.class.php'; ?>
  </head>
  <body>
      <?php require_once "header.php" ?>
      <main id="globalNewsMain">
        <div class="row">
          <div class="col-md-9" id="newsCol">
            <div class = "row" id="featuredRow">
            <h1 id="featuredStoryTitle">Featured Story</h1>
              <div class="col-md-8">
                  <div id="featured">
                  </div>
              </div>
              <div class="col-md-4">
                <div id="featuredText"></div>
              </div>
            </div>
            <hr>
            <h2 id="moreStories">More Stories</h2>
            <div class="row">
              <script>
                    async function fetchArticles(){
                        var url = 'https://newsapi.org/v2/top-headlines?' +'country=us&' + 'apiKey=653a1affea5f4084a09d20d4863a0a0c';

                        return await fetch(url).then(function(response){
                            return response.json();
                        }).then(function(json){
                            return json;
                        });
                    }

                    fetchArticles().then(function(result){
                        console.log(result.articles);
                        for(let i = 0; i < 7; i++){
                            if(i == 0){
                                var img = document.createElement('img');
                                img.src = result.articles[0].urlToImage;
                                var link = document.createElement("a");
                                link.href = result.articles[0].url;
                                var link2 = document.createElement("a");
                                link2.href = result.articles[0].url;

                                const title = document.createElement("h3");
                                const node = document.createTextNode(result.articles[0].title);
                                title.appendChild(node);

                                const element = document.getElementById("featured");
                                link.appendChild(img);
                                link.appendChild(title);
                                element.appendChild(link);

                                const desc = document.createElement("h4");
                                const node2 = document.createTextNode(result.articles[0].description);
                                const element2 = document.getElementById("featuredText");
                                desc.appendChild(node2);
                                link2.appendChild(title);
                                element2.appendChild(link2);
                                element2.appendChild(desc);
                            }
                            else{
                                var img = document.createElement('img');
                                img.src = result.articles[i].urlToImage;
                                var link = document.createElement("a");
                                link.href = result.articles[i].url;

                                const title = document.createElement("h6");
                                const node = document.createTextNode(result.articles[i].title);
                                title.appendChild(node);

                                const element = document.getElementById("article" + i);
                                link.appendChild(img);
                                link.appendChild(title);
                                element.appendChild(link);
                            }
                        }
                    })
                    </script>
                <div class="col-md-12" id="storyCol">
                    <table>
                    <tr>
                        <td>
                          <div id="article1"></div>
                        </td>
                        <td>
                          <div id="article2"></div>
                        </td>
                        <td>
                          <div id="article3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <div id="article4"></div>
                        </td>
                        <td>
                          <div id="article5"></div>
                        </td>
                        <td>
                          <div id="article6"></div>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
          </div>
          <div class="col-md-3" id="trendsCol">
            <h2 id="trendsTitle">Trends</h2>
            <?php 
              $trends = new GlobalTrendsDAO;
              $stmt = $trends->getPopularRecent();
              echo "<hr>";
              while($row = $stmt->fetch()){
                echo "<h5>" .  $row['GlobalTrend'] . "</h5>";
                echo "<p>" . $row['TotalSearches'] . " Searches</p><hr>";
              }

            ?>
          </div>
        </div>
      </main>
  </body>
</html>