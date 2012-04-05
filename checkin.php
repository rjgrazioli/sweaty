<? include ('_header.php') ?>

<div class="screen">
	<div class="header container fixed">
		<div class="header-left">
			<a href="index.php" class="block">
				<img src="img/btn_back_trans.png" class="btn">
			</a>
		</div><!-- .left-button -->
		<div class="header-center">
		</div><!-- .center -->
		<div class="header-left">
			
		</div><!-- .right-button -->
	</div><!-- .header -->
	<div id="big-image" class="container">
		<img src="img/location.jpg">
		<div class="flip-icon">
			<img src="img/icon_map.png">
		</div><!-- .favorite-icon -->
	</div><!-- #big-info -->
	<div class="follow-bar container">
		<div class="address">
			<div class="name">Springfield Triathlon</div><!-- .name -->
			<div class="location">
				<img src="img/icon_location_small_w.png">
				878 NE 4th Street - 10.4 Mi
			</div><!-- .location -->
		</div><!-- .stats -->
		<a href="checkin.php" class="block">
			<div class="btn">Check In</div><!-- .btn -->
		</a>
	</div><!-- .follow-bar -->
	<div class="container">
		<? for($i=0;$i<15;$i++) { ?>	
		<div class="white-box">
			<div class="post">
				<div class="profile-pic mini">
					<img src="img/me.jpg">
				</div><!-- .profile-pic -->
				<div class="note-box">
					2 marathons in 2 months... I'm on a roll! - At <strong>Washington Marathon</strong> with <strong>Ben</strong> and <strong>Eric</strong>.
				</div><!-- .note-box -->
			</div><!-- .post -->
			<div class="post-extras">
				<div class="icons">
					<img src="img/icon_running.png" class="icon">
					<img src="img/icon_swimming.png" class="icon">
					<img src="img/icon_biking.png" class="icon">
				</div><!-- .icons -->
			</div><!-- .post-extras -->
		</div><!-- .white-box -->
		<? } ?>
	</div><!-- .container -->

<? include ('_footer.php') ?>