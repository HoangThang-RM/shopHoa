$(document).ready(function() {
    $('#forgetPass').click(function(event) {
        $('.formForgetPass').removeClass('an-hien-thi');
        $('.nen-mo').removeClass('an-hien-thi');
    });
    $('#exit-formForgetPass').click(function(event) {
        $('.formForgetPass').addClass('an-hien-thi');
        $('.nen-mo').addClass('an-hien-thi');
    });
});