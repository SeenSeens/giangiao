$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    lazyLoad: true,
    margin: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        960: {
            items: 3
        },
        1200: {
            items: 4
        }
    }
});
$('.owl-carousel').on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) { $('.owl-carousel').trigger('next.owl'); } else { $('.owl-carousel').trigger('next.owl'); }
});