<div class="enigma_project_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3>Buscar</h3><h4> <? echo $_POST['s']; ?></h4>		.
				</div>
			</div>
		</div>
	</div> 
 
 <div class="container">
	 

<?
$consultas="SELECT *,MATCH (titulo,subtitulo,description) AGAINST ('%".$_POST['s']."%') AS ORDENAR FROM contenido WHERE  activo='1' AND (tipo='pagina' OR tipo='producto' OR tipo='entrada' OR tipo='categoria' ) AND MATCH (titulo,subtitulo,description) AGAINST ('%".$_POST['s']."%' WITH QUERY EXPANSION)  ORDER BY ORDENAR DESC, orden , act DESC LIMIT  100; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
 ?>
				<div class="col-md-4 col-sm-12  scale-in d2 pull-left"  > 
			<div class="enigma_blog_thumb_wrapper" style="width:100%;height:300px;overflow:hidden;">
				<div class="enigma_blog_thumb_wrapper_showcase">					
										<div class="enigma_blog_thumb_wrapper_showcase_overlay">
						<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
							<div class="enigma_blog_thumb_wrapper_showcase_icons">
								<a  ><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<h2><a href="/<? echo $contenido['slug']; ?>"><? echo $contenido['titulo']; ?></a></h2>
				<h5><a href="/<? echo $contenido['tipo']; ?>"><? echo ucfirst($contenido['tipo']); ?></a></h5>
								<p><? echo $contenido['description']; ?>.</p>
				<div class="enigma_blog_thumb_footer" style="position:absolute; bottom:0px;right:0px;">

				<a href="/<? echo $contenido['slug']; ?>"  > Leer más... &nbsp; &nbsp; </a>
				</div>
					</div>
			</div>
		 
						
		<? }
				
			 if ($a==0){ 
				  echo '	<div class="container"  ><blockquote>No encuento nada aquí, intente buscar otra palabra:</blockquote>  
  <div class="row justify-content-center"><div class="col-lg-6 offset-lg-3" style="float:right">';
				 
				 
				 include('widgets/Buscador.php');
				 echo "</div></div></div>";
				 }
				
				?>		
</div>
	</div>