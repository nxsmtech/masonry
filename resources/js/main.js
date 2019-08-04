var Masonry = require('masonry-layout');
var InfiniteScroll = require('infinite-scroll');
var imagesLoaded = require('imagesloaded');

var msnry = new Masonry( '.grid', {
    // Masonry options...
    itemSelector: '.grid-item',
});

InfiniteScroll.imagesLoaded = imagesLoaded;

// init Infinite Scroll
var infScroll = new InfiniteScroll( '.grid', {
    debug: true,
    path: '/blocks?page={{#}}',
    append: '.grid-item',
    outlayer: msnry,
});