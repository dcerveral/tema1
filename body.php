 
			<div class="row isotope "  >
<?
//RUTA
 
	//COLUMNA IZQUIERDA
				if ($col_left > 0){
					echo "<div class='col-md-".$col_left."' padtop>";
					
					//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='left' AND activo='1' AND (lugar='todo' OR lugar='".$campo['tipo']."s') ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
				<div class="scrollimation fade-right">
					
				
					<h3>
						<? echo $widget ['titulo']; ?>
						</h3>
				 
						<? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
			 </div>
					<?  
						 
						 
						
					}
					
					
					echo "</div>";
				}
		
	//columna CENTRAL
		 		//MOSTRAMOS SOLO 
			 
					
				if ($col_center!=12) { echo "<div class='col-md-".$col_center."'>";}
					
						//Categorias
						if ($campo['tipo']=="categoria" || $_GET['TIPO']) {include ('categorias.php');}
				
						//Contenido
						elseif ($campo['id']) {
							
								//Pagina avanzada
								if ($campo['subtipo']=="avanzada"){
									
									 $consultasec="SELECT * FROM contenido WHERE tipo='seccion' AND activo='1' AND superior='".$campo['id']."' ORDER BY orden ;"	;	
								 
								$sqlsec=mysqli_query($conex,$consultasec);
									while ($seccion=mysqli_fetch_array($sqlsec)){
										
										 
									include ('seccion/'.$seccion ['subtipo'].'.php'); 
										//	echo $seccion['subtipo'];
									}
									
								}else {
								//Pagina sencilla y otros contenidos
									if ($campo['tipo']=="entrada" ){
									echo ' 
									<div class="col-lg-4 padtop">
									<img src="/img/600_'.$campo['foto'].'" class="img-responsive " alt="'.$seccion['titulo'].'" ><div class="enigma_slider_shadow"></div>
									</div>
										<div class="col-lg-8 padtop padd">';
									if ($campo['subtitulo']){
												//echo "<h1>".$campo['titulo']."</h1>";
												echo "<h3>".$campo['subtitulo']."</h3>";
										}
												echo $campo['descripcion'];
									
									echo ' </div><div class="col-lg-12">&nbsp;<br>&nbsp;</div>';
										
									} else {
										echo '<div class="container"><div class="col-lg-12 padtop padd">';
									if ($campo['subtitulo']){
												//echo "<h1>".$campo['titulo']."</h1>";
												echo "<h3>".$campo['subtitulo']."</h3>";
										}
												echo $campo['descripcion'];
									
									echo ' </div><div class="col-lg-12">&nbsp;<br>&nbsp;</div></div>';
										
									}
								}
							
							
							
							
							
						}
				
						//elseif ($_GET['TIPO']){include ('categorias.php');}
				
						//Buscador
						else {  include ('buscar.php');}
				
				
			 
					
				if ($col_center!=12) { 	echo "</div>";}
			 

	//COLUMNA DERECHA
				if ($col_right > 0){
					echo "<div class='col-md-".$col_right." padtop'>";
					
					//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='right' AND activo='1' AND (lugar='todo' OR lugar='".$campo['tipo']."s')  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
				<div  >
					
				
					<h3>
						<? echo $widget ['titulo']; ?>
						</h3>
				 
						<? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
			 </div>
		<? } } ?>
	</div>
 
</div></div>