
var boy=$('.boy');
var snack=$('.snack');

boy.click(function(){

  // snack.css("display","block");

  $(".cont").css("opacity","0.1");

   snack.fadeIn("fast",function(){
    $(window).scrollTop(0);
   })

})


//Ajax function to perfomr delete//
var deleteBtn=$("#remove");

deleteBtn.click(function(){
  
  /*selecting id of the clicked div*/
  var status=$(this).attr("id");
   console.log(status);
    /*the spinner button*/

  $(".spinner-border").removeClass("spin");
  $("#remove").attr("disable",true);

   setTimeout(function(){
    $(".spinner-border").addClass("spin");
    $("#remove").attr("disable",false);
   },3000)

   $.ajax({
     method: "POST",
     url:'delete.php',
     success: function(data){
       console.log(data);
     }
   })
})


var centre=$(".centre-image");
var pigment=$(".pigment");


pigment.click(function(){
  centre.css("display","block");
  
})


var press = $(".press");
press.click(function(){
  $(".paper").css("opacity","0.02");
    
})


// Action on the card.


// $("card").each(function(){
//   var actsec= $(this).find(".action-sec");
//   $( ".card").hover(function() {
//     actsec.fadeIn("slow", function() {})
//   });
  
// })


// $(".card").each(function(){
//   var actsec= $(this).find(".action-sec");
//   $( ".card").hover(function() {
//     actsec.fadeIn("slow", function() {})
//   });
  
// })













