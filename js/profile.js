$( document ).ready(function() {

    var snap_width = $(".plan").first().width();

    $( ".blocks" ).draggable({
        snap: ".plan",
        snapTolerance: snap_width/2,
        snapMode: "inner",
        containment: ".weekdays",
        stop: function( event, ui ) {
            var starttime = ($(this).position().top+1) * 60/54;
            var endtime = (($(this).position().top+1) * 60/54) + ($(this).outerHeight() * 60/54);
            var tags = $(this).find('.tags_names').attr("placeholder");
            var bid = $(this).find('.blockid').attr("placeholder");
            var day = Math.floor($(this).position().left/$('.plan').width())+1;

            $.ajax({
                url: "engine/update.php?starttime="+starttime+"&finishtime="+endtime+"&day="+day+"&tags="+tags+"&bid="+bid+"",
                success: function(data, textStatus, xhr) {
                    console.log(data);
                },
                complete: function(xhr, textStatus) {
                    console.log(textStatus);
                }
            });
        }

    });

    $(".bar").click(function () {
        $(".chat-window").toggleClass("chat-window-hidden");
    })

    $(".box").click(function () {
        $(".chat-window").removeClass("chat-window-hidden");
    })

    $(".add-button").click(function () {
        var tags = $('input[name=action-tag]').val();
        var start = $('input[name=hoursstart]').val();
        var end= $('input[name=hoursfinish]').val();
        var day= $('input[name=day-of-the-week]').val();




        var table_height = 60 * 24;


        var top = (start/table_height)*100;

        var height = (end-start)*100/table_height;

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
            snap: ".plan",
            snapTolerance: snap_width/2,
            snapMode: "inner",
            containment: ".weekdays",
            stop: function( event, ui ) {
                var starttime = ($(this).position().top+1) * 60/54;
                var endtime = (($(this).position().top+1) * 60/54) + ($(this).outerHeight() * 60/54);
                var tags = $(this).find('.tags_names').attr("placeholder");
                var bid = $(this).find('.blockid').attr("placeholder");
                var day = Math.floor($(this).position().left/$('.plan').width())+1;
                

                $.ajax({
                    url: "engine/update.php?starttime="+starttime+"&finishtime="+endtime+"&day="+day+"&tags="+tags+"&bid="+bid+"",
                    success: function(data, textStatus, xhr) {
                        console.log(data);
                    },
                    complete: function(xhr, textStatus) {
                        console.log(textStatus);
                    }
                });
            }

        });

    })


});