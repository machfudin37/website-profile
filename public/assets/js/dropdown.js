$(document).ready(function() {
    $('.dropdown-submenu a.noSelect').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});