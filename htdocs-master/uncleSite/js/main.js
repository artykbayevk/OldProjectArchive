    var main_page_slider_element_width;
    var main_page_slider_interval;
    var main_page_slider_counter=0;
    function main_page_slider_resize(){
        main_page_slider_element_width=parseInt($(".main_page_slider_wrapper").css("width"))/4.5;
        $(".main_page_slider_element").css("width",main_page_slider_element_width);
        $(".main_page_slider_element").css("height",main_page_slider_element_width*1.2);
    }
    function main_page_slider_move(dist){
        $(".main_page_slider_elementsContainer").css("margin-left",
                 parseInt($(".main_page_slider_elementsContainer").css("margin-left"))-dist);
        main_page_slider_counter++;
        if(main_page_slider_counter==23){
            $(".main_page_slider_elementsContainer").removeClass
            ("main_page_slider_elementsContainer_transition");
            $(".main_page_slider_elementsContainer").css("margin-left",0);
            for(var i=0;i<$(".main_page_slider_element").length;i++){
                if(i<$(".main_page_slider_element").length-1)
                    $($(".main_page_slider_element")[i]).html(
                    $($(".main_page_slider_element")[i+1]).html());
                else
                    $($(".main_page_slider_element")[i]).html(
                    $($(".main_page_slider_element")[0]).html());
            }
        }
        if(main_page_slider_counter==24){
            $(".main_page_slider_elementsContainer").addClass
            ("main_page_slider_elementsContainer_transition");
            main_page_slider_counter=0;
        }
    }
    $(document).ready(function(){
        main_page_slider_resize();
        main_page_slider_interval=setInterval(function(){main_page_slider_move(main_page_slider_element_width/20);},300);
    })
    $(window).resize(function(){main_page_slider_resize();})
    $(".main_page_slider_wrapper").mouseenter(function(){clearInterval(main_page_slider_interval)});
    $(".main_page_slider_wrapper").mouseleave(function(){main_page_slider_interval=setInterval(function(){main_page_slider_move(main_page_slider_element_width/20)},300)});
