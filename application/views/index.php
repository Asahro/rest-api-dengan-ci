<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/themes/images/images.ico" />
		<link rel="Publisher" href="https://plus.google.com/105817133866690587935">

		<?php $url_Aktif 	= $_SESSION["Alamat"]; ?> 
		<?php $Keywords 	= ucwords($_SESSION["Keywords"]); ?>
		<?php $Tittle 		= ucwords($_SESSION["Tittle"]); ?>
		<?php $Description 	= $_SESSION["Description"]; ?>
		<?php $Artikel 		= $_SESSION["Artikel"]; ?>

		<title><?php echo $Tittle; ?></title>
		
		<!-- Data Halaman -->
		<meta name="keywords" 					content="<?php echo $Keywords; ?>" />
		<meta name="description" 				content="<?php echo $Description; ?>"/>
		<link rel="canonical" 					href="<?php echo $url_Aktif; ?>" />

		<!-- Robot -->
		<meta name="generator" 					content="CodeIgniter 3.1.2" />
		<meta name='googlebot'					content='index, follow, snipet'/>
		<meta name="google" 					content="notranslate" />
		<meta name="robots" 					content="index, follow">
		<meta name="expires" 					content="never"/>
		<meta name="revisit" 					content="1 days"/>
		<meta name="revisit-after" 				content="1 days"/>
		<meta name="googlebot" 					content="index, follow, snipet"/>
		<meta name="googlebot-image" 			content="follow, all"/>
		<meta name="scooter"					content="follow, all"/>
		<meta name="msnbot" 					content="follow, all"/>
		<meta name="alexabot" 					content="follow, all"/>
		<meta name="slurp" 						content="follow, all"/>
		<meta name="zyborg" 					content="follow, all"/>
		<meta name="scooter" 					content="follow, all"/>
		<meta name="spiders" 					content="all"/>
		<meta name="webcrawlers" 				content="all"/>
		<meta name="audience" 					content="all"/>
		<meta name="MSSmartTagsPreventParsing" 	content="true"/>
		<meta name="search engines" 			content="aeiwi, alexa, alltheWeb, altavista, aol netfind, anzwers, canada, directhit, euroseek, excite, overture, go, google, hotbot. infomak, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, Websmostlinked, webtop, what-u-seek, aol, yahoo, webcrawler, infoseek, excite, magellan, looksmart, bing, cnet, googlebot"/>


		<!-- Keterangan Web -->
		<meta name="rating" 					content="general"/>
		<meta name="language" 					content="id"/>
		<meta name='DC.Language'				content='en,id,ar,uk'/>
		<meta name="DC.Title" 					content="A Dirge"/>
		<meta name="content-languange" 			content="indonesia" />
		<meta name="author" 					content="Ahmad Sahro" />
		<meta name="subject" 					content="<?php echo $Tittle; ?>"/>
		<meta name="distribution" 				content="global"/>
		<meta name="copyright" 					content="2016, Toko Timbangan"/>
		<meta name="geo.region" 				content="ID-JK" />
		<meta name="geo.placename" 				content="Jakarta Barat" />
		<meta name="geo.position" 				content="-6.190071; 106.79719" />
		<meta name="ICBM" 						content="-6.190071, 106.79719" />
		<meta name="geo.country" 				content="id"/>

		<!-- Bagian Twiter, Perbaiki konten harus otomatis berubah berdasarkan halaman -->
		<meta name="twitter:card" 				content="summary_large_image" />
		<meta name="twitter:title" 				content="<?php echo $Tittle; ?>" />
		<meta name="twitter:description" 		content="<?php echo $Description; ?>" />
		<meta name="twitter:image" 				content="http://tokotimbangan.id/assets/themes/images/logo.png" />
		<meta name='twitter:site'				content='@ahmadsahro' />
		<meta name='twitter:creator'			content='@ahmadsahro' />
		<meta name='twitter:url'				content='<?php echo $url_Aktif; ?>'/>
		<meta name='twitter:domain'				content='http://www.tokotimbangan.id'/>

		<!-- Bagian FB, Perbaiki konten harus otomatis berubah berdasarkan halaman -->
		<meta property="fb:app_id"             	content="600641096797896" />
		<meta property="og:locale" 				content="en_US" />
		<meta property="og:type" 				content="website" />
		<meta property="og:title" 				content="<?php echo $Tittle; ?>" />
		<meta property="og:description" 		content="<?php echo $Description; ?>"/>
		<meta property="og:url" 				content="<?php echo $url_Aktif; ?>" />
		<meta property="og:site_name" 			content="Toko Aneka Timbangan Digital" />
		<meta property="og:image"              	content="http://tokotimbangan.id/assets/themes/images/logo.png" />

		
		<!-- Verificatian Tag -->
		<meta name="google-site-verification" content="ZHCrbXHZN9kmLuxoO-bPl-5XoT7K5S_bMuG_8UU6RQE" />
		<meta name="yandex-verification" content="257b440d38543b07" />
		<meta name="msvalidate.01" content="2AFC0474E3D146A5B81AB684A9424049" />
		<meta name="norton-safeweb-site-verification" content="pixq4zi8a5dimqrzw3s24rbizqtqw0aap9-ug6b-8w7q8py53xrly2dhxv4-e5779oenbcirqahw41dopzr4eas84dgq16sbndcc06ce0aqhav449xno-uh3i8bygt-q" />
		<meta name="p:domain_verify" content="b0d0e6010c8cc6be7ebb0c3bbd1befd6"/>






 <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "ElectronicsStore",
  "name": "Ahmad Sahro",
  "url": "<?php echo $url_Aktif; ?>",
  "logo": "https://www.tokotimbangan.id/assets/themes/images/logo.png",
  "image": "https://www.tokotimbangan.id/slider/CUBIX-slide.jpg",
  "description": "Toko Timbangan adalah tempat jual timbangan digital dan mekanik dari berbagai jenis. Biasanya Disebut Toko Timbangan Digital",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jl. Palmerah utara 3  no 1A  ",
    "addressLocality": "Jakarta Barat",
    "addressRegion": "Jakarta",
    "postalCode": "11420",
    "addressCountry": "Indonesia"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "-6.190071",
    "longitude": "106.79719"
  },
  "hasMap": "https://www.google.com/maps/place/Altraman.+PT/@-6.2021373,106.7920065,16.61z/data=!4m12!1m6!3m5!1s0x2e69f6becbccfcb9:0x8b33ff4540d2a4b!2sAltraman.+PT!8m2!3d-6.2036574!4d106.7928262!3m4!1s0x2e69f6becbccfcb9:0x8b33ff4540d2a4b!8m2!3d-6.2036574!4d106.7928262",
  "openingHours": "Mo, Tu, We, Th, Fr 08:30-17:00 Sa 08:30-12:30",
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service"
  },
  "aggregateRating": {
    "ratingValue": "5",
    "reviewCount": "34"
  }
}
 </script>













		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
		<!-- global styles -->
		<link href="<?php echo base_url(); ?>assets/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/themes/css/main.css" rel="stylesheet"/>

		<!-- awesome font -->
		<link href="<?php echo base_url(); ?>assets/themes/css/awsome font.css" rel="stylesheet"/>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-87774245-3', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<!-- scripts -->
		<script src="<?php echo base_url(); ?>assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?php echo base_url(); ?>assets/themes/js/superfish.js"></script>	
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="<?php echo base_url(); ?>assets/themes/js/respond.min.js"></script>
		<![endif]-->


	</head>

    <body>		
<style type="text/css">
#atur {
	font-size: 16px;
	margin: 0 0 0 0;
	line-height: 2; 
}
</style>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58afec046b2ec15bd9f00091/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				

		                  <!-- AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<a class="a2a_button_pinterest"></a>
							<a class="a2a_button_linkedin"></a>
							</div>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->
						</ul>
					</div>
				</div>	
		              </ul>
					</div>
				</div>	
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url(); ?>" class="logo pull-left" title="Home"><img src="<?php echo base_url(); ?>assets/themes/images/logo.png" class="site_logo" alt="Logo Toko Timbangan" title="Logo Toko Timbangan"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url(); ?>" title="Home">Home</a></li>
							<li><a href="#">Jenis Timbangan</a>
								<ul>		
								<?php 
								foreach ($_SESSION['subproduk2'] as $bismillah3) { ?>
		                        	<li><a  href="<?php echo base_url(); ?>menu/produk/daftar-harga-timbangan-digital/<?php echo strtolower(str_replace(" ", "-", $bismillah3['Suproduk2'])); ?>" title="<?php echo $bismillah3['Suproduk2']; ?>"><?php echo $bismillah3['Suproduk2']; ?></a></li>
								<?php }?>
								</ul>
							</li>							
							<li><a href="<?php echo base_url(); ?>menu/produk/harga-timbangan-digital" title="Terlaris">Terlaris</a></li>
							<li><a href="<?php echo base_url(); ?>menu/kontak/distributor-timbangan-digital" title="Kontak">Kontak</a>
							</li>
							<li><a href="#" title="Artikel">Artikel</a></li>
							<li><a href="#" title="Galeri">Galeri</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo base_url(); ?>slider/CUBIX-slide.jpg" title="Gambar Timbangan Cubix" alt="Gambar Timbangan CUBIK"  />
						</li>
						<li>
							<img src="<?php echo base_url(); ?>slider/RHINOX-slide.jpg" title="Gambar Timbangan Rhino" alt="Gambar Timbangan RHINO"  />
							<!--<div class="intro">
								<h1>Mid season sale</h1>BBBD4AAB697744B5
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
							-->
						</li>
					</ul>
				</div>			
			</section>
			<H1 id="atur" style="color : white;"><?php echo $Tittle; ?></H1>
			<section class="main-content">
				<div class="row">
					<div class="span12">

					<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="<?php echo base_url(); ?>assets/themes/images/feature_img_2.png" alt="Teknologi Terbaru" title="Teknologi Terbaru" />
										<h4>TEKNOLOGI <strong>TERBARU</strong></h4>
										<p>Setiap produk Toko Timbangan Digital dibuat menggunakan teknologi tingkat tinggi sehingga menghasilkan produ yang berkualitas.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="<?php echo base_url(); ?>assets/themes/images/feature_img_1.png" alt="Gratis Tera" title="Gratis Tera" />
										<h4>GRATIS <strong>TERA</strong></h4>
										<p>Semua produk yang Toko Timbangan Digital jual telah melalui proses tera yang diwajibkan oleh pemerintah sehingga client tidak perlu lagi tera.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="<?php echo base_url(); ?>assets/themes/images/feature_img_3.png" alt="Bantuan Langsung" title="Bantuan Langsung" />
										<h4>24/7 BANTUAN <strong>LANGSUNG</strong></h4>
										<p>Jika ada masalah dengan timbangan Toko Timbangan Digital client bisa langsung menanyakannya melalui livechat group ini.</p>
									</div>
								</div>
							</div>	
						</div>

						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Produk <strong>Terlaris</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel2" data-slide="prev"></a><a class="right button" href="#myCarousel2" data-slide="next"></a>
									</span>

								</h4>
								<div id="myCarousel2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<?php 
							                       $s = -1;
							                       foreach ($_SESSION['produk best saller'] as $bismillah3) { 
							                        $s = $s + 1; 
													if ($s < 8 ){  ?>
														<li class="span3">
															<div class="product-box">
																<span class="sale_tag"></span>
																	<p><a  href="<?php echo base_url(); ?>menu/produk/data-lengkap/harga-<?php echo strtolower(str_replace(" ", "-", $bismillah3['Category'])); ?>-merek-<?php echo strtolower(str_replace(" ", "-", $bismillah3['Type'])); ?>" class="title" title="<?php echo $bismillah3['Category']." Merek ".$bismillah3['Type']; ?>"><img src="<?php echo base_url()."Pic 1/".$bismillah3['Pic_1']; ?>" title="Gambar Timbangan <?php echo $bismillah3['Type']; ?>" alt="Gambar Timbangan <?php echo $bismillah3['Type']; ?>" tag="<?php echo $Keywords; ?>"/></a></p>
																	<a  href="<?php echo base_url(); ?>menu/produk/data-lengkap/harga-<?php echo strtolower(str_replace(" ", "-", $bismillah3['Category'])); ?>-merek-<?php echo strtolower(str_replace(" ", "-", $bismillah3['Type'])); ?>" class="title" title="<?php echo $bismillah3['Category']." Merek ".$bismillah3['Type']; ?>"><?php echo $bismillah3['Type']; ?></a><br/>
																	<a  href="<?php echo base_url(); ?>menu/produk/harga-timbangan/<?php echo "harga-".strtolower(str_replace(" ", "-", $bismillah3['Category'])); ?>" class="category" title="Gambar <?php echo $bismillah3['Category']; ?>"><?php echo str_replace(" - ", "<br>", $bismillah3['Category']); ?></a>
																	<p class="price">Rp. <?php echo $bismillah3['Harga']; ?></p>
															</div>
														</li>
													<?php if ($s%4 == 3 &&  $s != 7 ){  ?>
															</ul>
														</div>
														<div class="item">
															<ul class="thumbnails">
													<?php }?>
												<?php } } ?>												
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						

					</div>				
				</div>
			</section>
			
			<section class="header_text" style="text-align: justify;">
				</br>
				<H2 id="aturi" >Toko Timbangan Digital</H2>				
				<p>Toko Timbangan Digital adalah sebuah toko online yang menjual berbagai produk timbangan dari Berbagai Perusahaan Penyedia Lain. </p>  
				<H2 id="aturi" >Produk Unggulan</H2>
				<p>Produk - produk yang dimiliki oleh Toko Timbangan Digital merupakan produk - produk berkualitas tinggi dengan garansi satu tahun. Produk Toko Timbangan Digital meliputi semua tumbangan yang digunakan dalam kehidupan. Mulai dari timbangan industri seperti jembatan timbang dan timbangan meja, timbangan pergudangan seperti timbangan duduk, dan masih banyak lagi.</p>
				<H2 id="aturi" >Bentuk Pelayan</H2>
				<p>Toko Timbangan Digital melayani berbagai macam pembelian mulai dari penjual produk yang sudah ada seperti timbangan kue, timbangan gantung, timbangan ikan, dan lainnya. Toko Timbangan Digital juga melayani pemesanan costum seperti Timbangan jembatan dengan koneksi wireless, timbangan yang sanggup mengukur tinggi barang, timbangan yang mampu mencetak dan lain sebagainya.</p>
				
			</section>
			



			<!--
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			-->
			
			<iframe data-aa='737907' src='//ad.a-ads.com/737907?size=120x60' scrolling='no' style='width:120px; height:60px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>

			<section id="copyright">
				<a href="http://www.bimbelan.com" title="Bimbelan">Bimbelan</a>
			</section>

		</div>
		<script src="<?php echo base_url(); ?>assets/themes/js/common.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
<style type="text/css">
#aturi {
	font-size: 16px;
	margin: 0 0 0 0;
	line-height: 2; 
}
</style>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://tokotimbangan.id",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+62-819-0605-8312",
    "contactType": "customer service"
  }]
}
</script>