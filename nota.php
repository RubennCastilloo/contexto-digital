<?php 
	include 'layout/header-nota.php';

	$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
		// header('Location: ../');
		echo 'No hay notas';
        
    }
    $respuesta = obtenerNotaId($id);
    $nota = $respuesta->fetch_assoc();
?>
	
	
	<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Inicio<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10" href="./estado">Estado<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10 color-ash" href="#"><?php echo ($nota['titulo']) ? $nota['titulo'] : ''; ?></a>
		</div><!-- container -->
	</section>
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<img src="images/slider-1-1200x900.jpg" alt="">
					<h3 class="mt-30"><b><?php echo ($nota['titulo']) ? $nota['titulo'] : ''; ?></b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li>Por <a href="#"><b><?php echo ($nota['autor']) ? $nota['autor'] : ''; ?> </b></a> <?php echo ($nota['fecha']) ? $nota['fecha'] : ''; ?></li>
					</ul>
					
					<?php 
						echo ($nota['contenido']) ? $nota['contenido'] : '';
					?>
					
					<div class="float-left-right text-center mt-40 mt-sm-20">
				
						
						<ul class="mb-30 list-a-bg-grey list-a-hw-radial-35 list-a-hvr-primary list-li-ml-5">
							<li class="mr-10 ml-0">Compartir</li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						</ul>
						
					</div><!-- float-left-right -->
				
					<div class="brdr-ash-1 opacty-5"></div>
					
					<h4 class="p-title mt-50"><b>NOTAS RECIENTES</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="images/crypto-news-2-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images/crypto-news-1-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					
			</div><!-- row -->
			
		</div><!-- container -->
	</section>
	
	
<?php 
	include 'layout/footer-nota.php';
?>