$( document ).ready(function() {

    var snap_width = $(".plan").first().width();

    $( ".blocks" ).draggable({
        snap: ".plan,.blocks",
        snapTolerance: snap_width/2,
        snapMode: "outer",

    });



});