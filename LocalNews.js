
async function getLocalNews(location)
{
    const key = '263377734fef4966a4d70c607b678633';
    var url = 'https://newsapi.org/v2/everything?q=' + '\"' + location + '\"' + '&sortBy=relevancy&apiKey=' + key;
    return await fetch(url).then(response => response.json());
}


getLocalNews("Cleveland, Ohio").then(result =>
{
    for(var i = 0; i < 12; i++) // display first twelve results
    {
        var deck = document.getElementById('city-row');
        
        var div = document.createElement('div');
        div.className = 'col-sm-3';

        var shadow = document.createElement('div');
        shadow.className ="shadow p-3 mb-5 bg-body rounded";

        var card = document.createElement('div');
        card.className = 'card h-100'
        card.id = 'city-result' + i;

        var cardBody = document.createElement('div');
        cardBody.className = 'card-body';

        var img = document.createElement('img');
        img.src = result.articles[i].urlToImage;
        img.className = 'card-img-top img-fluid';

        var a = document.createElement('a');
        a.href = result.articles[i].url;

        var h3 = document.createElement('h3');
        h3.className = 'card-title';
        h3.innerHTML = result.articles[i].title;

        
        deck.appendChild(div);
        div.appendChild(card);
        card.appendChild(a);
        a.appendChild(img);
        a.appendChild(h3);
        cardBody.appendChild(a);
        card.appendChild(cardBody);
    }
})

getLocalNews("Ohio").then(result =>
    {
        for(var i = 0; i < 12; i++) // display first twelve results
        {
            var deck = document.getElementById('state-row');
            
            var div = document.createElement('div');
            div.className = 'col-sm-3';
    
    
            var card = document.createElement('div');
            card.className = 'card h-100'
            card.id = 'state-result' + i;
    
            var cardBody = document.createElement('div');
            cardBody.className = 'card-body';
    
            var img = document.createElement('img');
            img.src = result.articles[i].urlToImage;
            img.className = 'card-img-top img-fluid';
    
            var a = document.createElement('a');
            a.href = result.articles[i].url;
    
            var h3 = document.createElement('h3');
            h3.className = 'card-title';
            h3.innerHTML = result.articles[i].title;
    
            
            deck.appendChild(div);
            div.appendChild(card);
            card.appendChild(a);
            a.appendChild(img);
            a.appendChild(h3);
            cardBody.appendChild(a);
            card.appendChild(cardBody);
        }
    })