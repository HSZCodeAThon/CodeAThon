<!DOCTYPE html>
<html>
    <head>

    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <!--title>Best Cart</title-->

    <!-- Bootstrap core CSS -->
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! --> <!--[if
    lt IE
    9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media
    queries --> <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
    </head>
    
    <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Best Cart</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                 <!--li><a href="StoreOption.php">Store Selection</a></li-->
                <li><a href="itemtest.php">Items</a></li>
                <!--li><a href="contact.html">Contact</a></li-->
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Carousel ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
			</script>
			<script>
			var myCenter=new
			google.maps.LatLng(33.996293,-81.027369); var marker;
			function initialize() { var mapProp = { center:myCenter,
			zoom:15, mapTypeId:google.maps.MapTypeId.ROADMAP }; var
			map=new
			google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({ position:myCenter, 
			animation:google.maps.Animation.BOUNCE });

			marker.setMap(map);

			// Info open var infowindow = new
			google.maps.InfoWindow({ content:"Hello World!" });

			google.maps.event.addListener(marker, 'click',
			  function() { infowindow.open(map,marker); }); }
			  google.maps.event.addDomListener(window, 'load',
			  initialize);
			</script>
			<!--div id="googleMap" style="margin: auto; height:400px;
			width:1170px;"-->
                        <div id="googleMap" style="height:450px;"></div>
			
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>
    <div class="mainTitle">
	<div class="container">
	<h1>You Best Shopping Plan </h1>
	<p>
	Just check each item and click the "Create List" button, we will provide you the best
        shopping plan with minimum cost.
	</p>
	</div>
</div>
    <!-- Marketing messaging and featurettes
    ================================================== --> <!-- Wrap the rest of
    the page in another container to center all the content. -->
    <div id="content_area"> 
        <!--?php echo $content; ?-->
        <?php echo $formstart; ?>
        
       <?php echo $formend; ?>  
       </div> 
         
    
    
	<div class="highlightSection">
	<div class="container">
	<div class="row">
		<div class="col-lg-4">
                    <!-- php echo -->
		<div class="media">
			<a href="menu/"><img src="themes/assets/images/nepali-momo.png"
			alt="nepali-momo"> </a>
			<h3 class="media-heading text-primary-theme">NEPALESE
			LAMB MOMO</h3>
			<p>Steamed dumplings filled with slightly spiced minced
			meat served with special sauce.</p>
		</div>
		</div>
		<div class="col-lg-4">
		<div class="media"><a href="menu/"><img src="themes/assets/images/gorkha-special-chicken.png"
		alt="GURKHA SPECIAL CHICKEN"> </a>
		<h3 class="media-heading text-danger-theme">GURKHA SPECIAL
		CHICKEN</h3>
		<p>Boneless chicken marinated in mustard, smoked chilli, herbs
		and spices slowly cooked in tandoor. </p>
		
		</div>
		</div>
		<div class="col-lg-4">
		<div class="media">
		<a href="menu/"><img src="themes/assets/images/lam-tikka.png"
		alt="Lam Tikka"> </a>
		<h3 class="media-heading">LAMB TIKKA SPECIAL</h3>
		<p>Tender pieces of lamb mixed with our own spices and gently
		cooked in clay oven. </p>
		</div>
		</div>
	</div>
	</div>
	</div>
      
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
	<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 USC Columbia. &middot; <a href="#">Privacy</a>
        &middot; <a href="#">Terms</a></p>
		</div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== --> <!-- Placed at the
    end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>
  </body>


</html>