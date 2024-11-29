$(function() {
   setTimeout(()=>{
      $(".alt-2").click()
   },1)

   $(".input input").focus(function() {

      $(this).parent(".input").each(function() {
         $("label", this).css({
            "line-height": "18px",
            "font-size": "18px",
            "font-weight": "100",
            "top": "0px"
         })
         $(".spin", this).css({
            "width": "100%"
         })
      });
   }).blur(function() {
      $(".spin").css({
         "width": "0px"
      })
      if ($(this).val() == "") {
         $(this).parent(".input").each(function() {
            $("label", this).css({
               "line-height": "60px",
               "font-size": "24px",
               "font-weight": "300",
               "top": "10px"
            })
         });

      }
   });

   $(".alt-2").click(function() {
      if (!$(this).hasClass('material-button')) {
         $(".shape").css({
            "width": "100%",
            "height": "100%",
            "transform": "rotate(0deg)"
         })

         setTimeout(function() {
            $(".overbox").css({
               "overflow": "initial"
            })

         }, 600)

         $(this).animate({
            "width": "140px",
            "height": "140px"
         }, 500, function() {
            $(".box").removeClass("back");

            $(this).removeClass('active')
         });

         $(".overbox .title").fadeOut(300);
         $(".overbox .input").fadeOut(300);
         $(".overbox .button").fadeOut(300);

         $(".alt-2").addClass('material-buton');
      }

   })

   $(".material-button").click(function(e) {
      e.stopPropagation()
      if ($(this).hasClass('material-button')) {
         setTimeout(function() {
            $(".overbox").css({
               "overflow": "hidden"
            })
            $(".box").addClass("back");
         }, 200)
         $(this).addClass('active').animate({
            "width": "700px",
            "height": "700px"
         });

         setTimeout(function() {
            $(".shape").css({
               "width": "50%",
               "height": "50%",
               "transform": "rotate(45deg)"
            })

            $(".overbox .title").fadeIn(300);
            $(".overbox .input").fadeIn(300);
            $(".overbox .button").fadeIn(300);
         }, 700)

         $(this).removeClass('material-button');

      }

      if ($(".alt-2").hasClass('material-buton')) {
         $(".alt-2").removeClass('material-buton');
         $(".alt-2").addClass('material-button');
         setTimeout(()=>{
            window.location.href= "../admin/login.php"
         },1200)
      }

   });

   $(".shape").click(()=>{
      setTimeout(()=>{
         window.location.href= "../admin/login.php"
      },1200)
   })
   let popFlag = true;
   const popFunc = function (statusClass){
      if(popFlag){
         popFlag = false;
         if(statusClass === 'warn'){
            $("#popup").html("请完整填写表单").removeClass("remove").addClass("popBlock").addClass("warn")
            setTimeout(function (){
               $("#popup").addClass("remove")
               setTimeout(function (){
                  $("#popup").removeClass("remove").removeClass("popBlock").removeClass("warn")
                  popFlag = true
               },300)
            },2000)
         }
      }
   }

   $("#register_btn").click(function(e) {
      e.preventDefault()

      if($("#regname").val().trim() !=="" && $("#regpass").val().trim() !== '' && $("#invite_code").val().trim() !==''){
         setTimeout(function (){
            $('#adminRegister').submit()
            $("#regname").val('')
            $("#regpass").val('')
            $("#invite_code").val('')
            $('#adminRegister').reset()
         },700)
      } else{
         popFunc('warn')
      }
   })

});