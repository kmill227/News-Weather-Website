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
    <script type="module" src="globalNews.js"></script>
  </head>
  <body>
      <?php require_once "header.php" ?>
      <main>
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
                    <tr>
                        <td>
                          <div id="article7"></div>
                        </td>
                        <td>
                          <div id="article8"></div>
                        </td>
                        <td>
                          <div id="article9"></div>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
          </div>
          <div class="col-md-3" id="trendsCol">
            <h2 id="trendsTitle">Trends</h2>
          </div>
        </div>
      </main>
  </body>
</html>