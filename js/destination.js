(function(){
    console.log('destination.js');


    document.addEventListener('DOMContentLoaded', function() {
        const categoryId = 3; 
        const domaine = window.location.href;
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log(apiUrl);
    
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.getElementById('destination__list');
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    });

})();