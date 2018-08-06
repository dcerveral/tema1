 
<div class="enigma_blog_area ">
 
	
	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6 col-xs-12">
			
				<? if ($seccion['titulo'] || $seccion['subtitulo']) { ?>
				 <h3>
					<? echo $seccion['titulo']; ?>
				</h3>
				
				<h5><? echo $seccion['subtitulo']; ?></h5>
				 <? } ?>
					<? echo $seccion['descripcion']; ?>
			
			</div>
			
			<div class="col-lg-6 col-xs-12">
				<img src="/img/600_<? echo $seccion['foto']; ?>" class="img-responsive" alt="<? echo $seccion['titulo']; ?>" ><div class="enigma_slider_shadow"></div>
			</div>
		</div>
	</div>
	
	
</div>