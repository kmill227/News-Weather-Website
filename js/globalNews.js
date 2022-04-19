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
    for(let i = 0; i < 10; i++){
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

