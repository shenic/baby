<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Baby.com</title>

	

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/comments.js"></script>
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    var base_url ="<?php echo base_url(); ?>";

    $(function() {
        $('#gallery a').lightBox();
    });
    </script>



   	<style type="text/css">

	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #444;
		padding: 10px;
		width: 520px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }






	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 40px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	.album_right{

		border-style: solid;
		border-width: 1px;
		border-color: #000000;
		width: 180px;
		height: 250px;
		padding-left: 30px;
		padding-right: 30px;
		padding-top: 5px;
		padding-bottom: 5px;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 5px;
		margin-bottom: 5px;
		float:left;
	}





	.album_frame{

		border-style: solid;
		border-width: 1px;
		border-color: #000000;
		width: 800px;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		
		
	}


	.form{

		width: 200px;
	}





	







	</style>
</head>
<body>

<div id="container">

	<h1>Baby.com</h1>



