$(document).ready(function(){
  //script for slider
  (function(){
    var current = 0;

    setInterval(function() {
      current++;
      if(current>2)current=0;
      $(".slider .items").animate({"margin-left":-500*current+"px"});
    },2000);
  })();
})
