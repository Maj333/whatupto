$( document ).ready(function() {

    var snap_width = $(".plan").first().width();

    $( ".blocks" ).draggable({
        snap: ".plan,.blocks",
        snapTolerance: snap_width/2,
        snapMode: "inner",
        containment: ".weekdays"

    });

    $(".add-button").click(function () {
        var tags = $('input[name=action-tag]').val();
        var start = $('input[name=hoursstart]').val();
        var end= $('input[name=hoursfinish]').val();
        var day= $('input[name=day-of-the-week]').val();

        var table_height = 54 * 24;
        var top = start/table_height;
        var height = (end-start)/table_height;
        $('.plan').eq(day).html("<div class=\"blocks\" style=\"top: "+top+"%; height: "+height+"%;\">\n" +
            "                                        <p>cos</p>\n" +
            "                                    </div>");

        $.ajax( "engine/addblock.php?starttime="+start+"&finishtime="+end+"&day="+day+"&tags="+tags+"" );



        $( ".blocks" ).draggable({
            snap: ".plan,.blocks",
            snapTolerance: snap_width/2,
            snapMode: "inner",
            containment: ".weekdays"

        });

    })


});