$(document).ready(function(){
   //alert("hello");
    //changeHeight();
});

function changeHeight() {
    var a = $("#details_div_left").innerHeight();
    $("#details_div_right").height( a );
}

$(window).resize(function(){
    //changeHeight();
});
