<!-- Footer Widget Secton -->





		<div class="enigma_footer_widget_area" style="background-color:<? echo $conf['secundario']; ?>;position:relative; top:60px;">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-lg-3  enigma_footer_widget_column">
						
						<?	//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='footer-uno' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 
					<div class="enigma_footer_widget_title"> <span ><? echo $widget ['titulo']; ?></span>
							
						</div>
						 <? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
				 
				
					 
						
					 
				 
						
						<? } ?>
				</div>
						
					 <div class="col-md-3 col-sm-6 col-lg-3 enigma_footer_widget_column">
						
						<?	//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='footer-dos' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 
					<div class="enigma_footer_widget_title"> <span ><? echo $widget ['titulo']; ?></span>
							
						 
						</div>
						 <? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
				 
				
					 
						
					 
				 
						
						<? } ?>
				</div>
					
					<div class="col-md-3 col-sm-6 col-lg-3 enigma_footer_widget_column">
						
						<?	//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='footer-tres' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 
					<div class="enigma_footer_widget_title"> <span ><? echo $widget ['titulo']; ?></span>
							 
						</div>
						 <? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
				 
				
					 
						
					 
				 
						
						<? } ?>
				</div>
					
						<div class="col-md-3 col-sm-6 col-lg-3 enigma_footer_widget_column">
						
						<?	//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='footer-cuatro' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 
					<div class="enigma_footer_widget_title"> <span ><? echo $widget ['titulo']; ?></span>
							 
						</div>
						 <? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
				 
						
						<? } ?>
				</div>
				</div>
			</div>
		</div>



		<div class="enigma_footer_area" style="position:relative; top:60px;">
			<div class="container">
				<div class="col-md-12">
					<p class="enigma_footer_copyright_info wl_rtl">
						© <? echo date('Y'); ?>   <a style="color:white;" href="https://esepress.com" class="white">esepress.com</a></p>
					<div class="enigma_footer_social_div">
						<ul class="social">
							<? if ($conf['phone']) { ?>
							<li class="twitter" data-toggle="tooltip" data-placement="top" title="Telefono"><a href="tel:<? echo $conf['phone']; ?>"><i class="fa fa-phone"></i></a></li>
							<? } ?>
								<? if ($conf['email']) { ?>
							<li class="youtube" data-toggle="tooltip" data-placement="top" title="Correo"><a href="mailto:<? echo $conf['email']; ?>"><i class="fa fa-envelope-o"></i></a></li>
								<? } ?>
							<? if ($conf['facebook']) { ?>
							<li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="<? echo $conf['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
							<? } ?>
							
							
							<? if ($conf['twitter']) { ?>
							<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<? echo $conf['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
							<? } ?>
							<? if ($conf['youtube']) { ?>
							<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<? echo $conf['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
								<? } ?>
							<? if ($conf['instagram']) { ?>
							<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<? echo $conf['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
							<? } ?>
              <? if ($conf['facebook']) { ?>
							<li class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin">
                <a href="<? echo $conf['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
							<? } ?>
						</ul>
					</div>

				</div>
			</div>
</div>
		<!-- /Footer Widget Secton -->
	 
	<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
 

	<style>
		.logo a,
		.logo p {
			font-family: Open Sans;
		}

		.navbar-default .navbar-nav li a {
			font-family: Open Sans !important;
		}

		.carousel-text h1,
		.enigma_heading_title h3,
		.enigma_service_detail h3,
		.enigma_home_portfolio_caption h3 a,
		.enigma_blog_thumb_wrapper h2 a,
		.enigma_footer_widget_title,
		.enigma_header_breadcrum_title h1,
		.enigma_fuul_blog_detail_padding h2 a,
		.enigma_fuul_blog_detail_padding h2,
		.enigma_sidebar_widget_title h2 {
			font-family: Open Sans;
		}

		.head-contact-info li a,
		.carousel-list li,
		.enigma_blog_read_btn,
		.enigma_service_detail p,
		.enigma_blog_thumb_wrapper p,
		.enigma_blog_thumb_date li,
		.breadcrumb,
		.breadcrumb li,
		.enigma_post_date span.date,
		.enigma_blog_comment a,
		.enigma_fuul_blog_detail_padding p,
		#wblizar_nav,
		.enigma_comment_title h3,
		.enigma_comment_detail_title,
		.enigma_comment_date,
		.enigma_comment_detail p,
		.reply,
		.enigma_comment_form_section h2,
		.logged-in-as,
		.enigma_comment_form_section label,
		#enigma_send_button,
		.enigma_blog_full p,
		.enigma_sidebar_link p a,
		.enigma_sidebar_widget ul li a,
		.enigma_footer_widget_column ul li a,
		.enigma_footer_area p,
		.comment-author-link,
		.enigma_sidebar_widget ul li,
		.enigma_footer_widget_column .textwidget,
		.textwidget,
		.enigma_callout_area p,
		.enigma_callout_area a,
		#searchform .form-control,
		.tagcloud a,
		#wp-calendar,
		.enigma_footer_widget_column .tagcloud a,
		.enigma_footer_widget_column ul#recentcomments li a,
		.enigma_footer_widget_column ul#recentcomments li {
			font-family: Open Sans;
		}
    
	</style>

	<script    src='/<? echo $conf['tema']; ?>/js/jquery.validate.min68c1.js?ver=false'></script>
	<script    src='/<? echo $conf['tema']; ?>/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
 
	<script    src='/<? echo $conf['tema']; ?>/js/scripts1c9b.js?ver=4.6.1'></script>
	<script    src='/<? echo $conf['tema']; ?>/js/comment-reply.mind714.js?ver=4.7.10'></script>
	<script    src='/<? echo $conf['tema']; ?>/js/wp-embed.mind714.js?ver=4.7.10'></script>
 

</body>


</html>