<? 
	$header = 'scroll';
	include ('_header.php');
?>

<div class="screen">
	<div class="header container fixed black">
		<input type="text" class="filter" placeholder="Search Category">
		<input type="text" class="address" placeholder="Near Here...">
	</div><!-- .header -->
	<div class="second-bar container">
			<div class="oneline-center">Can't find what you looking for?</div><!-- .stats -->
		<div class="btn">Add It +</div><!-- .btn -->
	</div><!-- .follow-bar container -->
	<div class="container inspire">
		<? for($i=0;$i<15;$i++) { ?>	
		<div class="white-box">
			<a href="location.php">
				<div class="listing">
					<div class="info">
						<div class="name">
							Washington Marathon
						</div><!-- .name -->
						<div class="address">
							878 4th Street - 10.4 Mi
						</div><!-- .address -->
					</div><!-- .listing-info -->
					<div class="icons">
						<img src="img/icon_running.png" class="icon">
						<img src="img/icon_swimming.png" class="icon">
						<img src="img/icon_biking.png" class="icon">
					</div><!-- .icons -->
				</div><!-- .listing -->
			</a>
		</div><!-- .white-box -->
		<? } ?>
	</div><!-- .container -->

	<a href="races.php" class="races btn">Races</a>

<? include ('_footer.php') ?>













