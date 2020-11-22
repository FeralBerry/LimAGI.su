$(document).ready(function(){
    $(".blog_categories_filter").click(function(){
        var value = $(this).attr("data-filter");
        var elem = $(".elem");
        if(value == "all"){
            $(elem).show("500");
        }
        else{
            $(elem).not("."+value).hide("500");
            $(elem).filter("."+value).show("500");
        }
    });
});
