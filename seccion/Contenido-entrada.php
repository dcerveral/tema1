<!-- /portfolio section --><div class="enigma_blog_area ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><? echo $seccion['titulo']; ?></h3>		<h4><? echo $seccion['subtitulo']; ?></h4>
				</div>
			</div>
		</div>
	</div>
		<div class="container">	
	<div class="row" id="enigma_blog_section">
		
		
		
		<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden , act DESC LIMIT  ".$seccion['array3'].";; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;$b++;
 ?>
				<div class="col-lg-4 col-sm-12  scrollimation  d2 pull-left"  > 
			<div class="enigma_blog_thumb_wrapper"  >
				<img src="/img/600_<? echo $contenido['foto']; ?>" class="responsive-img" alt="<? echo $contenido['titulo']; ?>">
				<div class="enigma_blog_thumb_wrapper_showcase">					
						
			 
				<br>
				<h2><a href="/<? echo $contenido['slug']; ?>"><? echo $contenido['titulo']; ?></a></h2>
								<p><? echo $contenido['description']; ?>.</p>
				<div class="enigma_blog_thumb_footer" style="position:absolute; bottom:0px;right:0px;">

				<a href="/<? echo $contenido['slug']; ?>"  > Leer más... </a>
				</div>
					</div>
			</div>
		</div>
						
		<?
			if ($b==2){$b=0;echo "<div style='clear:both;'></div>";}
		
		}
				
				if ($a==0){include ('buscar.php'); }
				
				?>						
						
						
					
	</div>
	
	</div>
	<div class="enigma_carousel-navi">
				<div id="port-next" class="enigma_carousel-prev" ><i class="fa fa-angle-left"></i></div>
				<div id="port-prev" class="enigma_carousel-next" ><i class="fa fa-angle-right"></i></div>
	</div>
	<div>
		&nbsp;<p
	</div>
</div>




