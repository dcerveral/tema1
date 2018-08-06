<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8" />
	<!--link rel="stylesheet" href="/style.css" type="text/css" media="screen"-->
	 <link rel="stylesheet" href="/tema/css/style.css" type="text/css" media="screen">
	 <!--link rel="stylesheet" href="/tema/css/style1cb9b.css" type="text/css" media="screen"-->
	<title><? echo $campo['title']; ?></title>
 
	<meta name="description" content="<? echo $campo['description']; ?>" />
	

	<meta name="robots" content="<? echo $conf['robots']; ?>" />
	<link rel="canonical" href="<? echo $conf['dominio']; ?>/<? echo $campo['slug']; ?>" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<? echo $campo['title']; ?>" />
	<meta property="og:description" content="<? echo $campo['description']; ?>" />
	<meta property="og:url" content="<? echo $conf['dominio']; ?>/<? echo $campo['slug']; ?>" />
	<meta property="og:site_name" content="<? echo $campo['title']; ?>" />
	<meta property="og:image" content="/img/<? echo $campo['foto']; ?>" />
	 
	 

	<link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='https://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="<? echo $campo['title']; ?>" href="/feed" />
 
	<link href="https://fonts.googleapis.com/css?family=<? echo $conf['font']; ?>" rel="stylesheet">
	<link rel='stylesheet' id='smuzsf-facebook-css' href='/<? echo $conf['tema']; ?>/css/font-awesome.mind714.css?ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='twb_aweber_css-css' href='/<? echo $conf['tema']; ?>/css/twb_aweber_optin68c1.css?ver=false' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='/<? echo $conf['tema']; ?>/css/styles1c9b.css?ver=4.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='OpenSans-css' href='https://fonts.googleapis.com/css?family=Rock+Salt%7CNeucha%7CSans+Serif%7CIndie+Flower%7CShadows+Into+Light%7CDancing+Script%7CKaushan+Script%7CTangerine%7CPinyon+Script%7CGreat+Vibes%7CBad+Script%7CCalligraffitti%7CHomemade+Apple%7CAllura%7CMegrim%7CNothing+You+Could+Do%7CFredericka+the+Great%7CRochester%7CArizonia%7CAstloch%7CBilbo%7CCedarville+Cursive%7CClicker+Script%7CDawning+of+a+New+Day%7CEwert%7CFelipa%7CGive+You+Glory%7CItalianno%7CJim+Nightshade%7CKristi%7CLa+Belle+Aurore%7CMeddon%7CMontez%7CMr+Bedfort%7COver+the+Rainbow%7CPrincess+Sofia%7CReenie+Beanie%7CRuthie%7CSacramento%7CSeaweed+Script%7CStalemate%7CTrade+Winds%7CUnifrakturMaguntia%7CWaiting+for+the+Sunrise%7CYesteryear%7CZeyada%7CWarnes%7CAbril+Fatface%7CAdvent+Pro%7CAldrich%7CAlex+Brush%7CAmatic+SC%7CAntic+Slab%7CCandal&amp;ver=4.7.10'
	 type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='/<? echo $conf['tema']; ?>/css/bootstrapd714.css?ver=4.7.10' type='text/css' media='all' />
	
	 
	
	<!--link rel='stylesheet' id='default-css' href='/<? echo $conf['tema']; ?>/css/defaultd714.css?ver=4.7.10' type='text/css' media='all' /-->
	
 <style>
	 .enigma_footer_widget_title span{border-bottom: 3px solid white;
    padding-bottom: 3px;}
	 .area_tabla{
		 
		 	margin-top:60px;
		  margin-bottom:60px;
		text-align: center;
		 padding:20x;
	 }
	 .area_tabla .container{background-color: <? echo $conf['primario']; ?>;text-align: center;border-radius: 5px 5px 5px 5px;}
	 .area_tabla h3 {margin-top:40px; color:white; text-align: center;}
	 .area_tabla h5 {font-weight: lighter; color:white; text-align: center;}
   .mitabla {padding-bottom:80px;}
	 	.mitabla > ul { list-style-type: none;
                padding:0px;margin:0px; text-align:center;}
	.mitabla > ul > li {display:inline-block;text-align:center; width:50%; max-width:90%;  background-color: white; color:<? echo $conf['secundario']; ?>;margin:0px; padding: 10px 5px 10px 25px;border-radius: 5px 5px 5px 5px;margin-bottom:10px; font-weight: bold; font-size:1.1em;
-moz-border-radius: 5px 5px 5px 5px; 
-webkit-border-radius: 5px 5px 5px 5px;margin:3px;
border: 0px solid <? echo $conf['primario']; ?>;}
	 
	
	 	 @media  (max-width: 800px) {
					 .right-left{float:none; width:100%; }
				.pad { padding:5px; }
				.padtop{padding-top:10px;}
				logo img{display:block; margin:auto; }	
			 
						 .mitabla > ul {margin-left:5px;}
					 .mitabla > ul > li {width:100%;  padding: 10px;font-weight:normal;font-size:1em; }
						.area_tabla .container{width:100%; border-radius: 0px;}
			 .mitabla > ul > li  > .break{ display: block;}
	 }
	 
	 .titulo{color:white; font-size:2em;}
	 .active2{background-color: <? echo $conf['secundario']; ?>}
	 
	 hr {color: <? echo $conf['primario']; ?>;
		background-color: <? echo $conf['primario']; ?>;
		height: 4px; }
	 
	 .logo {margin-top:10px;margin-top:10px;}
	 .padtop{padding-top:50px;}
	 .pad {padding:20px;}
	 .right-left{float:right;}
	  .tarifas {padding:0px;padding-top:20px; margin:0px;background-color:white;border:0px;
	 
	 background: <? echo $conf['primario']; ?>;
background: -moz-linear-gradient(left, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, <? echo $conf['primario']; ?>), color-stop(100%, <? echo $conf['secundario']; ?>));
background: -webkit-linear-gradient(left, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%);
background: -o-linear-gradient(left, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%);
background: -ms-linear-gradient(left, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%);
background: linear-gradient(to right, <? echo $conf['primario']; ?> 0%, <? echo $conf['secundario']; ?> 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<? echo $conf['primario']; ?>', endColorstr='#207ce5', GradientType=1 );
	 
	 }
	 
	 
	 

		 .enigma_blog_area {padding:0px; margin:0px;margin-top:20px;padding-top:20px;margin-bottom:20px;background-color:white;border:0px;}
		 .enigma_service {padding:0px; margin-top:20px;margin-bottom:20px;margin:0px;background-color:white;border:0px;}
		 .enigma_project_section {padding:0px;margin-top:30px;margin-bottom:30px; margin:0px;background-color:white;border:0px;padding-top:30px;}
		 .enima_photo_gallery {padding:0px;margin-top:20px;margin-bottom:20px; margin:0px;background-color:white;border:0px;}
		 .enigma_slider_shadow{margin-bottom: 10px;}
		.col-xs-12 {margin-bottom: 30px;}
}
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
		
		img{max-width:100%; height:auto;}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
	 
	 #wrapper{
	background: #ffffff;
} 
/*  header contact info section ***/
.header_section{
	background-color:<? echo $conf['primario']; ?>;
	color:#fff;
}
/** navbar menus ***/
.navigation_menu{
	background-color: <? echo $conf['primario']; ?>;
	border:0px  ;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus,
.dropdown-menu .active a {	
	background-color: white;
 
}
.collapse ul.nav li.current-menu-parent .dropdown-toggle, .collapse ul.nav li.current-menu-item .dropdown-toggle,
.navbar-default .navbar-collapse ul.nav li.current-menu-parent .dropdown-toggle,.navbar-default .navbar-collapse ul.nav li.current-menu-item .dropdown-toggle
.collapse ul.nav li.current_page_ancestor .dropdown-toggle,.collapse ul.nav li.current_page_ancestor .dropdown-toggle,
.navbar-default .navbar-collapse ul.nav li.current_page_ancestor .dropdown-toggle,.navbar-default .navbar-collapse ul.nav li.current_page_ancestor .dropdown-toggle
{
	background-color: <? echo $conf['primario']; ?>;
	//box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	color: <? echo $conf['primario']; ?> !important;
	border-radius:0px;
}

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
	background-color: <? echo $conf['primario']; ?>;
 	 
}

.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
	background-color: <? echo $conf['primario']; ?>;
}

.dropdown-menu {
	background-color: <? echo $conf['secundario']; ?>;
	opacity: 0.9;
	
}
/** headings titles css ***/
.enigma_heading_title h3 {
	border-bottom: 4px solid <? echo $conf['primario']; ?>;
	color: #3b3b3b;
}
.enigma_heading_title2 h3 {
	border-bottom: 2px solid <? echo $conf['primario']; ?>;
	color: #3b3b3b;
}
/** slider css ***/
.carousel-list li {
 
	background-color: <? echo $conf['secundario']; ?>;
	opacity: 0.9;
}

/** service  section css ***/
.enigma_service_iocn{
	border: 4px solid <? echo $conf['primario']; ?>;
	background-color:<? echo $conf['primario']; ?>;
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, #fff 50%);
}
.enigma_service_area:hover .enigma_service_iocn i {
	color:<? echo $conf['primario']; ?>;
}
.enigma_service_area:hover .enigma_service_iocn{background-color:#ffffff;}
.enigma_service_iocn_2 i{
	background: #fff;
	border: 4px solid <? echo $conf['primario']; ?>;
}
.enigma_service_iocn_2 i{
	color: <? echo $conf['primario']; ?>;
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%);
 }


/****************portfolio css ********************************************************
********************************************************************************/

.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a {
	background-color: <? echo $conf['primario']; ?>;
	border:2px solid <? echo $conf['primario']; ?>;
	color:#fff;
}
.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <? echo $conf['primario']; ?>;
	color:<? echo $conf['primario']; ?>;
}
.enigma_home_portfolio_caption {
	border-left:1px solid #ccc;
	border-bottom:4px solid <? echo $conf['primario']; ?>;
	border-right:1px solid #ccc;
}

.enigma_home_portfolio_caption:hover{
    background: <? echo $conf['primario']; ?>;
}
.enigma_home_portfolio_caption:hover  h3 a ,.enigma_home_portfolio_caption:hover  small{
   color: #ffffff;
}
	
	 .img-wrapper{width:100%;}
	 
.img-wrapper:hover .enigma_home_portfolio_caption{
 background: <? echo $conf['primario']; ?>;
 border-left:1px solid <? echo $conf['primario']; ?>;
	border-bottom:4px solid <? echo $conf['primario']; ?>;
	border-right:1px solid <? echo $conf['primario']; ?>;
}
.img-wrapper:hover .enigma_home_portfolio_caption  h3 a,.img-wrapper:hover .enigma_home_portfolio_caption  small{
 color: #ffffff;
}

.enigma_proejct_button a {
	background-color: #f8504b;
	color: #FFFFFF;
	border: 2px solid <? echo $conf['primario']; ?>;
	transition: all 0.4s ease 0s;
}
.enigma_proejct_button a:hover {
	background-color: #ffffff;
	color: <? echo $conf['primario']; ?>;
	border: 2px solid <? echo $conf['primario']; ?>;
	text-decoration:none;
	
}


.enigma_carousel-prev, .enigma_carousel-next {
    background-color: #fff;
	border: 2px solid <? echo $conf['primario']; ?>;
}
.enigma_carousel-prev:hover, .enigma_carousel-next:hover {
    background-color: <? echo $conf['primario']; ?>;
	color:#fff;
}
.enigma_carousel-prev:hover i, .enigma_carousel-next:hover i{
    color:#fff;
}
.enigma_carousel-prev i,
.enigma_carousel-next i {
	color: <? echo $conf['primario']; ?>;
}

/*** project detail ***/
.enigma_portfolio_detail_pagi li a {
	color: #404040;
	border:2px solid <? echo $conf['primario']; ?>;
	text-align:center;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, #ffffff 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	
}
.enigma_portfolio_detail_pagi li a:hover {
	color: #404040;
	border:2px solid <? echo $conf['primario']; ?>;
	background-position: 0 -100%;
}

.enigma_portfolio_detail_pagi li a span{
	color:#fff;
	line-height:35px;
}
.enigma_portfolio_detail_pagi li a:hover span{
	color:#31a3dd;
}
.enigma-project-detail-sidebar p small {
	color:#777777;
	
}

.enigma-project-detail-sidebar .launch-enigma-project a {

	color: #ffffff;
	border: 2px solid <? echo $conf['primario']; ?>;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, #ffffff 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.enigma-project-detail-sidebar .launch-enigma-project a:hover {
	background-color: #ffffff;
	color: <? echo $conf['primario']; ?>;
	border: 2px solid <? echo $conf['primario']; ?>;
	background-position: 0 -100%;
}

/** gallery css **/

.enigma_gallery_showcase .enigma_gallery_showcase_icons a {
	background-color: <? echo $conf['primario']; ?>;
	border:2px solid <? echo $conf['primario']; ?>;
	color:#fff;
}

.enigma_gallery_showcase .enigma_gallery_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <? echo $conf['primario']; ?>;
	color:<? echo $conf['primario']; ?>;
}


/**************** blog css ********************************************************
********************************************************************************/

/** blog thumbnail css **/
.enigma_blog_thumb_wrapper{
	background:#fff;
	border-bottom: 5px solid <? echo $conf['primario']; ?>;
	box-shadow: 0 0 6px rgba(0,0,0,.7);

}
.enigma_blog_thumb_wrapper h2 a{
	color:<? echo $conf['primario']; ?>;
	transition: all 0.4s ease 0s;
}

.enigma_blog_thumb_wrapper h2:hover a{
	color:<? echo $conf['primario']; ?>;

}
.enigma_blog_thumb_date li i{
	color: <? echo $conf['primario']; ?>;
}
.enigma_tags a ,.enigma_cats a{
	background-size: 100% 200%;
	background-color:#edf0f2;
    background-image: linear-gradient(to bottom, #edf0f2 50%, <? echo $conf['primario']; ?> 50%);
 }

.enigma_tags a:hover , .enigma_cats a:hover{
	color:#fff;
	background-position: 0 -100%;
	background-color:<? echo $conf['primario']; ?>;
}
.enigma_tags a i ,.enigma_cats a i{
	color:<? echo $conf['primario']; ?>;
}
.enigma_tags a:hover i ,.enigma_cats a:hover i{
	color:#fff;
}

.enigma_blog_thumb_wrapper span a i{
	color: <? echo $conf['primario']; ?>;
}
.enigma_blog_thumb_wrapper span a {
	color:#555;
	
}.enigma_blog_thumb_footer{
	padding-top:20px;
	padding-bottom:10px;
	border-top:3px solid  #f5f5f5;
}

.enigma_blog_read_btn{
	border: 2px solid <? echo $conf['primario']; ?>;
	background-size: 100% 200%;
	background-color:<? echo $conf['primario']; ?>;
    background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, #fff 50%);
   }
.enigma_blog_read_btn i {
	margin-right:5px;
}
.enigma_blog_read_btn:hover{
	background-position: 0 -100%;
	background-color:#ffffff;
	color: <? echo $conf['primario']; ?>;
}
.enigma_blog_read_btn a{color:#ffffff;}

.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a {
	background-color: <? echo $conf['primario']; ?>;
	color: #fff;
	-webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;
}
.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a:hover{
	background-color: #ffffff;
	border: 2px solid <? echo $conf['primario']; ?>;
	color: <? echo $conf['primario']; ?>;
}
/********* Blog Full width css ********/
.enigma_post_date {
	background: <? echo $conf['primario']; ?>;
	color: #ffffff;
}
.enigma_blog_comment:hover i, .enigma_blog_comment:hover h6{
	color:<? echo $conf['primario']; ?>;
} 
.enigma_fuul_blog_detail_padding h2 a ,.enigma_fuul_blog_detail_padding h2{
	color:<? echo $conf['primario']; ?>;
}
.enigma_fuul_blog_detail_padding h2  a:hover{
	color:<? echo $conf['primario']; ?>;
}
/*** blog sidebar css **/
.enigma_recent_widget_post h3 a {
	color:<? echo $conf['primario']; ?>;
}
.enigma_sidebar_widget {
	border-left: 3px solid <? echo $conf['primario']; ?>;
	border-right: 3px solid <? echo $conf['primario']; ?>;
	border-bottom: 3px solid <? echo $conf['primario']; ?>;
	background-color:#ffffff;
}
.enigma_sidebar_widget_title{
	background:<? echo $conf['primario']; ?>;
}
.enigma_sidebar_link p a:hover  , .enigma_sidebar_widget ul li a:hover {
	color: <? echo $conf['primario']; ?>;
}

.enigma_widget_tags a , .tagcloud a {
	background-size: 100% 200%;
	background-color:#edf0f2;
    background-image: linear-gradient(to bottom, #edf0f2 50%, <? echo $conf['primario']; ?> 50%);
 }
.enigma_widget_tags a:hover , .tagcloud a:hover {
	border: 1px solid <? echo $conf['primario']; ?>;
	background-color:<? echo $conf['primario']; ?>;
	background-position: 0 -100%;
	
	color: #ffffff;
}

/** blog detail **/
.enigma_author_detail_wrapper{
	background: <? echo $conf['primario']; ?>;
	padding:15px;
	margin-bottom:40px;
	
}
.enigma_author_detail_wrapper{
	border-left:2px solid <? echo $conf['primario']; ?>;
}
/** blog  form input css **/ 
.reply a {
	color: <? echo $conf['primario']; ?>;
}
.enigma_con_input_control:focus, .enigma_con_textarea_control:focus,
.enigma_contact_input_control:focus, .enigma_contact_textarea_control:focus {
  border-color: <? echo $conf['primario']; ?>;
  -webkit-box-shadow: inset 0 0px 0px <? echo $conf['primario']; ?>, 0 0 5px <? echo $conf['primario']; ?>;
          box-shadow: inset 0 0px 0px <? echo $conf['primario']; ?>, 0 0 5px <? echo $conf['primario']; ?>;
}
.enigma_send_button , #enigma_send_button{
	border-color: <? echo $conf['primario']; ?>;
	color: #6a6a6a;
	background-color:#ffffff;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.enigma_send_button:hover ,#enigma_send_button:hover{
	background-position: 0 -100%;
    border: 2px solid <? echo $conf['primario']; ?>;
	color: #ffffff;
	background-color:<? echo $conf['primario']; ?>;
}



.enigma_blog_pagination {
	background-color: #FFFFFF;	
}
.enigma_blog_pagi a {
	border: 1px solid #dbdbdb !important;
	background-color: #ffffff;
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	color: #777777;
}
.enigma_blog_pagi a:hover, .enigma_blog_pagi a.active {
	background-position: 0 -100%;
	color: #ffffff;
}

/****** Testimonial css *******************************************
****************************************************************/
.enigma_testimonial_area i{
	color:<? echo $conf['primario']; ?>;
}
.enigma_testimonial_area img{
	border: 10px solid <? echo $conf['primario']; ?>;
}
.pager a{
	background: #fff;
	border: 2px solid <? echo $conf['primario']; ?>;
}
.pager a.selected{
	background: <? echo $conf['primario']; ?>;
	border: 2px solid <? echo $conf['primario']; ?>;
}
/**** Client Css *************************************************
****************************************************************/
.enigma_client_wrapper:hover {
	border: 4px solid <? echo $conf['primario']; ?>;

}
.enigma_client_prev, .enigma_client_next {
    background-color: #fff;
	border: 2px solid <? echo $conf['primario']; ?>;
}
.enigma_client_prev:hover, .enigma_client_next:hover {
    background-color: <? echo $conf['primario']; ?>;
	color:#fff;
}
.enigma_client_prev:hover i, .enigma_client_next:hover i{
    color:#fff;
}

.enigma_carousel-prev i,
.enigma_carousel-next i {
	color: <? echo $conf['primario']; ?>;
}
/**** About us page Css *************************************************
****************************************************************/
.enigma_team_showcase .enigma_team_showcase_icons a {
	background-color: <? echo $conf['primario']; ?>;
	border:2px solid <? echo $conf['primario']; ?>;
	color:#fff;
}

.enigma_team_showcase .enigma_team_showcase_icons a:hover{
	background-color: #ffffff;
	border:2px solid <? echo $conf['primario']; ?>;
	color:<? echo $conf['primario']; ?>;
}

.enigma_team_caption:hover{
    background: <? echo $conf['primario']; ?>;
}
.enigma_team_caption:hover  h3 a ,.enigma_team_caption:hover  small{
   color: #ffffff;
}

.enigma_team_wrapper:hover .enigma_team_caption{
 background: <? echo $conf['primario']; ?>;
}
.enigma_team_wrapper:hover .enigma_team_caption  h3 ,.enigma_team_wrapper:hover .enigma_team_caption  small{
 color: #ffffff;
}
/***** Call Out Section *****************************************************************
***************************************************************************************/
.enigma_callout_area {
	background-color: <? echo $conf['secundario']; ?>;

}
/***** Footer Area Css *****************************************************************
***************************************************************************************/
.enigma_footer_area{
	background: <? echo $conf['primario']; ?>;
	border-top: 0px solid #6B6B6B;
}
/***** Contact Info Css *****************************************************************
***************************************************************************************/
.enigma_contact_info li .desc {
	color: <? echo $conf['primario']; ?>;
}
/***** Shortcode  Css *****************************************************************
***************************************************************************************/
/*Dropcaps Styles*/
.enigma_dropcape_square span {
	background-color: <? echo $conf['primario']; ?>;
    color: #FFFFFF;
}
.enigma_dropcape_simple span {
    color: <? echo $conf['primario']; ?>;
}
.enigma_dropcape_circle span {
	background-color: <? echo $conf['primario']; ?>;
    color: #FFFFFF;
}
/*** breadcum style css **/
.breadcrumb li a {
color: <? echo $conf['primario']; ?> !important;
}
/** progress bar or nav button css */
.progress-bar {
	background-color: <? echo $conf['primario']; ?> !important;
}
.btn-search{
	background:<? echo $conf['primario']; ?> !important;
}
.nav-pills > li  > a{
	border: 3px solid <? echo $conf['primario']; ?> !important;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%) !important;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
	background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, <? echo $conf['primario']; ?> 50%) !important;
	background-color:<? echo $conf['primario']; ?>;
}
.nav-stacked > li  > a
{
	border: 3px solid <? echo $conf['primario']; ?> !important;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%) !important;
 }
 .nav-stacked > li.active > a, .nav-stacked > li.active > a:hover, .nav-stacked > li.active > a:focus {
	background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, <? echo $conf['primario']; ?> 50%) !important;
	background-color:<? echo $conf['primario']; ?>;
}


.navbar-toggle {
background-color: <? echo $conf['primario']; ?> !important;
border: 0px solid <? echo $conf['primario']; ?> !important;
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
background-color: <? echo $conf['primario']; ?> !important;
}
.enigma_blockquote_section blockquote {
border-left: 5px solid <? echo $conf['primario']; ?> ;
}
#wp-calendar caption {
background-color: <? echo $conf['primario']; ?>;
color: #ffffff;
padding: 10px;
}
#wp-calendar thead tr th {
text-align: center;
}
table th {
border: 1px solid #dddddd;
padding: 8px;
line-height: 20px;
text-align: center;
vertical-align: top;
}
table td {
border: 1px solid #dddddd;
padding: 8px;
line-height: 20px;
text-align: center;
vertical-align: top;
}
table td {
border: 1px solid #dddddd;
padding: 8px;
line-height: 20px;
text-align: center;
vertical-align: top;
}
#wp-calendar tbody tr td {
text-align: center;
}
.enigma_footer_widget_column ul li a ,.enigma_footer_widget_column ul#recentcomments li {color: #f2f2f2;}
.enigma_footer_widget_column ul li a:hover{color: <? echo $conf['primario']; ?>;}
.enigma_callout_area a:hover{background-color:#393c40;}
ul .social li .facebook a:hover ,ul .social li .twitter a:hover,ul .social li .linkedin a:hover ,ul .social li .youtube a:hover {background-color:#34495e;}
.enigma_blog_pagi a:hover, .enigma_blog_pagi a.active {
background-color: <? echo $conf['primario']; ?>;
color: white;
}
	 
body {
   margin:0px;
  padding: 0px;
   font-family: '<? echo $conf['font']; ?>', sans-serif;
   }
.row {
    margin-left: 0px;
    margin-right: 0px;
} 

.container {
    padding-left: 0px ;
    padding-right: 0px ;
}
a:hover, a:focus{
	text-decoration: none ;
}
h1, h2, h3, h4, h5, h6 {
	font-weight: normal;
	color: #666;
	text-shadow: 0 0 1px rgba(0,0,0,0.01);
	font-family: '<? echo $conf['font']; ?>', sans-serif;
	font-weight: 700;
}
/***** Navbar Menu  **********************************************************************************
****************************************************************************************************/


.navigation_menu{
	width:100%;
	position: relative; 

}


#header_shadow {
	background: url('<? echo $conf['tema']; ?>/png/shadow.png') no-repeat top center;
	position: absolute;
	top:100%;
	left: 0;
	right: 0;
	height: 20px;
	z-index: 99;
	width:100%;
}
	.navbar-default {
	background-color: transparent;
	border:0;
	}


.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	//	-webkit-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//	-moz-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//	box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	color:<? echo $conf['secundario']; ?>;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size:15px;
	border:0px;
}

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	//-webkit-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//-moz-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	color:#fff;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size:15px;
}
.navbar-default .navbar-nav > li {
margin-right:3px;
}
.navbar-default .navbar-nav > li > a{
	color: #ffffff;
	border-radius: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	padding-right: 10px;
	//text-transform: uppercase;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size:15px;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	//-webkit-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//-moz-box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	//box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);
	color:#fff;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size:15px;
	background-color: white;
	color: <? echo $conf['primario']; ?>
}

.dropdown-menu {
	position: absolute;
	top: 100%;
	right: auto;
	left:0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 200px;
	padding: 0px 0;
	margin: 2px 0 0;
	font-size: 14px;
	list-style: none;
	background-clip: padding-box;
	border: 0px solid #fff;
	border: 0px solid rgba(0, 0, 0, .15);
	border-radius: 0px;
	-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
	box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
	//text-transform: uppercase;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
}
 
.dropdown-menu > li > a {
  display: block;
  padding: 7px 32px 7px 10px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
  color:#fff;
 -webkit-transition: padding 400ms;
-moz-transition: padding 400ms;
transition: padding 400ms;
font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
  
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #000;
  text-decoration: none;
  background-color: #ffffff;
  padding: 7px 20px 7px 22px;
  font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
}
.dropdown-menu > li > a:before {
  content: "\f105";
  font-family: FontAwesome;
  margin-right: 10px;
  opacity: 0;
  font-size:16px;
}
.dropdown-menu > li > a:hover:before {
  opacity: 1;
}

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #333;
  text-decoration: none;
  background-color: #fff;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #999;
}
.navbar-nav > .open > a:after {
	content: "\f0d8";
	font-family: FontAwesome;
	position: absolute;
	z-index: 9999;
	bottom: -6px;
	left: 80%;
	margin-left: -10px;
	font-size: 26px;
}
 .navbar-nav > .open > a:after {
	color: #1fa67a;
	display:none;
}
.navbar-right .dropdown-menu {
	right: 0;
	right: auto;
}
.navbar-default .navbar-brand:hover {
	color: #999;
}
.navbar-default .navbar-brand {
color: #999;
}
.navbar-brand {
	float: left;
	height: 50px;
	padding: 28px 20px;
	padding-left:50px;
	margin-bottom:30px;
	font-size: 18px;
	line-height: 20px;
	font-size: 30px;
	letter-spacing: -0.05em;
	text-transform: uppercase;
	font-weight: 800;
	font-family: '<? echo $conf['font']; ?>';

}
.navbar-brand :hover{
	float: left;
	height: 50px;
	padding: 28px 20px;
	padding-left:50px;
	font-size: 18px;
	line-height: 20px;
	font-size: 30px;
	letter-spacing: -0.05em;
	text-transform: uppercase;
	font-weight: 800;
	font-family: '<? echo $conf['font']; ?>';
}
.navbar-collapse {
	max-height: 340px;
	padding-right: 15px;
	margin-top: 25px;
	margin-bottom: 25px;
	overflow-x: visible;
	-webkit-overflow-scrolling: touch;
	border-top: 0px solid transparent;
	//box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
	
}

.navbar-toggle {
	position: relative;
	float: right;
	padding: 9px 10px;
	margin-top: 28px;
	margin-right: 15px;
	margin-bottom: 8px;
	background-color: #049CFD;
	background-image: none;
	border: 1px solid #049CFD;
	border-radius: 4px;
}
.navbar-toggle:hover {
	position: relative;
	float: right;
	padding: 9px 10px;
	margin-top: 28px;
	margin-right: 15px;
	margin-bottom: 8px;
	background-color: #049CFD;
	background-image: none;
	border: 1px solid #049CFD;
	border-radius: 4px;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #049CFD;
}
.navbar-default .navbar-toggle .icon-bar {
	background-color: #fff;
}
.navber{
	border-top:none;
}
.fa-angle-down {
	font-size: 18px !important;
	float:right;
	margin-right:-13px;
}

.dropdown-submenu{
    position:relative;
}
.dropdown-submenu > .dropdown-menu
{
    top:6px;
    left:100%;
    margin-top:-6px;
    margin-left:-1px;
  
}

.dropdown-submenu .pull-left{
    float:none;
}
.dropdown-submenu.pull-left > .dropdown-menu{
    left:-100%;
    margin-left:10px;
    -webkit-border-radius:6px 0 6px 6px;
    -moz-border-radius:6px 0 6px 6px;
    border-radius:6px 0 6px 6px;
}

/** slider css ***/

.carousel-indicators li{
	width:19px;
	height:19px;
}

.carousel-indicators .active{
	width:19px;
	height:19px;
}

/*** page Header Breadcrum Title ******************************************************************************************************
**************************************************************************************************************************/

.enigma_header_breadcrum_title{
	margin-bottom:70px;
	background:#edf0f2;
	opacity:1;
	padding-top:8px;
	padding-bottom:8px;
	
}
.enigma_header_breadcrum_title h1{
	color:#777777;
}
.breadcrumb {
	font-size: 17px;
	padding: 0;
	position: relative;
	display: inline-block;
	background: none;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	list-style: none;
}
.breadcrumb li {
	display: inline-block;
}
.breadcrumb li a{
	color:<? echo $conf['primario']; ?>;
}
.breadcrumb > .active {
	color: #000;
}
.breadcrumb > li + li:before {
	padding: 0 5px;
	color: #000;
	content: "  /\00a0";
}
/** about us css ********/
.progress {
	height: 25px;
	margin-bottom: 12px;
	border-radius:0px;
}
.progress-bar {
	font-size: 16px;
	line-height: 30px;
	color: #fff;
	text-align: left;
	background-color: <? echo $conf['primario']; ?>;
	padding-left:20px;
}

/*** blog css **/
.enigma_blog_right_side{
	float:right;
}
.enigma_sidebar_left_side{

float:left;

}
/* search btn css **/
.btn-search{
	color:#fff;
	background:<? echo $conf['primario']; ?>;
	border-radius:0px;
	font-size: 14px;
}

.input-group{
	margin-top:10px;
	margin-bottom:30px;	

}
.form-control {
	border-radius:0px;
}
/** portfolio css **/
.nav-pills{
	margin-bottom:50px;
}
.nav-pills > li  > a{
	background: #ffffff;
	color: #3b3b3b;
	border: 3px solid <? echo $conf['primario']; ?>;
	margin-right:15px;
	margin-bottom:15px;
	border-radius: 0px;
	padding: 9px 27px;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	font-family: '<? echo $conf['font']; ?>', sans-serif;

}
.nav-pills > li  > a:hover{
	color: #fff;
	background-position: 0 -100%;
}

.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
	color: #fff;
	background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, <? echo $conf['primario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.nav-stacked{
	margin-bottom:50px;
}
.nav-stacked > li  > a
{
	background: #ffffff;
	color: #3b3b3b;
	border: 3px solid <? echo $conf['primario']; ?>;
	margin-bottom:12px;
	border-width:3px !important;
	background-size: 100% 200%;
    background-image: linear-gradient(to bottom, #fff 50%, <? echo $conf['primario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	font-family: '<? echo $conf['font']; ?>', sans-serif;
	
}

.nav-stacked > li  > a:hover{
color: #fff;
background-position: 0 -100%;
}

.nav-stacked > li.active > a, .nav-stacked > li.active > a:hover, .nav-stacked > li.active > a:focus {
	color: #fff;
	background-image: linear-gradient(to bottom, <? echo $conf['primario']; ?> 50%, <? echo $conf['secundario']; ?> 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}

/*Accordion & Tabs Styles for shortcode*/

.nav-tabs li a {
	background: #F5F5F5;
	color: #666666;
	border: 1px solid #e8e8e8;
	border-radius:0px;
	margin-right:0px;
	font-family: '<? echo $conf['font']; ?>, sans-serif;
	font-weight: 600; 
}
.nav-tabs li.active > a{
	border: 1px solid #e8e8e8;
	background: white;
	color: #555;
	border-bottom-color:transparent;
	 
}
.nav-tabs li > a:hover {
	border: 1px solid <? echo $conf['primario']; ?>;
	background: #fff;
	color: #555;
	
}
/** panels style **/
.panel {
	margin-bottom: 20px;
	background-color: #ffffff;
	border: 1px solid transparent;
	border-radius: 4px; 
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); 
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) 0 10px rgba(0, 0, 0, 0.17);
	-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) 0 10px rgba(0, 0, 0, 0.17);
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) 0 10px rgba(0, 0, 0, 0.17);
}
.panel-default {
	border-color: #e9e9e9;
}
.panel-default > .panel-heading {
	color: #333333;
	background-color: #f6f6f6;
	border-color: #e9e9e9;
}
.enigma_panel-pink {
	border-color: #F22853;
}
.enigma_panel-pink > .panel-heading {
	color: #fff;
	background-color: #F22853;
	border-color: #F22853;
}
.enigma_panel-green {
	border-color: #1FA67A;
}
.enigma_panel-green > .panel-heading {
	color: #fff;
	background-color: #1FA67A;
	border-color: #1FA67A;
}
.enigma_panel-black {
	border-color: #000000;
}
.enigma_panel-black > .panel-heading {
	color: #fff;
	background-color: #000000;
	border-color: #000000;
}
.enigma_panel-orange{
	border-color: #ff8300;
}
.enigma_panel-orange > .panel-heading {
	color: #fff;
	background-color: #ff8300;
	border-color: #ff8300;
}
.enigma_panel-blue {
	border-color: <? echo $conf['primario']; ?>;
}
.enigma_panel-blue > .panel-heading {
	color: #fff;
	background-color: <? echo $conf['primario']; ?>;
	border-color: <? echo $conf['primario']; ?>;
}
.enigma_panel-red {
	border-color: #db2723;
}
.enigma_panel-red > .panel-heading {
	color: #fff;
	background-color: #db2723;
	border-color: #db2723;
}
.enigma_panel-purple {
	border-color: #800080;
}
.enigma_panel-purple > .panel-heading {
	color: #fff;
	background-color: #800080;
	border-color: #800080;
}
.enigma_panel-brown {
	border-color: #555555;
}
.enigma_panel-brown > .panel-heading {
	color: #fff;
	background-color: #555555;
	border-color: #555555;
}

/*** search button css ***/

.input-group-btn {
display: inherit;
}
#searchform  .btn { 

font-size: 18px;
font-weight: normal;
height: 45px;
width: 62px;

}

#searchform  .form-control {
display: block;
width: 100%;
height: 45px;
padding: 6px 12px;
font-size: 13px;

}
  .input-group {
margin-top: 15px;
margin-bottom: 15px;
}
	/*-----------------------
-----Scrollimations------
------------------------*/   
.scrollimation.fade-in{
	opacity:0;
	-webkit-transition:opacity 0.6s ease-out;
	transition:opacity 0.6s ease-out;
}

.scrollimation.fade-in.in{
	opacity:1;
}

.scrollimation.scale-in{
	opacity:1;
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	-ms-transform: scale(0.5);
	transform:scale(0.5);
	-webkit-transition: -webkit-transform .6s cubic-bezier(.17,.89,.67,1.57), opacity .6s ease-out;
	transition: transform .6s cubic-bezier(.17,.89,.67,1.57), opacity .6s ease-out;
}

.scrollimation.scale-in.in{
	opacity:1;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform:scale(1);
}

.scrollimation.fade-right{
	opacity:0;
	-webkit-transform: translateX(-100px);
	-moz-transform: translateX(-100px);
	-ms-transform: translateX(-100px);
	transform:translateX(-100px);
	-webkit-transition: -webkit-transform .4s ease-out,opacity .4s ease-out;
	transition: transform .4s ease-out,opacity .4s ease-out;
}

.scrollimation.fade-right.in{
	opacity:1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	transform:translateX(0px);
}

.scrollimation.fade-left{
	opacity:0;
	-webkit-transform: translateX(100px);
	-moz-transform: translateX(100px);
	-ms-transform: translateX(100px);
	transform:translateX(100px);
	-webkit-transition: -webkit-transform .4s ease-out,opacity .4s ease-out;
	transition: transform .4s ease-out,opacity .4s ease-out;
}

.scrollimation.fade-left.in{
	opacity:1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	transform:translateX(0px);
}

.scrollimation.fade-up{
	opacity:0;
	-webkit-transform: translateY(100px);
	-moz-transform: translateY(100px);
	-ms-transform: translateY(100px);
	transform:translateY(100px);
	-webkit-transition: -webkit-transform .4s ease-out,opacity .4s ease-in;
	transition: transform .4s ease-out,opacity .4s ease-in-out;
}

.scrollimation.fade-up.in{
	opacity:1;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	transform:translateY(0px);
}

.scrollimation.d1{
	transition-delay:.2s;
}

.scrollimation.d2{
	transition-delay:.4s;
}

.scrollimation.d3{
	transition-delay:.6s;
}

.scrollimation.d4{
	transition-delay:.8s;
}

.touch .scrollimation.fade-in{
	opacity:1;
}

.touch .scrollimation.scale-in{
	opacity:1;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform:scale(1);
}

.touch .scrollimation.fade-right{
	opacity:1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	transform:translateX(0px);
}

.touch .scrollimation.fade-left{
	opacity:1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	transform:translateX(0px);
}

.touch .scrollimation.fade-up{
	opacity:1;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	transform:translateY(0px);
}
	 
	 
	 
	 	/*** MEDIA RESONSIVE **/
	 @media (min-width:1200px) {
	.enigma_gallery_page .col-md-3{
	width:25%;
	}
	.navbar {
	margin-bottom: 0px; 

	}
	#enigma_nav_top.affix {
    position: fixed;
    top: 0;
    width: 100%;
	border-bottom: 2px solid #F7F5F5;
	z-index: 9999;
	}
	
	.carousel-caption {
	top: 25%;
	}
	.boxed .carousel-caption {
	top: 20%;
	}
	
}

@media (min-width:992px) and (max-width:1199px) {
	#enigma_nav_top.affix {
    position: fixed;
    top: 0;
    width: 100%;
	border-bottom: 2px solid #F7F5F5;
	z-index: 99997;
	left: 0;
	}
	
} 

/* This Media screen css called for All Hc Pages Element---------------------------------------------------------------------------------------------------------------------------------------------------------*/

@media only screen and (min-width: 960px) and (max-width: 1200px) {

	.enigma_gallery_page .col-md-3{
		width:25%;
	}
	.post-content-wrap {
		width:83%;
	}
	.post-content-wrap-right {
		width:83%;
	}
	.navbar {
	margin-bottom: 0px; 

	}
	#enigma_nav_top.affix {
    position: fixed;
    top: 0;
    width: 100%;
	border-bottom: 2px solid #F7F5F5;
	z-index: 99997;
	left: 0;
	}
	.enigma_gallery_blog{
	width: 33.3%;
	margin-right: 0;
	margin-bottom: 0;
	float: left;
	}
	
}	
@media only screen and (min-width: 767px) and (max-width: 992px) {
.logo{
	text-align:center;
	padding-top:15px;
	padding-bottom:0px;
	}
	.head-contact-info{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:2px;
	padding-left:0;
}

	.social{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:5px;
	padding-left: 0px;
	}
	.navbar-default .navbar-nav > li > a{
	color: #ffffff;
	border-radius: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 8px;
	padding-right: 8px;
	text-transform: uppercase;
	font-family: '<? echo $conf['font']; ?>',Arial, Helvetica, sans-serif;
	font-weight: 600;
	font-size:15px;
	}
	.navbar {
		margin-bottom: 0px; 

	}
	#enigma_nav_top.affix {
    position: fixed;
    top: 0;
    width: 100%;
	border-bottom: 2px solid #F7F5F5;
	z-index: 99997;
	left: 0;
	}
	.carousel-caption{
	top:40px;
	}
	.carousel-text h1 {
	font-size: 1.4em;
	padding:10px;
	}
	.carousel-list li {
	color: #fff;
	font-size: 0.9em;
	margin-bottom: 10px;
	overflow: hidden;
	font-family: '<? echo $conf['font']; ?>', sans-serif;
	font-weight: 600; 
	text-transform: uppercase;
	}
	.carousel-list {
	top: 60px;
	margin: 0px auto;
	}
	.enigma_callout_area{
		text-align:center;
	}
	.enigma_callout_area p{
		margin-bottom:20px;
		padding:0px;
	}
	.enigma_callout_btn {
	float: none;	
	}
	
	/*** blog full width **/
	.enigma_sidebar_left_side{

	float:none;

	}
	.enigma_blog_right_side{
	float:none;
	}
	.post-content-wrap {
	width:100%;
	}
	.post-content-wrap-right {
	width:100%;
	}
	.blog-date-left{
		display:flex;
		margin-bottom: 0px;
	}
	.blog-date-right{
		display:flex;
		margin-bottom: 0px;
	}
	
	.enigma_fuul_blog_detail_padding {
		padding-left: 0px;
		padding-top:20px;
	}
	.enigma_blog_full .enigma_blog_thumb_wrapper_showcase {
		margin-bottom: 0px;
	}
	.navbar-collapse {
     max-height: none;
	 }
	 .enigma_project_section .caroufredsel_wrapper{
		height: 350px !important;
	 }
	 .enigma_client_area .caroufredsel_wrapper{
		height: 250px !important;
	 }
	 .enigma_project_detail_related_projet .caroufredsel_wrapper{ 
		height: 350px !important;
	 }
	 /** enigma footer  copyright area ***/
	 .enigma_footer_area{
	 text-align:center;
	 }
	 .enigma_footer_copyright_info{
		float:none;
	}
	.enigma_footer_social_div{
		float:none;
	}
	/** contact us page **/
	.enigma_contact_form_fields{
	padding-right: 15px;
	padding-top: 30px;
	padding-bottom: 30px;
	border-right: 0px solid #E5E5E5;
	}
	.enigma_contact_info{
		padding-left: 15px;
		padding-top: 30px;
		padding-bottom: 30px;
	}
	/* gallery */
	.enigma_gallery_blog{
	width: 33.3%;
	margin-right: 0;
	margin-bottom: 0;
	float: left;
	}
	.carousel-indicators{
		display:none;
	}
	.carousel-text .enigma_blog_read_btn{
		display:none;
	}
	.carousel-caption {
	top: 20%;
	}
}


@media only screen and (min-width: 480px) and (max-width: 767px) {
.dropdown-menu{
width:100%;
float:none;
position:static !important;
}
.logo{
	text-align:center;
	padding-top:15px;
	padding-bottom:0px;
	}
	.head-contact-info{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:2px;
	padding-left:0;
}
	.social{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:5px;
	padding-left: 0px;
	}
	.carousel-caption{
	top:15px;
	}
	.carousel-text h1 {
	font-size: 1.2em;
	padding:10px;
	}
	.carousel-list li {
	color: #fff;
	font-size: 12px;
	line-height:16px;
	margin-bottom: 10px;
	overflow: hidden;
	font-family: '<? echo $conf['font']; ?>',sans-serif;
	text-transform: uppercase;
	}
	.carousel-list {
	top: 60px;
	margin: 0px auto;
	}
	
	.enigma_callout_area{
		text-align:center;
	}
	.enigma_callout_area p{
		margin-bottom:20px;
		padding:0px;
	}
	.enigma_callout_btn {
	float: none;	
	}
	/**** blog full width: ***/
	.enigma_sidebar_left_side{

		float:none;

	}
	.enigma_blog_right_side{
		float:none;
	}
	
	.post-content-wrap {
	width:100%;
	}
	.post-content-wrap-right {
	width:100%;
	}
	.blog-date-left{
		display:flex;
		margin-bottom: 0px;
	}
	.blog-date-right{
		display:flex;
		margin-bottom: 0px;
	}
	.enigma_fuul_blog_detail_padding {
		padding-left: 0px;
		padding-top:20px;
	}
	.enigma_blog_full .enigma_blog_thumb_wrapper_showcase {
		margin-bottom: 0px;
	}
	.navbar-collapse {
     max-height: none;
	 }
	 .enigma_project_section .caroufredsel_wrapper{
		height: 350px !important;
	 }
	 .enigma_client_area .caroufredsel_wrapper{
		height: 260px !important;
	 }
	 .enigma_project_detail_related_projet .caroufredsel_wrapper{ 
		height: 350px !important;
	 }
	 
	/*** comment section **/
	.enigma_comment_box .media-body {
	float: left;
	}
	/** enigma footer  copyright area ***/
	 .enigma_footer_area{
	 text-align:center;
	 }
	 .enigma_footer_copyright_info{
		float:none;
	}
	.enigma_footer_social_div{
		float:none;
	}
	/** contact us page **/
	.enigma_contact_form_fields{
	padding-right: 15px;
	padding-top: 30px;
	padding-bottom: 30px;
	border-right: 0px solid #E5E5E5;
	}
	.enigma_contact_info{
		padding-left: 15px;
		padding-top: 30px;
		padding-bottom: 30px;
	}
	/* gallery */
	.enigma_gallery_blog{
	width: 49.9%;
	margin-right: 0;
	margin-bottom: 0;
	float: left;
	}
	.carousel-indicators{
		display:none;
	}
	.carousel-text .enigma_blog_read_btn{
		display:none;
	}
	.carousel-caption {
	top: 20%;
	}
} 

@media only screen and (min-width: 200px) and (max-width: 600px) {
.dropdown-menu{
width:100%;
float:none;
position:static !important;
}
	/*.carousel-list li {	display:none; } */	
.carousel-text h1 {
margin: 0 0 0px 0;
padding: 5px;
font-size: 7px;
font-family: '<? echo $conf['font']; ?>', sans-serif;
color: #fff;
text-transform: uppercase;
text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
line-height: .line-height: 8px;;
}
.carousel-text .enigma_blog_read_btn {
font-size: 7px;
display: inline-block;
padding: 3px;;
}


	.carousel-list li {
	font-size: 7px;
overflow: hidden;
padding: 5px;
line-height: 8px;
display: block;
	color: #fff;
	font-size: 8px;
	line-height:8px;
	margin-bottom: 5px;
	overflow: hidden;
	font-family: '<? echo $conf['font']; ?>',sans-serif;
	text-transform: uppercase;
	}
	
	/* .carousel-caption{
	top:10px;
	} */
	
	
	/*** blog full width **/
	.enigma_sidebar_left_side{

	float:none;

	}
	.enigma_blog_right_side{
	float:none;
	}
	
	.blog-date-left{
		display:flex;
		margin-bottom: 0px;
	}
	
	.blog-date-right{
		display:flex;
		margin-bottom: 0px;
	}
	
	.post-content-wrap {
	width:100%;
	}
	.post-content-wrap-right {
	width:100%;
	}
	.enigma_fuul_blog_detail_padding {
		padding-left: 0px;
		padding-top:20px;
	}
	.enigma_blog_full .enigma_blog_thumb_wrapper_showcase {
		margin-bottom: 0px;
	}
	.navbar-collapse {
     max-height: none;
	 }
	.enigma_project_section .caroufredsel_wrapper{
		height: 400px !important;
	 }
	 .enigma_project_detail_related_projet .caroufredsel_wrapper{ 
		height: 400px !important;
	 }
	 /** enigma footer  copyright area ***/
	 .enigma_footer_area{
	 text-align:center;
	 }
	 .enigma_footer_copyright_info{
		float:none;
	}
	.enigma_footer_social_div{
		float:none;
	}
	/** contact us page **/
	.enigma_contact_form_fields{
	padding-right: 15px;
	padding-top: 30px;
	padding-bottom: 30px;
	border-right: 0px solid #E5E5E5;
	}
	.enigma_contact_info{
		padding-left: 15px;
		padding-top: 30px;
		padding-bottom: 30px;
	}
	.carousel-indicators{
		display:none;
	}
	.carousel-caption {
	top: 20%;
	}
}
@media only screen and (min-width: 480px) and (max-width: 600px) {
	.enigma_project_section .caroufredsel_wrapper{
		height: 450px !important;
	 }
	 .enigma_client_area .caroufredsel_wrapper{
		height: 300px !important;
	 }
	 .enigma_project_detail_related_projet .caroufredsel_wrapper{ 
		height: 450px !important;
	 }
	 .carousel-indicators{
		display:none;
	}

}
@media only screen and (min-width: 200px) and (max-width: 480px) {
  .head-contact-info li {
  float: left;
  padding-bottom: 5px;
  width: 100%;
}

.logo{
	text-align:center;
	padding-top:15px;
	padding-bottom:0px;
	}
	.head-contact-info{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:2px;
	padding-left:0;
	}
	.social{
	display: block;
	text-align: center;
	padding-top:5px;
	padding-bottom:5px;
	padding-left: 0px;
	}
	.carousel-text h1 {
	margin-top: -10px;
	font-size: 0.8em;
	}
	/* .carousel-list li {	display:none;	} */
	.carousel-list li {
	color: #fff;
	font-size: 8px;
	line-height:8px;
	margin-bottom: 5px;
	overflow: hidden;
	font-family: '<? echo $conf['font']; ?>',sans-serif;
	text-transform: uppercase;
	}
	
	.carousel-caption{
	top:30%;
	}
	.carousel-indicators{
		display:none;
	}
	.enigma_callout_area{
		text-align:center;
	}
	.enigma_callout_area p{
		margin-bottom:20px;
		padding:0px;
	}
	.enigma_callout_btn {
	float: none;	
	}
	.enigma_sidebar_left_side{

	float:none;

	}
	.enigma_blog_right_side{
	float:none;
	}
	/** blog full width ***/
	
	.post-content-wrap {
	width:100%;
	}
	.post-content-wrap-right {
	width:100%;
	}
	
	.blog-date-left{
		display:flex;
		margin-bottom: 0px;
	}
	.blog-date-left li{
		width:60px;
		height:60px;
	}
	
	.blog-date-right{
		display:flex;
		margin-bottom: 0px;
	}
	.blog-date-right li{
		width:60px;
		height:60px;
	}
	.enigma_post_date {
		padding-top: 6px;
		padding-left:2px;
		padding-right:2px;
		padding-bottom: 4px;
	}
	.enigma_post_date span.date {
		font-size: 30px;
		line-height: 25px;
	}
	.enigma_post_date h6 {
		font-size: 10px;
		line-height: 10px;
		margin-top: 4px;
	}
	.enigma_post_author img {
		height: 60px !important;
	}
	
	.enigma_blog_comment{
		width: 60px;
		padding-top: 6px;
		padding-left:2px;
		padding-right:2px;
		padding-bottom: 6px;
	}
	.enigma_blog_comment a{
		color:#999999;
	}
	.enigma_blog_comment i{
		font-size: 30px;
		line-height: 25px;
		

	}
	.enigma_blog_comment h6{
		font-size:12px;
		margin-top:4px;
		
	}
	.enigma_fuul_blog_detail_padding {
		padding-left: 0px;
		padding-top:20px;
	}
	.enigma_blog_full .enigma_blog_thumb_wrapper_showcase {
		margin-bottom: 0px;
	}
		.navbar-collapse {
     max-height: none;
	 }
	.enigma_client_area .caroufredsel_wrapper{
		height: 300px !important;
	}
	
	/*** comment section **/
	.enigma_comment_box .media-body {
	float: left;
	}
	/** enigma footer  copyright area ***/
	 .enigma_footer_area{
	 text-align:center;
	 }
	 .enigma_footer_copyright_info{
		float:none;
	}
	.enigma_footer_social_div{
		float:none;
	}
	/* gallery */
	.enigma_gallery_blog{
	width: 100%;
	margin-right: 0;
	margin-bottom: 0;
	float: left;
	}
	.carousel-text .enigma_blog_read_btn{
		display:none;
	}
}
	 
	</style>
	
	
	<link href="https://fonts.googleapis.com/css?family=<? echo $conf['font']; ?>" rel="stylesheet">
	
	<!--link rel='stylesheet' id='media-responsive-css' href='/<? echo $conf['tema']; ?>/css/media-responsived714.css?ver=4.7.10' type='text/css' media='all' /-->
	
	<link rel='stylesheet' id='animations-css' href='/<? echo $conf['tema']; ?>/css/animationsd714.css?ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-animtae-css' href='/<? echo $conf['tema']; ?>/css/theme-animtaed714.css?ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='/<? echo $conf['tema']; ?>/css/font-awesomed714.css?ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='OpenSansRegular-css' href='https://fonts.googleapis.com/css?family=Open+Sans&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='OpenSansBold-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A700&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='OpenSansSemiBold-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A600&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='RobotoRegular-css' href='https://fonts.googleapis.com/css?family=Roboto&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='RobotoBold-css' href='https://fonts.googleapis.com/css?family=Roboto%3A700&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='RalewaySemiBold-css' href='https://fonts.googleapis.com/css?family=Raleway%3A600&amp;ver=4.7.10' type='text/css' media='all' />
	<link rel='stylesheet' id='Courgette-css' href='https://fonts.googleapis.com/css?family=Courgette&amp;ver=4.7.10' type='text/css' media='all' />
 
	<script   src='/<? echo $conf['tema']; ?>/js/jqueryb8ff.js'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/jquery-migrate.min330a.js'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/facebookd714.js?ver=4.7.10'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/menud714.js?ver=4.7.10'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/bootstrapd714.js?ver=4.7.10'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/enigma_theme_scriptd714.js?ver=4.7.10'></script>
	<script   src='/<? echo $conf['tema']; ?>/js/jquery.caroufredsel-6.2.1d714.js'></script>
  <script   src='/<? echo $conf['tema']; ?>/js/caroufredsel-elementd714.js?ver=4.7.10'></script>
  <script   src='/<? echo $conf['tema']; ?>/js/jquery.photoboxd714.js?ver=4.7.10'></script>
	
	<meta name="generator" content="cms.my1.es" />

 
	<link rel="icon" href="/img/32_<? echo $conf['logoc']; ?>" sizes="32x32" />
	<link rel="icon" href="/img/192_<? echo $conf['logoc']; ?>" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="/img/32_<? echo $conf['logoc']; ?>" sizes="32x32" />
	<meta name="msapplication-TileImage" content="/img/32_<? echo $conf['logoc']; ?>"  />
	 <?  echo $conf['header']; ?>
	
</head>



<body style="background-color:<? echo $conf['backgroundcolor']; ?>  ;margin: 0px; padding: 0px;" > 
	<?   if ($_SESSION['cookies']=="XXX"){
		  $_SESSION['cookies']="SI";
	?> 
 
	
		<div class="header_section" id='cookies' style="background-color: <? echo $conf['secundario']; ?>">
			<div class="container">
				  
				<div class="row ">
					<div class="col-lg-8 col-md-8 col-sm-8 wl_rtl" style="padding:20px;">
					 <b> <? echo $conf['cookies']; ?></b>
					</div>
					 <div class="col-lg-4 col-md-4 col-sm-4 pull-right" style="padding:20px;">
						 <a href="#" class='btn btn-danger' ondblclick="document.getElementById('cookies').style.display='none';" 
                     style="float:right;">Aceptar</a>
					</div>
					
				</div>
				<!-- /Logo & Contact Info -->
			</div>
		</div>
	 
		<?   } ?>
		 
	 
		<div class="navigation_menu " data-spy="affix" data-offset-top="95" id="enigma_nav_top" >
			<span id="header_shadow"></span>
			<div class="container navbar-container">
				<nav class="navbar navbar-default " role="navigation">
					<div class="navbar-header">
						
					 					<!-- logo movil-->
						<div class="hidden-lg hidden-sm  hidden-md pull-left" 
                 style="position:relative; top:10px; left:10px;  float:left">
							 
						
						<a href="/"   rel="home">
										 	<img class="" style="float:left"  src="/img/100_<? echo $conf['logoh']; ?>"   alt="<? echo $conf['slogan_corto']; ?>" /> 
											</a> 
						</div>
										 	<!--div class="hidden-lg hidden-sm  hidden-md pull-left  "  style="margin-top:40px;margin-left:20px; "   > 
												<a style="color: white" href="/">
													<p style="line-height:4px; font-weight:bold; font-size:1.4em; letter-spacing:3.8px;font-family: '<? echo $conf['font']; ?>', sans-serif;"> <? echo $conf['eslogan_corto']; ?></p>
												<p style="line-height:5px;;font-weight:light; font-size:0.84em;"><? echo $conf['eslogan_largo']; ?></p>
													 </a>
					</div--> 
			 
										 
						<button type="button" class="navbar-toggle "  data-toggle="collapse" data-target="#menu">
					 
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					</div>
				 
						<div id="menu" class="collapse navbar-collapse"  >	
								<a href="/"   rel="home">
										 	<img class="img-responsive hidden-xs hidden-sm  hidden-md" style="float:left" 
                           style="   float:left" src="/img/100_<? echo $conf['logoh']; ?>" 
                           alt="<? echo $conf['slogan_corto']; ?>" /> 
											</a>
						 	<!--div class="hidden-xs hidden-sm  hidden-mdpull-left  "  style="margin-top:10px;margin-right:10px;  float:left"   > 
												<a style="color: white" href="/">
													<p style="line-height:4px; font-weight:bold; font-size:1.4em; letter-spacing:3.8px;font-family: '<? echo $conf['font']; ?>', sans-serif;"> <? echo $conf['eslogan_corto']; ?></p>
												<p style="letter-spacing:0.1px;line-height:5px;;font-weight:light; font-size:0.83em;"><? echo $conf['eslogan_largo']; ?></p>
													 </a>
					</div--> 
							
				<div class="menu-menu-container right-left "  >
					
				<ul id="menu-menu" class="nav navbar-nav " >
			 
					 
						 		 
					<? $sql = "SELECT id, titulo, foto, superior, activo, url, array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-principal'   ORDER BY superior, orden, titulo";

	 
	 
	 
	$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));
	// Create an array to conatin a list of items and parents
	$menus = array(
			'items' => array(),
			'parents' => array()
	);
	// Builds the array lists with data from the SQL result
	while ($items = mysqli_fetch_assoc($result)) {
			// Create current menus item id into array
			$menus['items'][$items['id']] = $items;
			// Creates list of all items with children
			$menus['parents'][$items['superior']][] = $items['id'];
			
			 
	}
	// Print all tree view menus 
	 echo createTreeView(0, $menus, 0, 0);
		 ?>
		 
				</ul>


</div>				
				</div>
				
				
			 
				</nav>
			</div>
		</div>
		
	<? if ($conf['pagina_inicio']!=$campo['id'] || $_GET['TIPO']) { 
		
		

		
		?>
		<? if ($campo['tipo']=='entrada' || ($campo['tipo']=="pagina" && $campo['subtipo']=="sencilla")) { ?>
		<div class="enigma_header_breadcrum_title" style="margin-bottom:0px">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><? echo $campo['titulo']; ?></h1>
						<!-- BreadCrumb -->
						<ul class="breadcrumb">
							<li><a href="/">Inicio </a></li>
							<li><a href="/<? echo $campo['tipo']; if (!$campo['tipo']){ echo $_GET['TIPO']; } ?>s"><? echo ucfirst($campo['tipo']); if (!$campo['tipo']){ echo ucfirst($_GET['TIPO']); } ?>s</a></li>
							<li class="active"><? echo $campo['titulo']; ?></li>
						</ul>
						<!-- BreadCrumb -->
					</div>
				</div>
			</div>
		</div>
	<? }} ?>
 
	