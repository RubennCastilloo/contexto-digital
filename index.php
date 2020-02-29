<?php 
	include 'layout/header.php';
	include 'admin/php/functions.php';
?>
	
	
	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
				<?php $publicidades = obtenerNotaNumero(1);
                if ($publicidades->num_rows) {
                     foreach($publicidades as $publicidad) { ?>
					<a class="pos-relative h-100 dplay-block" href="./nota.php?id=<?php echo $publicidad['id']; ?>">
						<div class="bg-1 bg-grad-layer-6">
							<img src="admin/img/notas/<?php echo $publicidad['imagen']; ?>" alt="">
						</div>
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b><?php echo $publicidad['titulo']; ?></b></h3>
							<ul class="list-li-mr-20">
								<li>by <span class="color-primary"><b><?php echo $publicidad['autor']; ?></b></span> <?php echo $publicidad['fecha']; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
					<?php
                  }
                }
              ?>
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				<?php $notas = obtenerUltimasNotas(2);
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="./nota.php?id=<?php echo $nota['id']; ?>">
						
							<div class="img-bg bg-2 bg-grad-layer-6">
								<img src="admin/img/notas/<?php echo $nota['imagen']; ?>" alt="">
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php echo $nota['titulo']; ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php echo $nota['fecha']; ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
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
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>NOTICIAS RECIENTES</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="images/recent-news-1-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>30,190</b></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>47</b></li>
							</ul>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-30"><b>CRYPTO MINING NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="images/crypto-news-6-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images/crypto-news-5-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
					
						<div class="col-sm-6">
							<img src="images/crypto-news-4-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="images/crypto-news-3-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
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
					
					<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE CRYPTO MINING EVENTS</b></a>
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Publicidad</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Contratar Espacio</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Suscribete a nuestros Newsletter para recibir las últimas noticias más relevantes.</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Tu Email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
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