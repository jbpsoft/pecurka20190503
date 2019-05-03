<html>
<head>
	<title>JBPSoft</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    // Set trigger and container variables
    var trigger = $('#nav ul li a'),
        container = $('#content');
    
    // Fire on click
    trigger.on('click', function(){
      // Set $this for re-use. Set target from data attribute
      var $this = $(this),
        target = $this.data('target'); console.log(target) ;     
      
      // Load target page into container
      container.load(target + '.blade.php');
      
      // Stop normal link behavior
      return false;
    });
  });
</script> -->

</head>
<body>
	<!-- <div id="background"></div> -->
  	<!-- <div class="area"><center>Datum:</center>
  		<div id="content">
       		@include('pages/dashboard')
       	</div>
    </div> -->
	<nav class="main-menu" id="nav">
        <ul>
            <li>
                <a href="{{ AdminOptions::base_url() }}admin/1">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        {{ AdminOptions::lang(118, Session::get('jezik.AdminOptions::server()')) }}
                    </span>
                </a>
              
            </li>
            <li class="has-subnav">
                <a href="/zaduzenje-radnika">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        {{ AdminOptions::lang(119, Session::get('jezik.AdminOptions::server()')) }}
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Forms
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                        Pages
                    </span>
                </a>
               
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Graphs and Statistics
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                       Quotes
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                   <i class="fa fa-table fa-2x"></i>
                    <span class="nav-text">
                        Tables
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">
                        Maps
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                        Documentation
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
               <a href="#">
                     <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>  
        </ul>
    </nav>
</body>
</html>