<?php
include('session.php');
include('logout.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="https://kit.fontawesome.com/70a4d83286.js" crossorigin="anonymous"></script>
<style type="text/css">
		body{
			background-color: black;
		}
  		html {
   		 	scroll-behavior: smooth;
		}
		.info{
			color:lightgrey;
		}
		.fa-clock{
			color: yellow;
  			border-color: white;
		}
</style>
</head>
<body>
	<?php 
		require "navbar.html";
	?>
	<div class="container info">
	<form class="mt-5" method="get">
		<div class="col-sm-6">
			<?php require "display.php";?>
	</div>
</section>
	<section class="row">
	<div class="col-md embed-responsive embed-responsive-16by9">
		<iframe width="1141" height="642" src="<?php echo $row['link'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</section>

</div>
<hr class="bg-white">
<?php
require "footer.html";
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>