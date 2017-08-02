/**
 * Created by LeHieu on 7/24/2017.
 */
$("#login-button").click(function(event){
    event.preventDefault();

    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});