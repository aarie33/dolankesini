<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Paket Wisata</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="images/dolankesini.png">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			
			<?php include "header.php";?>

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="filter-links filterable-nav">
							<!--<select class="mobile-filter">
								<option value="*">Show all</option>
								<option value=".south-america">South America</option>
								<option value=".asia">Asia</option>
								<option value=".africa">Africa</option>
								<option value=".north-america">North America</option>
								<option value=".europe">Europe</option>
								<option value=".australia">Australia</option>	
							</select>
							<a href="#" class=" current wow fadeInRight" data-filter="*">Show all</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".south-america">South America</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".asia">Asia</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".africa">Africa</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".8s" data-filter=".north-america">North America</a>
							<a href="#" class="wow fadeInRight" data-wow-delay="1s" data-filter=".europe">Europe</a>
							<a href="#" class="wow fadeInRight" data-wow-delay="1.2s" data-filter=".australia">Australia</a>-->
						</div>
						<div class="filterable-items">
							<div class="filterable-item south-america">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/ijen2.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_bromo.php?wisata=bromo">Gunung Bromo</a></h2>
									<p>Gunung Bromo adalah salah satu gunung berapi aktif yang ada di Indonesia, tepatnya di Jawa Timur dan meliputi 4 kabupaten yaitu Kabupaten Probolinggo, Pasuruan, Lumajang, dan Kabupaten Malang.</p>
								</article>
							</div>
							<div class="filterable-item asia">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/papuma.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_papuma.php?wisata=papuma">Pantai Papuma, Teluk Love, dan Watu Ulo</a></h2>
									<p>Pantai Papuma dikenal juga dengan nama pantai Tanjung Papuma karena posisi daratannya menjorok ke laut menyerupai tanjung.</p>
								</article>
							</div>
							<div class="filterable-item africa">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/ijen2.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_ijen.php?wisata=ijen">Kawah Ijen</a></h2>
									<p>Kawah ijen merupakan objek wisata yang telah dikenal luas oleh wisatawan domestik maupun mancanegara karena keindahan alamnya.</p>
								</article>
							</div>
							<div class="filterable-item north-america">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/baluran.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_ijen_baluran.php?wisata=ijen_baluran">Kawah Ijen dan Baluran</a></h2>
									<p>Savanna bekol sebagai salah satu obyek wisata alam andalan Baluran memiliki luas kawasan ± 300 Ha yang meliputi hamparan savana alami terluas di Pulau Jawa, dengan latar belakang Gunung Baluran menjadikan pengunjung serasa berada di Afrika.</p>
								</article>
							</div>
							<div class="filterable-item europe">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/gili_labak.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_gili_labak.php?wisata=gili_labak">Gili Labak</a></h2>
									<p>Surga kecil ini terletak di kota Sumenep Madura, yaitu Wisata Pantai di Pulau Gili Labak (Labek) yang keindahannya merupakan kreasi Tuhan Yang Maha Sempurna. Letak Pulau Gili Labek ini berada di Desa Kombang, Kecamatan Talango Kabupaten Sumenep.</p>
								</article>
							</div>
							<div class="filterable-item australia">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="images/gili_ketapang.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="view_gili_ketapang.php?wisata=gili_ketapang">Gili Ketapang</a></h2>
									<p>Gili Ketapang adalah sebuah pulau yang Laut Utara dari Probolinggo. Ini memiliki pemandangan yang indah dan ada banyak pasir di timur dan selatan ini, dengan warna putih dengan background pantai yang kebiruan. </p>
								</article>
							</div>
							<!--<div class="filterable-item south-america">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-1.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
							<div class="filterable-item asia">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-2.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
							<div class="filterable-item africa">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-3.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
							<div class="filterable-item north-america">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-1.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
							<div class="filterable-item europe">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-2.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
							<div class="filterable-item australia">
								<article class="offer-item">
									<figure class="featured-image">
										<img src="dummy/offer-thumbnail-3.jpg" alt="">
									</figure>
									<h2 class="entry-title"><a href="#">Efficitur efficitur convallis</a></h2>
									<p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
									<div class="price">
										<strong>$2900</strong>
										<small>/10 days</small>
									</div>
								</article>
							</div>
						</div>

						<div class="pagination wow fadeInUp">
							<span class="page-numbers current">1</span>
							<a href="#" class="page-numbers">2</a>
							<a href="#" class="page-numbers">3</a>
							<a href="#" class="page-numbers">4</a>
						</div>

						-->
					</div>

				</div>

				
			</main> <!-- .content -->

			<?php include "footer.php";?>
		
	</body>

</html>