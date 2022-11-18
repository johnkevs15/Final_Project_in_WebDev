function imagePreview(image){
    var images = image.files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        $('#out-put').attr("src",reader.result).width(150).height(200);
    }
   reader.readAsDataURL(images)
   
}
$(document).ready(function(){
    // show Educational background
   $(".btnnext").click(function(){
    
    var lastnameVal = $("#lname").val();
    var fnameVal = $("#fname").val();
    var jobVal = $("#job").val();
    var addressVal = $("#address").val();
    var contactVal = $("#contact").val(); 
    var emailVal = $("#email").val();
    if(lastnameVal.length!=0 && fnameVal.length!=0 && jobVal.length!=0 && addressVal.length!=0 && contactVal.length!=0 && emailVal!=0)  
    {
       $(".first").hide(); 
     $(".second").show();
    }
   });
   // show Professional Skills
 
   $(".nextbtn1").click(function(){
       $(".second").hide(); 
       $(".first").hide(); 
     $(".third").show();
   

  
   });
   $(".backbtn1").click(function(){
    var schoolVal = $("#school").val();
    var schoollocationVal = $("#schooll").val();
    var degreeVal = $("#deg").val();
    var fieldVal = $("#field").val();
    var startVal = $("#start").val();
    var endVal = $("#end").val();
    if(schoolVal.length!=0 && schoollocationVal!=0 && degreeVal!=0 && fieldVal!=0 && startVal!=0 && endVal!=0){ 
     $(".second").hide();
     $(".first").show();
    }
   });
    // show Work History
   $(".nextbtn2").click(function(){
       $(".second").hide(); 
       $(".first").hide(); 
       $(".third").hide(); 
     $(".fourth").show();
   

  
   });
});