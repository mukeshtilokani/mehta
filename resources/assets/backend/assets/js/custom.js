// Cookie by Parth
$(document).ready(function() {
    $('[data-toggle="theme"]').click(function() {
        Cookies.remove(c_t);
        var css_theme = $(this).attr("data-theme");
        Cookies.set('css-theme', css_theme);
        $("#css-theme").attr("href", c_t);
    });
    var c_t = Cookies.get('css-theme');
    if (!!Cookies('css-theme')) {
        $("#css-theme").attr("href", c_t);
    } else {
        $('#css-theme').empty();
    }
});