<!DOCTYPE HTML>
<html>
<head>
  <title>جمعية نور للإغاثة و التنمية</title>
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
 <link href="{{asset('public2/css4/dropdawnlist.css')}}" rel="stylesheet" type="text/css" media="all"/>
 <link rel="stylesheet" href="css5/font-awesome.css" />
 <link href="{{asset('public2/css4/switch.css')}}" rel="stylesheet">
 <!-- <link href="{{asset('public2/css4/my_tabel.css')}}" rel="stylesheet"> -->
 <link href="{{asset('public2/css4/my_button.css')}}" rel="stylesheet">
 <link href="{{asset('public2/css4/card.css')}}" rel="stylesheet"> 


 
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
						  @include('inc.header_manger')
            <!--heder end here-->

<!--inner block start here-->
<div class="inner-block">
     <div class="col-md-12 compose-right">
		    <div class="inbox-details-body">
		        @yield('content')
	      </div>
	  </div>
</div>
<!--inner block end here-->

</div>
</div>
    <!--slider menu-->
        @include('inc.dashbord_manger')
    <!--slide bar menu end here-->
   <!--                  including script                               -->
    <!--sidebar-icon-->
      <script src="{{asset('public2/js4/sidebar-icon.js')}}"></script>
    <!--sidebar-icon-->



  	 <!--scrolling js-->
		   <script src="{{asset('public2/js4/bootstrap.js')}}"> </script>
	  	<script src="{{asset('public2/js4/jquery.nicescroll.js')}}"></script>
	   	<script src="{{asset('public2/js4/scripts.js')}}"></script>
	  	<!--//scrolling js-->
      	<script src="{{asset('public/js/sc_in_add_cours.js')}}"> </script>
       <script src="{{asset('public/js/ddl.js')}}"> </script>
       <script src="{{asset('public2/js4/card.js')}}"> </script>
       <script src="{{asset('public2/js5/input_q.js')}}"></script>
     <!-- mother grid end here-->
  <!--                  including script                               -->
</body>
</html>


                      
						
