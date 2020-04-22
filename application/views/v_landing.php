<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Psyccare Web">
	<meta name="author" content="Psyccare Team">

	<title>Psyccare, Your Psychology Partner!</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light-fixed-top">
	  <div class="container-fluid">
    	<div class="navbar-header">
      	  <a class="navbar-brand" href="#">PSYCHIATRIC CARE</a>
	  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	      </button>
   		</div>
	   	<ul class="navbar-nav ml-auto">
	      <li><a href="#caridokter">Cari Dokter</a></li>
	      <li><a href="#tanyadokter">Tanya Dokter</a></li>
	      <li><a href="#link">Artikel Kesehatan</a></li>
		  <li><a href="#login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
		</ul>	    
	  </div>
	</nav>

  <!-- Header -->
	<div class="header" style="background-color: #00BFFF">
	  <img src="<?php echo base_url(); ?>assets/doc.png" alt="logo" style="width: 150px; height: 150px;">
	  <form action="/action_page.php" style="float: right; width: 80%">
	      <input type="text" placeholder="Search.." name="search" style="padding: 8px; font-size: 16px; height: 40px; border: 1px solid grey; float: left; width: 50%; background: #f1f1f1;">
	      <button type="submit" style="float: left; height: 40px; width: 5%; padding: 8px; background: #2196F3; color: white; font-size: 16px; border: 1px solid grey; border-left: none; cursor: pointer;"><i class="fa fa-search"></i></button>
	  </form>
	</div>


	<center>
		<img src="<?php echo base_url(); ?>assets/1.png" class="img-fluid" alt="Responsive image">
	</center>

</body>
</html>