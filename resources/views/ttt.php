<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
  <title> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link href="{{ asset('public2/css4/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
  <!-- Custom Theme files -->
  <link rel="stylesheet" href="css/my.css" />
  <link rel="stylesheet" href="css/sidbar.css" />
  <link rel="stylesheet" href="public/css4/style.css" />
  <link rel="stylesheet" href="public/public2/css4/style.css" />
  <link rel="stylesheet" href="public/css4/style11.css" />
  <!-- <link rel="stylesheet" href="css/dropdawnlist.css" /> -->
  <link href="{{asset('public2/css4/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
  <!--icons-css-->
  <link href="{{ asset('public2/css4/font-awesome.css')}}" rel="stylesheet"> 
  <link rel="stylesheet" href="css5/font-awesome.css" />
  <!--Google Fonts-->
  <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
  <!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">

       @include('inc.header_manger')
        <div class="container">

        @yield('content')
        </div>
</div>
        @include('inc.dashbord_manger')
        <div class="clearfix"> </div>
       </div>  
       
       </div> <!-- mother-grid-inner -->
     </div> <!-- left-content -->
</div> <!-- page-container -->


</body>
</html>


<!-- including script-->
<!--js-->
<script src="public2/js4/jquery-2.1.1.min.js"></script> 
  <script src="public2/js4/bootstrap.js"> </script>
  <!-- script -->

  <!--scrolling js-->
  <script src="public2/js4/jquery.nicescroll.js"></script>
		<script src="public2/js4/scripts.js"></script>
		<!--//scrolling js-->
   <!-- script -->
   <!-- including script-->
                        
   









   <div class="inbox">
               <h2 dir="rtl" lang="ar">استمارة تقييم دورة تدريبية </h2>
       </div>