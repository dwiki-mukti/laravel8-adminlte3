/*
function toggleDropdown(filterCard) {
    $(document).mouseup(function (e) {
        if (
            !filterCard.is(e.target) &&
            filterCard.has(e.target).length === 0 &&
            filterCard.is(":visible") &&
            filterCard.is(":visible")
        ) {
            filterCard.hide();
        }
    });
}
*/

function sidebarActive(id) {
    $('#' + id).addClass('active')
    $('#' + id).parents('.nav-item').addClass('menu-open')
    $('#' + id).parents('ul').first().siblings('.nav-link').addClass('active')
}
// Cookies.set('name', 'value');
function nighMode(isDark) {
    if (isDark) {
        sessionStorage.setItem("mode", "night");
        $('body').addClass('dark-mode')
        $('#container-sidebar').removeClass('sidebar-light-primary').addClass('sidebar-dark-primary')
        $('#sidebar').removeClass('bg-light navbar-light').addClass('bg-dark navbar-dark')
    } else {
        sessionStorage.setItem("mode", "light");
        $('body').removeClass('dark-mode')
        $('#container-sidebar').removeClass('sidebar-dark-primary').addClass('sidebar-light-primary')
        $('#sidebar').removeClass('bg-dark navbar-dark').addClass('bg-light navbar-light')
    }
}