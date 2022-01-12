

  $(".btn_delete").on('click', function() {
    $(".custom-model-main").addClass('model-open');
  }); 

  $(".close-btn, .bg-overlay").click(function(){
    $(".custom-model-main").removeClass('model-open');
  });

  $(".custom-model-main").mouseleave(function(){
    $(".custom-model-main").removeClass('model-open');
  })

  $(".cancel").on("click", function (){
    $(".custom-model-main").removeClass('model-open');
  })


  $(".btnn").click(function(){
    $(".modes").css({display:"block"})
  });


  $(".close").click(function(){
    $(".modes").css({display:"none"})
  })
  
  $(".modes-content").mouseleave(function(){
    $(".modes").css({display:"none"})
  })


$(".addcl").click(function () {
  const randomColor = Math.floor(Math.random()*16777215).toString(16);
  $(".coli").css({color:randomColor})
})

  















  




















