(function($){
    "use strict";

    var keysMap = {16:false, 77:false};
    var status = false;
    var text = "";
    var isVisible = false;
    var actions = jQuery.parseJSON(wordspeed.commands);
    var searchOptions = {
            shouldSort: true,
            threshold: 0.6,
            location: 0,
            distance: 100,
            maxPatternLength:32,
            minMatchCharLength:1,
            keys:["title","desc"]
    };

    document.onkeydown = function(e){
        if(e.keyCode in keysMap){
            keysMap[e.keyCode] = true;
            if(keysMap[16] && keysMap[77]){
                e.preventDefault();
                document.getElementById("wordspeed").classList.add("show");
                document.getElementById("wordspeed-input").focus();
                isVisible = true;
            }
        } else if(e.keyCode == 27) {
            document.getElementById("wordspeed").classList.remove("show");
            isVisible = false;
        }
    };

    document.onkeyup = function(e){
        if(isVisible){
            if(e.keyCode == 13){
                var actionItem = $("#wordspeed-suggestions .wordspeed-item.active .name").html();
                if(actionItem){
                    $.ajax({
                        url: wordspeed.ajax_url,
                        type: 'post',
                        data: {
                            action: 'wordspeed_command',
                            command: actionItem,
                        },
                        dataType:"json",
                        success: function(data){
                            if(data[0] == "redirect"){
                                window.location.replace(data[1]);
                            } else {
                                console.log(data);
                            }
                        }
                    });
                }
            } else if(e.keyCode in keysMap){
                keysMap[e.keyCode] = false;
            } else if(e.keyCode == 40){
                e.preventDefault();
                var index = $("#wordspeed-suggestions .wordspeed-item.active").index();
                var count = $("#wordspeed-suggestions .wordspeed-item").length;
                if(index+1 < count){
                    $("#wordspeed-suggestions .wordspeed-item.active").removeClass("active");
                    $("#wordspeed-suggestions .wordspeed-item:nth-child("+(index+2)+")").addClass("active");
                }
            } else if(e.keyCode == 38){
                if(isVisible){
                    e.preventDefault();
                    var index = $("#wordspeed-suggestions .wordspeed-item.active").index();
                    if(index > 0){
                        $("#wordspeed-suggestions .wordspeed-item.active").removeClass("active");
                        $("#wordspeed-suggestions .wordspeed-item:nth-child("+(index)+")").addClass("active");
                    }
                }
            } else {
                text = document.getElementById("wordspeed-input").value;
                var fuse = new Fuse(actions, searchOptions);
                var results = fuse.search(text);
                orderactions(results);
            }

            if($('#wordspeed-input').val() == ""){
                $('#wordspeed-suggestions').removeClass('active');
            } else {
                $('#wordspeed-suggestions').addClass('active');
            }
        }
    };

    function orderactions(results){
        if(results.length){
            if(results.length > 5){
                results = results.slice(0,5);
            }

            var html = "";
            var first = "";
            for(var i=0; i<results.length; i++){
                if(i==0){first = " active";} else {first = "";}
                html += '<article class="wordspeed-item'+first+'"><span class="name">'+results[i]['title']+'</span><span class="description">'+results[i]['desc']+'</span></article>';
            }
            $("#wordspeed-suggestions").html(html);
        }
    }
})(jQuery);
