$(function() {
    $('#benAbout').on('show.bs.collapse', function () {
        $("#showInfoLink").removeClass("fa-chevron-down").addClass("fa-chevron-up");
    });
    $('#benAbout').on('hide.bs.collapse', function () {
        $("#showInfoLink").removeClass("fa-chevron-up").addClass("fa-chevron-down");
    });
});