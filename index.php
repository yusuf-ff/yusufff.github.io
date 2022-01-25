<?php include 'include/header.php'; ?>

<?php  


	$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:idd");
	$anasayfa->execute(["idd" => 1]);
	$anasayfaRow = $anasayfa->fetch(PDO::FETCH_OBJ);

?>


				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><?= $anasayfaRow->yazı1 ?></h2>
								<p><?= $anasayfaRow->yazı2 ?></p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Beni Yakından Tanıyın</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Çalışmalarım</h2>
							</header>

							<p> Buraya sertifika vs şov yapacağımız şeyler gelecek ama dinamik olsa güzel olur admin paneline cCc.php sayfası açabiliriz.</p>

<?php 

$calismalarim = $db->query("SELECT * FROM calismalar")->fetchAll(PDO::FETCH_OBJ);

?>




							<div class="row"> 
								<?php  

								foreach ($calismalarim as $row){	

								?>
								<div class="4u 12u$(mobile)">
			<article class="item">
			<a href="detay.php?id=<?= $row->id ?>" class="image fit"><img src="assets/upload/<?= $row->resim ?>" alt="" height="200"/></a>
										<header>
											<h3><?= $row->baslik ?></h3>
										</header>
									</article>
								</div>
								<?php } ?>
									
							</div>

						</div>
					</section>

<?php 

$hakkimizda = $db->prepare("SELECT * FROM hakkimda WHERE id=:id");
$hakkimizda-> execute(["id" => 1]);
$hakkimdaRow = $hakkimizda->fetch(PDO::FETCH_OBJ);

?>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Hakkımda</h2>
							</header>

							<a href="#" class="image featured"><img src="assets/upload/<?= $hakkimdaRow->resim ?>" alt="" height="400" /></a>

							<p><?= $hakkimdaRow->yazi ?></p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>İletişim</h2>
							</header>

							<p>Lütfen bana ulaşın.</p>

							<form method="POST" action="">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="adSoyad" placeholder="Adınız Soyadınız" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="posta" placeholder="Email Adresiniz" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Mesajınız"></textarea>
									</div>
									<div class="12u$">
										<button type="submit" name="bilgiler">Gönder</button>
									</div>
								</div>
							</form>


			</div>
		 </section>

<?php 
if (isset($_POST['bilgiler'])) {




$kaydet = $db->prepare("INSERT into iletisim SET 

	isim=:isim,
	mail=:mail,
	mesaj=:mesaj,
	durum=:durum


	");
$insert=$kaydet->execute(array(	
	'isim'=> $_POST['adSoyad'],
	'mail'=>$_POST['posta'],
	'mesaj'=>$_POST['message'],
	'durum'=>0
));


if ($kaydet) {


                        	echo "Mesajınız başarıyla gönderildi";
                        	header("Refresh:3; URL=http://localhost/portfolio/index.php#contact"); 
                        }else{
                          echo "Hata oluştu";
 
        } 
     } 

    ?>
		<?php include 'include/footer.php'; ?>