$("#menu").click(function() {
  $(".wrapLeftMenu").css("transform","translateX(0px)");
  $(".backLeftMenu").css("display","block");
});
$(".backLeftMenu").click(function() {
  $(".wrapLeftMenu").css("transform","translateX(-250px)");
  $(".backLeftMenu").css("display","none");
});
