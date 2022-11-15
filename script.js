

$(document).ready(function(){
     // show Educational background
    $(".btnnext").click(function(){
        // alert("working");
      $(".second").show();
   
    });
    // show Professional Skills
  
    $(".nextbtn1").click(function(){
        $(".second").hide(); 
        $(".first").hide(); 
      $(".third").show();
    

   
    });
    $(".backbtn1").click(function(){
      $(".second").hide();
    });
     // show Work History
    $(".nextbtn2").click(function(){
        $(".second").hide(); 
        $(".first").hide(); 
        $(".third").hide(); 
      $(".fourth").show();
    

   
    });
    $(".backbtn2").click(function(){
      $(".third").hide();
      $(".second").show();
    });
     // show Professional Summary
    $(".nextbtn3").click(function(){
        $(".second").hide(); 
        $(".first").hide(); 
        $(".third").hide(); 
        $(".fourth").hide(); 
      $(".fifth").show();
    

   
    });
    $(".backbtn3").click(function(){
      $(".fourth").hide();
      $(".third").show();
    });
    // next
    $(".nextbtn4").click(function(){
    //     $(".second").hide(); 
    //     $(".first").hide(); 
    //     $(".third").hide(); 
    //     $(".fourth").hide(); 
    //   $(".fifth").show();
    

   
    });
    $(".backbtn4").click(function(){
      $(".fifth").hide();
      $(".fourth").show();
    });
  });