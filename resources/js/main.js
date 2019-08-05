var Masonry = require('masonry-layout');
var InfiniteScroll = require('infinite-scroll');
var imagesLoaded = require('imagesloaded');

$(function() {

    var msnry = new Masonry( '.grid', {
        // Masonry options...
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
    });

    InfiniteScroll.imagesLoaded = imagesLoaded;

    // init Infinite Scroll
    var infScroll = new InfiniteScroll( '.grid', {
        debug: true,
        history: false,
        path: '/?page={{#}}',
        append: '.grid-item',
        outlayer: msnry,
    });

});