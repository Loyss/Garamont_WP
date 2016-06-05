$(document).ready(function(){

    $(function() {
        $('.arrow a').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    //FORMATIONS

    $(".losange-ind_graph").click(function(){
        $("#li-ind_graph").trigger("click");
    });

    $(".a-ind").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-ind-2").trigger("click");
    });

    $(".a-prod-impr").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-prod-impr-2").trigger("click");
    });

    $(".a-prod-graph").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-prod-graph-2").trigger("click");
    });

    $(".losange-com_graph").click(function(){
        $("#li-com_graph").trigger("click");
    });

    $(".a-e-impr").click(function(){
        $("#li-com_graph").trigger("click");
        $("#a-e-impr-2").trigger("click");
    });

    $(".a-e-graph").click(function(){
        $("#li-com_graph").trigger("click");
        $("#a-e-graph-2").trigger("click");
    });

    $(".a-artisanat").click(function(){
        $("#li-artisanat").trigger("click");
    });

    $(".a-com-visuelle").click(function(){
        $("#li-artisanat").trigger("click");
        $("#a-com-visuelle-2").trigger("click");
    });

    $(".a-design").click(function(){
        $("#li-design").trigger("click");
    });

    $(".a-com-medias-impr").click(function(){
        $("#li-design").trigger("click");
        $("#a-com-medias-impr-2").trigger("click");
    });


    //Animation des hr de la page home
    setTimeout(function(){
        $('.trans--grow').addClass('grow');
    }, 275);
});