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