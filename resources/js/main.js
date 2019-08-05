let Masonry = require('masonry-layout');

$(function () {

    new Masonry('.grid', {
        // Masonry options...
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
    });
});