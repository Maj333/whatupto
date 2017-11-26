$( document ).ready(function() {

    var snap_width = $(".plan").first().width();

    $( ".blocks" ).draggable({
        snap: ".plan,.blocks",
        snapTolerance: snap_width/2,
        snapMode: "inner",
        containment: ".weekdays"

    });

    $(".bar").click(function () {
        $(".chat-window").toggleClass("chat-window-hidden");
    })

    $(".add-button").click(function () {
        var tags = $('input[name=action-tag]').val();
        var start = $('input[name=hoursstart]').val();
        var end= $('input[name=hoursfinish]').val();
        var day= $('input[name=day-of-the-week]').val();


        alert(start);
        alert(end);

        var table_height = 60 * 24;


        var top = (start/table_height)*100;
        alert(top);
        var height = (end-start)*100/table_height;
        alert(height)
        $('.plan').eq(day).append("<div class=\"blocks\" style=\"top: "+top+"%; height: "+height+"%;\">\n" +
            "                                        <p>cos</p>\n" +
            "                                    </div>");

        //$.ajax( "engine/addblock.php?starttime="+start+"&finishtime="+end+"&day="+day+"&tags="+tags+"" );

        $.ajax({
            url: "engine/addblock.php?starttime="+start+"&finishtime="+end+"&day="+day+"&tags="+tags+"",
            success: function(data, textStatus, xhr) {
                console.log(data);
            },
            complete: function(xhr, textStatus) {
                console.log(textStatus);
            }
        });


        $( ".blocks" ).draggable({
            snap: ".plan,.blocks",
            snapTolerance: snap_width/2,
            snapMode: "inner",
            containment: ".weekdays"

        });

    })


});