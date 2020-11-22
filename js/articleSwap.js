function swapArticle() {
    // Viewed articles ID
    var article1 = document.getElementById('article1');
    var article2 = document.getElementById('article2');
    var article3 = document.getElementById('article3');
    // Articles in Other Article section
    var articleOthers1 = document.getElementById('articleOthers1');
    var articleOthers2 = document.getElementById('articleOthers2');
    var articleOthers3 = document.getElementById('articleOthers3');

    articleOthers1.onclick = function() {
        // Properly displayer viewed Article
        article1.style.display = "block";
        article2.style.display = "none";
        article3.style.display = "none";
        // Properly displayed Other Articles
        articleOthers1.style.display = "none";
        articleOthers2.style.display = "block";
        articleOthers3.style.display = "block";
    };

    articleOthers2.onclick = function() {
        // Properly displayer viewed Article
        article1.style.display = "none";
        article2.style.display = "block";
        article3.style.display = "none";
        // Properly displayed Other Articles
        articleOthers1.style.display = "block";
        articleOthers2.style.display = "none";
        articleOthers3.style.display = "block";
    };

    articleOthers3.onclick = function() {
        // Properly displayer viewed Article
        article1.style.display = "none";
        article2.style.display = "none";
        article3.style.display = "block";
        // Properly displayed Other Articles
        articleOthers1.style.display = "block";
        articleOthers2.style.display = "block";
        articleOthers3.style.display = "none";
    };
}