$(document).ready(function() {
    //button next slide
    $('#btn-next').click(function(event) {
        let slide_next = $('.slide-show-top').next();
        let marks_lide_next = $('.slide-top').next();
        if (slide_next.length != 0) {
            //chuyen dong cua slide show
            $('.slide-show-top').addClass('remove-slide-next').one('webkitAnimationEnd', function(event) {
                $('.remove-slide-next').removeClass('remove-slide-next').removeClass('slide-show-top')
            });

            slide_next.addClass('slide-show-top').addClass('add-slide-next').one('webkitAnimationEnd', function(event) {
                slide_next.removeClass('add-slide-next');
            });
            //chuyen dong dau cham tron
            $('.slide-top').removeClass('slide-top');
            marks_lide_next.addClass('slide-top');

        } else {
            //chuyen dong cua slide show
            $('.slide-show-top').addClass('remove-slide-next').one('webkitAnimationEnd', function(event) {
                $('.remove-slide-next').removeClass('remove-slide-next').removeClass('slide-show-top')
            });
            $('.slide-show-first').addClass('slide-show-top').addClass('add-slide-next').one('webkitAnimationEnd', function(event) {
                $('.slide-show-first').removeClass('add-slide-next');
            });
            //chuyen dong dau cham tron
            $('.slide-top').removeClass('slide-top');
            $('.slide-first').addClass('slide-top');
        }
    });
    //button prev slide
    $('#btn-prev').click(function(event) {
        let slide_prev = $('.slide-show-top').prev();
        let marks_lide_prev = $('.slide-top').prev();
        console.log(slide_prev.length)
        if (slide_prev.length != 0) {
            //chuyen dong cua slide show
            $('.slide-show-top').addClass('remove-slide-prev').one('webkitAnimationEnd', function(event) {
                $('.remove-slide-prev').removeClass('remove-slide-prev').removeClass('slide-show-top')
            });

            slide_prev.addClass('slide-show-top').addClass('add-slide-prev').one('webkitAnimationEnd', function(event) {
                slide_prev.removeClass('add-slide-prev');
            });
            //chuyen dong dau cham tron
            $('.slide-top').removeClass('slide-top');
            marks_lide_prev.addClass('slide-top');

        } else {
            //chuyen dong cua slide show
            $('.slide-show-top').addClass('remove-slide-prev').one('webkitAnimationEnd', function(event) {
                $('.remove-slide-prev').removeClass('remove-slide-prev').removeClass('slide-show-top')
            });
            $('.slide-show-end').addClass('slide-show-top').addClass('add-slide-prev').one('webkitAnimationEnd', function(event) {
                $('.slide-show-end').removeClass('add-slide-prev');
            });
            //chuyen dong dau cham tron
            $('.slide-top').removeClass('slide-top');
            $('.slide-end').addClass('slide-top');
        }
    });
});