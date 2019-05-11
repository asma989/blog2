<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Product :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="public2/css4/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="public2/css4/my_css.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="public2/js4/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="public2/css4/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
						@include('inc.header_manger')
            <!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="error-404">  	


    </div>
</div>
<!--inner block end here-->

</div>
</div>
<!--slider menu-->
@include('inc.dashbord_manger')
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						






title>جمعية نور للإغاثة و التنمية</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link href="{{asset('public2/css4/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
 <!-- Custom Theme files -->
 <link href="{{asset('public2/css4/my_css.css')}}" rel="stylesheet" type="text/css" media="all"/>
 <link href="{{asset('public/css/my.css')}}" rel="stylesheet" type="text/css" media="all"/>
 <!--js-->
 <script src="{{asset('public2/js4/jquery-2.1.1.min.js')}}"></script> 
 <!--icons-css-->
 <link href="{{asset('public2/css4/font-awesome.css')}}" rel="stylesheet">
	<!--icons-css my add-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!--icons-css  my add-->
	
 <!--Google Fonts-->
 <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
 <!--//skycons-icons-->
 <link rel="stylesheet" href="css/my.css" />



 


 <div>
                        <div id="requirements_fields">
          
				                              </div>
																			<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > المتطلبات </p ></div>
				                             <div class="col-md-8 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الرقم">
		                                    </div>
	                                   </div>
                                     <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  اسم الصنف-البيان">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  الكمية  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الملاحظات ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder=" سعر تقريبي  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="requirements_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة متطلب جديد</span> </button>
                                             
																						 </div>
		                                    </div>
	                                   </div>
                                     
																		 <div class="clear"></div>
                                     <script>
																		     	var room = 1;
                                          function requirements_fields() {
																						room++;
                                           var objTo = document.getElementById('requirements_fields')
                                           var divtest = document.createElement("div");
	                                        divtest.setAttribute("class", "form-group removeclass"+room);
                                         	var rdiv = 'removeclass'+room;
                                        divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" >صنف جديد </p ></div><div class="col-md-8 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الرقم"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  اسم الصنف-البيان"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  الكمية  "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الملاحظات "></div></div> <div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder=" سعر تقريبي  "></div></div></div><br><div class="clear"></div>';
    
                                         objTo.appendChild(divtest)
                                         }	
																			</script>
                                    