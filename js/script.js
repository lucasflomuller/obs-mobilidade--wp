var DOMElements = {
    checks: document.getElementsByClassName('project-card__checkbox'),
    newsCardCarousel: {
        newsCarouselRight: document.getElementById('newsCarouselRight'),
        newsCarouselLeft: document.getElementById('newsCarouselLeft')
    },
    newsCardCarouselContainer: document.getElementById('newsCardCarouselContainer')
};

Array.from(DOMElements.checks).forEach(e => (
    e.addEventListener("click", function () {
        this.parentNode.classList.toggle("project-card--active")
    })
));

for (key in DOMElements.newsCardCarousel) {
    DOMElements.newsCardCarousel[key].addEventListener("click", function () {
        DOMElements
            .newsCardCarouselContainer
            .classList
            .toggle('news-card__carousel-container--scrolled');
    });
}