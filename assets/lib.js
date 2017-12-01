$(document).ready(function() {
    resizeValues();
});
$(window).resize(function() {
    resizeValues();
});

function resizeValues() {
    var height1 = $("#myCarousel").css("height");
    var offset1 = height1;
    var i1 = offset1.indexOf("px");
    if (i1 > -1) {
        offset1 = offset1.substring(0, offset1.length - 2);
    }
    var offset2 = parseInt(offset1 / 4);
    $("#myCarousel").css("top", "-" + offset2 + "px");
    var offset3 = offset1 - offset2;
    $("#text-content1").css("padding-top", offset3 + "px ");

    console.log("value setted:" + offset3);
    console.log("value setted2:" + $("#text-content1").css("padding-top"));
    //console.log("value setted:" + $("#text-content1").css("padding-top"));
}