<?php 
	include '../admin/php/functions.php';
	include '../layout/header-nota-sub.php';

	$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
		header('Location: ./');
        
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
					<img src="../admin/img/notas/<?php echo $nota['imagen'] ? $nota['imagen'] : ''; ?>" alt="">
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
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						</ul>
						<div class="mtb-50 pos-relative mr-5">
							<img src="../images/banner-1-600x450.jpg" alt="" class="ajustar-imagen">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
					</div><!-- float-left-right -->
				</div>
				<div class="col-md-6 col-lg-4">
						
						<div class="mtb-50 pos-relative">
							<img src="../images/banner-1-600x450.jpg" alt="" class="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->

						<div class="mtb-50 pos-relative">
							<img src="../images/banner-1-600x450.jpg" alt="" class="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->

						<div class="mtb-50 pos-relative">
							<img src="../images/banner-1-600x450.jpg" alt="" class="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->


				
				
					<div class="brdr-ash-1 opacty-5"></div>
					<div class="col-md-12 col-lg-8">
					<h4 class="p-title mt-50"><b>NOTAS RECIENTES</b></h4>
					<div class="row">
					<?php $notas = obtenerNotaNumero(2);
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
					
						<div class="col-md-6 text-center">
							<img class="ajustar-imagen" src="../admin/img/notas/<?php echo $nota['imagen']; ?>" alt="">
							<h4 class="pt-20 text-left"><a href="../<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>"><b><?php echo ($nota['titulo'])?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black text-left">Por <a href="#" class="color-black"><b><?php echo $nota['autor']; ?>,</b></a>
								<?php echo $nota['fecha']; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						<?php
                  }
                }
              ?>
					</div><!-- row -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
<?php 
	include '../layout/footer-nota-sub.php';
?>