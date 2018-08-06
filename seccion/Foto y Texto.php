<div class="enigma_blog_area ">
 
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xs-12">
				<img src="/img/600_<? echo $seccion['foto']; ?>" class="img-responsive" alt="<? echo $seccion['titulo']; ?>" >
				<div class="enigma_slider_shadow"></div>
			</div>
			<div class="col-lg-6 col-xs-12">
		<? if ($seccion['titulo'] || $seccion['subtitulo']) { ?>
			<div class="enigma_heading_title">
				
					<h3><? echo $seccion['titulo']; ?></h3>		
					<h4><? echo $seccion['subtitulo']; ?></h4>
				</div>
			<? } ?>
				<p>
					<? echo $seccion['descripcion']; ?>
				</p>	
			
			</div>
		</div>
	</div>
	
	
</div>