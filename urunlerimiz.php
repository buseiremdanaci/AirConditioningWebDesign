<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
	$(document).ready(function() {
	  var owl = $('.owl-carousel');
	  owl.owlCarousel({
		margin: 10,
		//nav: true,
		loop: true,
		responsive: {
		  0: {
			items: 1
		  },
		  600: {
			items: 1
		  },
		  1000: {
			items: 1
		  }
		}
	  })
	})
 $ (document) .ready (function () {
            $ (window) .scroll (function () {
                if ($ (this) .scrollTop ()> 200) {
                    $ ('.menu').addClass ('sabitleme');
                } else {
                    $('.menu').removeClass('sabitleme');
                }
            });
        });

</script>
<title>Home</title>
</head>
<body>
<div class="menu">
	<nav class="ui menu navbar navbar-expand-lg navbar navbar-dark bg-dark ">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<p class="navbar-toggler-icon"></p>
	  </button>
	  <a class="navbar-brand" href="Anasayfa.html">AIR</a>
	  <nav class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			  <li class="nav-item active">
				<a class="nav-link" href="Anasayfa.html">Anasayfa<a class="sr-only">(current)</a></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="urunlerimiz.php">Ürünlerimiz</a>
			  </li>
				<li class="nav-item">
				<a class="nav-link" href="hakkimizda.html">Hakkımızda</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="iletisim.html">İletişim</a>
			  </li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0 gcse-search" type="submit">Ara</button>
			</form>
	  </nav>
	</nav>
	</div>
			<nav class="col-md-12 buttons">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uyegiris" style="background-color: #1c7430;width: 150px">
					Üye Giriş
				</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kayitol" style="background-color: #1c7430;width: 150px">
					Kayıt Ol
				</button>
			</nav>
			<nav class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Kayıt Ol</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="kaydet.php" method="POST">
								<label>Ad Soyad</label>
								<input class="form-control" type="text" name="kadi">
								<label>Mail Adresi</label>
								<input class="form-control" type="email" name="mail">
								<label>Telefon</label>
								<input class="form-control" type="number" name="tel">
								<label>Adres</label>
								<input class="form-control" type="text" name="adres">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<button type="submit" class="btn btn-success">Kayıt Ol</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</nav>

			<!-- Modal -->
			<div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Üye Giriş</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="giris.php" method="POST">
								<label>Kullanıcı Adınız</label>
								<input class="form-control" type="text" name="kadi">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<button type="submit" class="btn btn-primary">Giriş Yap</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
            </div>

<?php
include("ayar.php");

$sorgu=$vt->prepare('SELECT *FROM urun');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.

?>
<article style="margin-top:40px; margin-bottom:40px;">
	  <div class="container-center">
	  <div class="col col-sm-12 col-md-12 col-lg-12 ">
		 <table class="table table-bordered table-striped" align="center">
<thead class="thead-dark" >
			<tr>
			 <td style='text-align:center;vertical-align:middle'><h5>MODEL NUMARASI</h5></td>
			 <td style='text-align:center;vertical-align:middle'><h5>ÜRÜN ADI</h5></td>
			 <td style='text-align:center;vertical-align:middle'><h5>GÖRSEL</h5></td>
			 </tr>
</thead>
			 <?php
			 foreach($personellist as $person){?>

			 	<tr>
			 	<td style='text-align:center;vertical-align:middle'><?= $person->model_no ?></td>
			 	<td style='text-align:center;vertical-align:middle'><?= $person->urun_adi ?></td>
			 	 <td style='text-align:center;vertical-align:middle'><img style="width: 350px;   height: 80px;" src=<?= $person->fotograf ?> /></td>

			    </tr>

			 <?php } ?>

			</table>
	  </div>
	  </div>
</article>
<footer class="container-fluid" id="altAlan">
    <div class="row">
		 <div class="col-sm-6 col-md-6 col-lg-3 col" >
		  <img src="images/logo.PNG" width="60px" height="60px">
		 </div>
		<div class="col-sm-6 col-md-6 col-lg-3 col" >
			<h5>Sayfalar</h5>
			<ul>
			  <li><a href="Anasayfa.html">Anasayfa</a></li>
			  <li><a href="urunlerimiz.php">Ürünlerimiz</a></li>
			  <li><a href="hakkimizda.html">Hakkımızda</a></li>
			  <li><a href="iletisim.html">İletişim</a></li>
			</ul>
    	</div>
        <div class="col-sm-6 col-md-6 col-lg-3 col" >
		   <h5>İletişim</h5></br>
				<h6>Adres</h6>
				<a>Yavuz Sultan Selim Mh. Mevlana Cd. No:192 A-4 Blok, KörfezKent 2.Etap Site Yönetimi Ofisi, 41780 Körfez/Kocaeli</a><br>
				<h6>Telefon Numarası</h6>
				<a>0(530) 651 98 41</a>
    	</div>
		<div class="col-sm-6 col-md-6 col-lg-3 col" >
		   <h5>Sosyal Medya</h5>
			<button onclick="window.location.href = 'https://www.instagram.com';" class="footer sosyal-button"><img src="images/instagram.png"></button>
			<button onclick="window.location.href = 'https://www.facebook.com';" class="footer sosyal-button"><img src="images/facebook.png"></button>
			<button onclick="window.location.href = 'https://www.youtube.com';" class="footer sosyal-button"><img src="images/youtube.png"></button>
			<button onclick="window.location.href = 'https://www.twitter.com';" class="footer sosyal-button"><img src="images/twitter.png"></button>
    	</div>

	</div>
</footer>
</body>
</html>
