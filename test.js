function pcsh1() {
    var x = document.getElementById("pc1");
    if (x.classList.contains("hide")) {
      x.classList.remove("hide");
    } else {
      x.classList.add("hide");
    }
}
$(".skills").addClass("active")
$(".skills .skill .skill-bar span").each(function() {
   $(this).animate({
      "width": $(this).parent().attr("data-bar") + "%"
   }, 1000);
   $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
});
setTimeout(function() {
   $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
}, 2000);