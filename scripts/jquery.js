$(document).ready(function () {
    $('#myImg').mouseover(function () {
        $(this).css("cursor", "pointer");
    });

    $("#myImg").click(function () {
        var img = new Image();
        img.src = this.src;

        $('#divimg')
            .empty()
            .prepend(img);

        $('#imgContainer')
            .animate({ width: "toggle" },).show();
    });

    $("#imgContainer").click(function () {
        $("#imgContainer")
            .animate({ width: "toggle" }, );
    });
});