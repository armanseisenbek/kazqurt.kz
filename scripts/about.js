// Using AJAX we hide our extra headers and paragraphs

// ID like first, second e.t.c are located in our images 

//  Qua, fou are id of navs

//  Thanks to .fadeIn method, content not pops up to the page but smoothly appears in 3 secs 
$(document).ready(function(){
 
  $(".first").click(function(){
 	$("#qua").hide();
   	$("#fou").hide();
   	$("#go").hide();
   

    $("#loc").fadeIn(3000);
  });

   $(".second").click(function(){
   	
   	$("#loc").hide();
   	$("#fou").hide();
   	$("#go").hide();
   
  	$("#qua").fadeIn(3000);
  });

  $(".third").click(function(){
   	
   	$("#loc").hide();
   	$("#qua").hide();
   	$("#go").hide();
   
	$("#fou").fadeIn(3000);  
  }); 

 $(".fourth").click(function(){
   	
   	$("#loc").hide();
   	$("#fou").hide();
   	$("#qua").hide();
   	
  	$("#go").fadeIn(3000);
  }); 
});