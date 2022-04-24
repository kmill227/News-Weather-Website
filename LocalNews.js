async function getLocalNews(location)
{
    const key = '263377734fef4966a4d70c607b678633';
    var url = 'https://newsapi.org/v2/everything?q=' + '\"' + location + '\"' + '&sortBy=relevancy&apiKey=' + key;
    return await fetch(url).then(response => response.json()).then(json => json);
}

getLocalNews("North Canton, Ohio").then(result =>
{
    for(var i = 0; i < 12; i++) // display first twelve results
    {
        var cityDiv = document.getElementById('City Row');
        var div = document.createElement('div');
        div.id = 'result' + i;
        div.className = "col-sm-3";
        var a = document.createElement('a'); 
        var head = document.createElement('h2');
        a.href = result.articles[i].url;
        var img = document.createElement('img');
        img.src = result.articles[i].urlToImage;
        head.innerHTML = result.articles[i].title;


        a.appendChild(head); // hyperlink title of article and image 
        a.appendChild(img);
        div.appendChild(a);
        cityDiv.appendChild(div); // append div to city div
    }
})

getLocalNews("Ohio").then(result =>
{
    for(var i = 0; i < 12; i++) // display first twelve results 
    {
        var stateDiv = document.getElementById('State Row');
        var div = document.createElement('div');
        div.id = 'result' + i;
        div.className = "col-sm-3";
        var head = document.createElement('h2');
        head.innerHTML = result.articles[i].title;

        var a = document.createElement('a'); 
        a.href = result.articles[i].url;

        var img = document.createElement('img');
        img.src = result.articles[i].urlToImage;



        a.appendChild(head); // hyperlink title of article and image 
        a.appendChild(img);
        div.appendChild(a);
        stateDiv.appendChild(div); // append div to state div
    }
})