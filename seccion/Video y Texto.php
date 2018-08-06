 <!-- enigma_blog_area -->
<div class="enigma_blog_area">
 
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="embed-container">
				<iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/<? echo $seccion['video']; ?>?autoplay=1&rel=0&modestbranding=1&controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			 
        </div>
				<div class="enigma_slider_shadow"></div>
			</div>
			<div class="col-lg-6">
				<h3>
					<? echo $seccion['titulo']; ?>
				</h3>
				
				<h5><? echo $seccion['subtitulo']; ?></h5>
					<? echo $seccion['descripcion']; ?>
			
			</div>
		</div>
	</div>
	
	
</div>

<style>
.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;
}	img{max-width:100%; height:auto;}
.embed-container iframe { position: absolute; top:0; left: 0; width: 100%; height: 100%;
} #wrapper{	background: #ffffff;
}
</style>