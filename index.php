<?php

//----------------------------------------------
//   AnimeDB
//   Version 1.0
//   Copyright 2012 Alex Boorman
//   License: GNU General Public License
//----------------------------------------------

include 'app/environment.php';

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>AnimeDB</title>
	<meta name="description" content="AnimeDB">
	<meta name="author" content="Alex Boorman">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/style.scss">

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
		 <a class="brand" href="<?php echo $n_dash ;?>">AnimeDB</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo $n_dash ;?>">Dashboard</a></li>
              <li><a href="<?php echo $n_active ;?>">Active</a></li>
              <li><a href="<?php echo $n_archived ;?>">Archived</a></li>
			  <li><a href="<?php echo $n_mgmt ;?>">Management</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, <?php echo $my_name; ?>!</h1>
		<br />
        <h2>You currently have <?php echo $towatch_episodes;?> episodes to watch from <?php echo $towatch_series;?> series.</h2>
		<p>You have watched a total of <?php echo $total_series;?> series and <?php echo $total_episodes;?> episodes.
			<br />
		That's an average of <?php echo $total_spent;?> hours of your life you'll never get back, hope it was worth it!</p>
		<br />
        <p><a class="btn btn-primary btn-large">Watch Queue &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Recently Watched</h2>
		  <br />
           <ul class="unstyled">
				<li><a href="#">Sword Art Online</a> - 109</li>
				<li><a href="#">Sword Art Online</a> - 108</li>
				<li><a href="#">Highschool DxD</a> - 111</li>
				<li><a href="#">Highschool DxD</a> - 110</li>
				<li><a href="#">Bento</a> - 112</li>
			</ul>
          
        </div>
        <div class="span4">
          <h2>Recently Completed</h2>
            <br />
			<ul class="unstyled">
				<li><a href="#">Sword Art Online</a></li>
				<li><a href="#">Accel-World</a></li>
				<li><a href="#">Highschool DxD</a></li>
				<li><a href="#">Papa no Iu Koto o Kikinasai!</a></li>
				<li><a href="#">Bento</a></li>
			</ul>
       </div>
        <div class="span4">
          <h2>Highest Rated</h2>
          <br />
			<ul class="unstyled">
				<li><a href="#">Genshiken</a></li>
				<li><a href="#">Toradora!</a></li>
				<li><a href="#">Bakuman</a></li>
				<li><a href="#">NHK ni Yokoso</a></li>
				<li><a href="#">Kamisama no Memo-chou</a></li>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.js"><\/script>')</script>

<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
