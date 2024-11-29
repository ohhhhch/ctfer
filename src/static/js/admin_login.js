$(function() {

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

   let popFlag = true;
   const popFunc = function (statusClass){
      if(popFlag){
         popFlag = false;
         if(statusClass === 'warn'){
            $("#popup").html("请输入账号和密码！").removeClass("remove").addClass("popBlock").addClass("warn")
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

   $(".button").click(function(e) {
      e.preventDefault()
      var pX = e.pageX,
         pY = e.pageY,
         oX = parseInt($(this).offset().left),
         oY = parseInt($(this).offset().top);

      if($("#name").val().trim() !=="" && $("#pass").val().trim() !== ''){
         $('.click-efect').remove();
         $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
         $('.x-' + oX + '.y-' + oY + '').animate({
            "width": "500px",
            "height": "500px",
            "top": "-250px",
            "left": "-250px",

         }, 600);
         $("button", this).addClass('active');

         setTimeout(function (){
            $('#adminLogin').submit()
            $("#name").val('')
            $("#pass").val('')
            $('#adminLogin').reset()
         },700)
      } else{
         popFunc('warn')
      }
   })


   $(".material-button").click(function() {
      window.location.href= "../admin/register.php"
   });


});