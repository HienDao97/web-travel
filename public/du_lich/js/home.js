$(document).ready(function(){
  $(".modal-option").click(function(){
    $(".modal-option").removeClass("modal-option-active");
    $(this).addClass("modal-option-active");
    var id = this.id;
    $(".modal-content").hide();
    var target = "#modal" + id.replace("option","");
    console.log(target);
    $(target).show();
  });
});