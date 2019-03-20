var DOMElements = {
    checks: document.getElementsByClassName('project-card__checkbox'),
    newsCardCarousel: {
        newsCarouselRight: document.getElementById('newsCarouselRight'),
        newsCarouselLeft: document.getElementById('newsCarouselLeft')
    },
    newsCardCarouselContainer: document.getElementById('newsCardCarouselContainer')
};

if (DOMElements.checks) {
    Array.from(DOMElements.checks).forEach(e => {
        if (e) {
            e.addEventListener("click", function () {
                this.parentNode.classList.toggle("project-card--active")
            })
        }
    });
}

if (DOMElements.newsCardCarousel) {
    for (key in DOMElements.newsCardCarousel) {
        DOMElements.newsCardCarousel[key].addEventListener("click", function () {
            DOMElements
                .newsCardCarouselContainer
                .classList
                .toggle('news-card__carousel-container--scrolled');
        });
    }
}

if ($('.downloads__content')) {

    $('.downloads__content li').each(function () {
        $(this).addClass('child-item');
    });

    $('.downloads__content').find('ul').each(function () {
        var title = $(this).parent();

        title.each(function () {
            $(this).addClass('parent-item');
        })

        if (title.is('li')) {

            title.find('ul').hide();

            title.on('click', function (e) {
                if (title.is(e.target)) {
                    $(this).children('ul').slideToggle();
                    $(this).toggleClass('parent-item--show');
                }
            })
        }
    });

}