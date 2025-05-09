$(document).ready(function() {
    $('#strukturorganisasi').zoom({
    });

    $('.dropdown-submenu a.noSelect').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});