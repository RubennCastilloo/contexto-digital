<?php 
	include 'layout/header.php';
	include 'admin/php/functions.php';
?>
	
	
	<div class="container-fluid">
		<div class="h-700x h-sm-auto pb-0 mb-0">
			<div class="h-3-4 h-sm-auto oflow-hidden pb-0 mb-0">
		
				
				<?php $notas = obtenerNotaNumero(1);
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="./<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>">
						<div class="bg-1 bg-grad-layer-6">
							<img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt="">
						</div>
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13 background-color-title"><b><?php echo $nota['titulo']; ?></b></h3>
							<ul class="list-li-mr-20 background-color-title">
								<li>Por <span class="color-primary"><b><?php echo $nota['autor']; ?></b></span> <?php echo $nota['fecha']; ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
					<?php
                  }
                }
              ?>
				
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				<?php $notas = obtenerUltimasNotas(2);
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="./<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>">
						
							<div class="bg-2 bg-grad-layer-6">
								<img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt="">
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="background-color-title"><b><?php echo $nota['titulo']; ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php echo $nota['fecha']; ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					<?php
                  }
                }
              ?>

					
					
				
		</div><!-- h-100vh -->
		</div><!-- container -->
	</div><!-- container -->
	</div>
	
	

	<section class="mt-0 pt-0">
		<div class="container">
			<div class="row">
			
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>NOTICIAS RECIENTES</b></h4>
					<div class="row">
					<?php $notas = obtenerNotaNumero(1);
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
						<div class="col-sm-6">
							<img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt="">
							<h4 class="pt-20"><a href="./<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>"><?php 
									$len = $nota['titulo'];
									if(strlen($len) <= 101) {
										 echo $nota['titulo']?>
									<?php } 
									else { 
										?>  <?php echo substr($nota['titulo'], 0, 100) . "..."; ?> 
									<?php }?></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">Por <a href="#" class="color-black"><b><?php echo $nota['autor']; ?></b></a>
								<?php echo $nota['fecha']; ?></li>
							</ul>
							
						</div><!-- col-sm-6 -->
						<?php
                  }
                }
              ?>
			  <div class="col-sm-6">
						<?php $notas = obtenerUltimasNotas(9);
						
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
							<a class="oflow-hidden pos-relative mb-2 dplay-block" href="./<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>">
								<div class="wh-100x abs-tlr"><img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<?php 
									$len = $nota['titulo'];
									if(strlen($len) <= 71) {
										?> <h5> <?php echo $nota['titulo']?> </h5>
									<?php } 
									else { 
										?> <h5> <?php echo substr($nota['titulo'], 0, 70) . "..."; ?> </h5>
									<?php }?>
									
									<h6 class="color-lite-black pt-10">Por <span class="color-black"><b><?php echo $nota['autor']; ?></b></span> <?php echo $nota['fecha']; ?></h6>
								</div>
							</a><!-- oflow-hidden -->
							<?php
                  }
                } else {
					echo 'Lo sentimos, no hay notas disponibles';
				}
              ?>
							
							
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-30"><b>LO MAS RELEVANTE</b></h4>
					<div class="row">

					<?php $notas = obtenerUltimasNotas(6);
						
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
					
						<div class="col-md-6 text-center">
							<img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt="" class="ajustar-imagen">
							<h4 class="pt-20 text-left"><a href="./<?php echo strtolower($nota['categoria'])?>/nota.php?id=<?php echo $nota['id']?>"><b><?php echo $nota['titulo']?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black text-left">Por <a href="#" class="color-black"><b><?php echo $nota['autor']; ?>,</b></a>
								<?php echo $nota['fecha']; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						<?php
                  }
                } else {
					echo 'Lo sentimos, no hay notas disponibles';
				}
              ?>
						
					</div><!-- row -->
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad 1</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->

						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad 2</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->

						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad 3</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Suscribete a nuestros Newsletter para recibir las últimas noticias más relevantes.</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Tu Email" id="newsletterEmail"/>
								<button id="newsletter-button"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>

	
	
<?php 
	include 'layout/footer.php';
?>