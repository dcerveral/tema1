<? 
/*
* {color: <? echo $conf['textcolor']; ?>;
	font-family: '<? echo $conf['font']; ?>' ;
	font-size: '<? echo $conf['fontsize']; ?>' ;
	]
	*/

?>
a{color: <? echo $conf['acolor']; ?>;}
a:hover{color: <? echo $conf['ahovercolor']; ?>;}

.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
		
		img{max-width:100%;heigh:auto;}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
 
.row {
    margin-left: 0px;
    margin-right: 0px;
} 
 
body {
   
   font-family: 'Open Sans', sans-serif;
   background-color: #fff;

   }
#wrapper{	
    position: relative;
    transition: all 300ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 0s;
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
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	
}
p , .textwidget{
font-family: 'Open Sans', sans-serif;
font-size: 16px;
line-height: 26px;

}
.head-contact-info{
	display: block;
	text-align: right;
	padding-top:5px;
	padding-bottom:2px;
	padding-left:0;
}
.head-contact-info li {
	display: inline;
	margin-right:10px;
	font-size:18px;
	
}
.head-contact-info li a{color:#fff;}
.head-contact-info i {
	margin-right:8px;
	font-size:20px;
	display: inline;
}
.logo{
	text-align:left;
	padding-bottom:0px;
	font-family: 'Open Sans', sans-serif;
}
.logo a{
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	margin-bottom:10px;
	font-size: 50px;
	color: #fff;
}
.logo a:hover{
	color: #fff;
}
.logo p{
	font-family: 'Open Sans', sans-serif;
	margin-top:5px;
	color: #fff;
}
.social{
	display: block;
	text-align: right;
	padding-top:5px;
	padding-bottom:5px;

}
.social li{
	font-size:18px;
	-webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.6);
	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.6);
	display: inline-block;
	height: 35px;
	margin-right: 5px;
	width: 35px;
	text-align: center;
	-webkit-transition: background .5s ease-in-out; 
	-moz-transition: background .5s ease-in-out;
	-o-transition: background .5s ease-in-out;
	-ms-transition: background .5s ease-in-out;
	transition: background .5s ease-in-out; 
	border: 2px solid #ffffff;
	cursor:pointer;
}
.social i  {
	color:#fff;
	line-height:30px;
}
 
.social li.facebook{
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, transparent 50%, #4C66A4 50%);
}
.social li.facebook:hover{
	background-position: 0 -100%;
	background-color:#4C66A4;
}
 
.social li.dribbble{
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, transparent 50%, #EA4C89 50%);
}
.social li.dribbble:hover{
  background-position: 0 -100%;
  background-color:#EA4C89;
 }
 
.social li.twitter{
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, transparent 50%, #f60 50%);
}
.social li.twitter:hover{
	background-position: 0 -100%;
	background-color:#f60;
}
 
.social li.linkedin{
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, transparent 50%, #069 50%);
}
.social li.linkedin:hover{
	background-position: 0 -100%;
	background-color:#069;
}
 
.social li.youtube{
	background-size: 100% 200%;
	background-image: linear-gradient(to bottom, transparent 50%, #C92228 50%);
}
.social li.youtube:hover{
	background-position: 0 -100%;
	background-color:#C92228;
}

.enigma_heading_title {
	display: block;
	margin: 0px 0 50px;
	text-align:center;
}

.enigma_heading_title h3 {
	display: inline-block;
	margin-top: 0px;
	letter-spacing: 1px;
	padding-bottom: 10px;
	line-height: 40px;
}

.enigma_heading_title h3 {
	font-size: 30px;
	font-weight: 500;
	text-transform: uppercase;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
}

.enigma_heading_title2 {
	display: block;
	margin: 0px 0 20px;
}
.enigma_heading_title2 h3 {
	display: inline-block;
	margin-top: 0px;
	letter-spacing: 1px;
	padding-bottom: 10px;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
}

.enigma_heading_title2 h3 {
	font-size: 22px;
	font-weight: 500;
	text-transform: uppercase;
}



 
.carousel{
	margin-bottom:40px;
}

.carousel-inner img{
	width:100%;
}
.carousel-caption{
	top:20%;
}
.carousel-control .fa .fa-chevron-left{
	position: absolute;
	top: 50%;
	z-index: 5;
	display: inline-block;
}

.carousel-text h1 {
	margin: 0 0 0px 0;
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
	font-size: 3em;
	font-family: 'Open Sans', sans-serif;
	font-weight: 700;
	color: #fff;
	text-transform: uppercase;
	text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
	line-height: 1.4em;
	background:rgba(0,0,0,0.6);
	-webkit-animation-delay: .3s;
	-moz-animation-delay: .3s;
	-ms-animation-delay: .3s;
	-o-animation-delay: .3s;
	animation-delay: .3s;
}

.carousel-text .enigma_blog_read_btn{
	font-size: 25px;
	color:#fff;
	display:inline-block;
	transition: all 0.4s ease 0s;
	padding:10px 10px 10px 10px ;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
	margin-bottom:20px;
	box-shadow:0px !important;
}

.carousel-list li {
	color: #fff;
	font-size: 17px;
	margin-bottom: 10px;
	overflow: hidden;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	padding:10px;
	padding-left: 10px;
	padding-right: 10px;
	line-height:23px;
	text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);

}
.carousel-list li:nth-child(1) {
	-webkit-animation-delay: .3s;
	-moz-animation-delay: .3s;
	-ms-animation-delay: .3s;
	-o-animation-delay: .3s;
	animation-delay: .3s;
}
.carousel-list li:nth-child(2) {
	-webkit-animation-delay: .5s;
	-moz-animation-delay: .5s;
	-ms-animation-delay: .5s;
	-o-animation-delay: .5s;
	animation-delay: .5s;
}

.carousel-list li:nth-child(3) {
	-webkit-animation-delay: .7s;
	-moz-animation-delay: .7s;
	-ms-animation-delay: .7s;
	-o-animation-delay: .7s;
	animation-delay: .7s;
}

.enigma_slider_shadow{
	background: url('/<? echo $conf['tema']; ?>/png/shadow.png') no-repeat top center;
	position: absolute;
	left: 0;
	right: 0;
	height: 80px;
	z-index: 99;
	width:100%;
	background-size: 100% 100%;
	height: 60px;
	bottom: -60px;
}


 
.enigma_service {
	padding-top:90px;
	padding-bottom:90px;
	
}
.enigma_service_area{
	border-radius: 0px;
	margin-bottom: 65px;
	transition: all 0.4s ease 0s;
	
}
.enigma_service_iocn{
	width: 90px;
	height: 90px;
	display: block;
	margin-right:20px;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border-radius: 100%;
	text-align:center;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
}
.enigma_service_iocn i{
	color: #fff;
	font-size: 50px;
	position: relative;
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 90px;
	-webkit-transition: all .25s linear;
    -moz-transition: all .25s linear;
    -o-transition: all .25s linear;
    transition: all .25s linear;	
}
.enigma_service_detail h3{
	font-size: 24px;
	
	letter-spacing: normal;
	line-height: 32px;
	word-wrap:break-word;
	margin:0 0 10px;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
}
.enigma_service_detail p{
	font-size: 16px;
	line-height: 27px;
}	
.enigma_service_area:hover .enigma_service_iocn{
	background-position: 0 -100%;
}
.enigma_service_area_2{
	text-align:center;
		border-radius: 0px;
	margin-bottom: 65px;
	transition: all 0.4s ease 0s;
}
.enigma_service_iocn_2 i{
	background: #fff;
	width: 90px;
	height: 90px;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border-radius: 100%;
	text-align:center;
}
.enigma_service_iocn_2 i{
	font-size: 50px;
	position: relative;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 90px;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
}
.enigma_service_detail_2 h3{
	font-size: 24px;	
	letter-spacing: normal;
	line-height: 27px;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
}
.enigma_service_detail_2 p{
	font-size: 18px;
	line-height: 27px;
}	
.enigma_service_area_2:hover .enigma_service_iocn_2 i{
	background-position: 0 -100%;
}
.enigma_service_area_2:hover .enigma_service_iocn_2 i {
	color:#fff;
}
 
.enigma_project_section{
	background:#ecf0f1; 
    padding-top:90px;
	padding-bottom:90px;
	border-top:1px solid #DEE1E2;
	border-bottom:1px solid #DEE1E2;
}

.enigma_carousel-navi {
    text-align:center;
	margin-top:15px;
}
.enigma_carousel-prev {
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline;
	transition: all 0.3s ease 0s;
	padding: 6px 15px 10px;
	margin-right: 5px;
}
.enigma_carousel-next {
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline;
    transition: all 0.3s ease 0s;
	padding: 6px 15px 10px;
}
.enigma_carousel-prev i,
.enigma_carousel-next i {
	font-size: 20px;
	vertical-align: middle;
	transition: all 0.3s ease 0s;
}


.enigma_project_section_col {
	border-radius: 0px;
	margin-bottom: 35px;
	transition: all 0.4s ease 0s;
	text-align: center;
}
.img-wrapper{
	margin-bottom:50px;
	overflow:hidden;
}
.enigma_home_portfolio_showcase {
	position: relative;
	width: 100%;
	overflow: hidden;
}
.enigma_home_portfolio_showcase:hover .enigma_home_portfolio_showcase_title a {
    text-decoration: underline;
}
.enigma_img_responsive {
    width: 100%;
    display: block;
	height: auto;
}
.enigma_home_portfolio_showcase_overlay {
    visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: -80%;
    left: 0;
	background:rgba(0,0,0,0.7);
	-webkit-transition: all .25s linear;
    -moz-transition: all .25s linear;
    -o-transition: all .25s linear;
    transition: all .25s linear;
}

.enigma_home_portfolio_showcase img{
	-webkit-transition: all .45s ease-in;
    -moz-transition: all .45s ease-in;
    -o-transition: all .45s ease-in;
    transition: all .45s ease-in;
}
.enigma_home_portfolio_showcase_overlay_inner {
    position: absolute;
    bottom:-110%;
    left: 0;
    width: 100%;
    overflow: hidden;
    visibility: hidden;
	 -webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;
}
.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons {
    margin-top: 10px;
    text-align: center;
    width: 100%;
}
.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a {
    font-size: 1.3em;
    line-height: 1em;
    display: inline-block;
    margin-left: 2px;
    padding: 8px 8px;
    opacity: 1;
	text-decoration: none;
	margin-right:5px;
	border-radius:100%;
	width:60px;
	height:60px;
	transition: all 0.3s ease 0s;
}
.enigma_home_portfolio_showcase .enigma_home_portfolio_showcase_icons a i{
    font-size: 1.6em;
	line-height:40px;
}
.enigma_home_portfolio_showcase:hover .enigma_home_portfolio_showcase_overlay {
    visibility: visible;
	top: 0;
}
.enigma_home_portfolio_showcase:hover img{
	-webkit-transform: scale(1.9) rotate(15deg);
	-moz-transform: scale(1.9) rotate(15deg);
	-ms-transform: scale(1.9) rotate(15deg);
}
.enigma_home_portfolio_showcase:hover .enigma_home_portfolio_showcase_overlay_inner {
    visibility: visible;
    bottom:40%;
    left: 0;
}
.enigma_home_portfolio_showcase_fade {
    opacity: 0.8;
}
.enigma_home_portfolio_showcase_fade:hover .enigma_home_portfolio_showcase_overlay {
    display: none !important;
}
.enigma_home_portfolio_caption {
    border-radius: 0;
    padding: 0 0 15px;
    text-align: center;
	font-family: 'Open Sans', sans-serif;
	cursor: pointer;
}


.enigma_home_portfolio_caption h3 {
    font-size: 14px;
    font-weight: 600;
	margin: 0;
    padding: 9px 3px 0px;
    line-height: 35px;
	font-family: 'Open Sans', sans-serif;
}
.enigma_home_portfolio_caption small {
    font-size: 13px;
    line-height: 20px;
}
.enigma_home_portfolio_caption {
	background:#fff;
}

.enigma_home_portfolio_caption h3 a {
	color: #404040;
	font-size:22px;
}
.enigma_home_portfolio_caption small {
	color: #777777;
}

.enigma_proejct_button{
	border-radius: 0;
	padding: 15px 5px 5px;
	text-align: center;
	transition: all 0.4s ease 0s;
	text-align: center;
}
.enigma_proejct_button a {
	display: inline-block;
	font-family: 'Raleway', sans-serif;
	font-weight:700;
	font-size: 18px;
	line-height: 20px;
	margin: 8px 0;
	padding: 9px 20px;
	text-align: right;
	text-transform: uppercase;
	transition: all 0.3s ease 0s;
	vertical-align: middle;
}

.enigma_portfolio_page{
	margin-bottom:70px;
}
 
.isotope,
.isotope .isotope-item {
  
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -ms-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s;
}

.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    -ms-transition-property: height, width;
    -o-transition-property: height, width;
    transition-property: height, width;
}

.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -ms-transition-property: -ms-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    transition-property: transform, opacity;
}
 

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -ms-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s;
}

.enigma_portfolio_shadow{
	background: url('/<? echo $conf['tema']; ?>/png/shadow.png') no-repeat top center;
	position: absolute;
	left: 0;
	right: 0;
	height: 80px;
	z-index: 99;
	width:100%;
	background-size: 100% 100%;
	height: 25px;
	bottom: 26px;

}
 
.enigma-project-detail-section{
	 margin-bottom: 70px;
}
.enigma-project-detail-section img{
	margin-bottom:30px;

}
.enigma-project-description h3{
	text-align:left;
	font-size:24px;
	margin: 20px 0;
}
.enigma-project-description h3 span{
	text-align:left;
	font-size:24px;
}
.enigma-project-description p{
	text-align:left;
	font-size:16px;
	font-family: 'Open Sans', sans-serif;
	font-weight:500;
}
.enigma-related-project{
    padding-top: 55px;
	padding-bottom: 30px;
    width: 100%;
}
.enigma-related-project .enigma_portfolio_4col_row{
	margin:0px;
}
.enigma-related-project .enigma_portfolio-4col-column {
	margin-bottom:90px;
}
.enigma-related-project h3{
	margin-bottom: 25px;
    margin-top: 0;
}

.enigma_portfolio_detail_pagi{
	text-align:left;
	overflow: hidden;
	padding-left:0;
	padding-bottom:20px;
}
.enigma_portfolio_detail_pagi li {
	display: block; 
	float: left;
	margin-right:15px;

}
.enigma_portfolio_detail_pagi li a {
padding: 4px 11px;
display: block;
height: 45px;
width: 55px;
transition: all 0.3s ease 0s;

}
.enigma_portfolio_detail_pagi li a span {
	font-size: 22px;
}
.enigma-project-detail-sidebar {
	padding-left:10px;
}
.enigma-project-detail-sidebar p {
	font-family: 'Open Sans', sans-serif;
	font-weight: 700;
	font-size: 16px;
	line-height: 20px;
	margin: 0 0 10px;
	padding-bottom: 15px;
    padding-top: 0px;
}
.enigma-project-detail-sidebar p small {
	font-family: 'Open Sans', sans-serif;
	font-size: 15px;
	padding-left: 0px;
	display:block;
	margin-top:6PX;
}

.enigma-project-detail-sidebar .launch-enigma-project a {
	display: inline-block;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	line-height: 20px;
	margin: 15px 0 15px;
	padding: 8px 30px;
	text-align: right;
	text-transform: lovercase;
	transition: all 0.4s ease 0s;
	vertical-align: middle;
	
}
.enigma-project-detail-sidebar .launch-enigma-project a {
	text-decoration:none;
}

.enigma_project_detail_related_projet{
	margin-bottom:70px;

}
.enigma_project_detail_related_projet .enigma_carousel-navi {
	text-align: center;
	display: inline-flex;
	margin-top:0px;
	float: right;
}

.sidebar-img{
	margin-right: 5px;
}

.enigma-project-description h3 span{
	color:#f9504b;
}
.enigma-project-description p{
	color:#6a6a6a;	
}
.enigma-related-project{
	background: none repeat scroll 0 0 #F9F9F9;
    border-top: 2px solid #D1D1D1;
}


 
.enigma_gallery_page{
	margin-bottom:70px;
	width:100%;
	float:left;
	margin-right: auto; 
	margin-left: auto; 
}


.enigma_gallery-padding{
	padding-left:0px;
	padding-right:0px;
	margin-bottom:0px;
}
.enigma_gal_img{
	position: relative;
	overflow: hidden; 
}

.gallery_wrapper{
	margin-bottom:0px;
	overflow:hidden;
}
.enigma_gallery_showcase {
	
	position: relative;
	width: 100%;
	overflow: hidden;
}
.enigma_gallery_blog{
	width: 24.98%;
	margin-right: 0;
	margin-bottom: 0;
	float: left;
}
.enigma_img_responsive {
    width: 100%;
    display: block;
}
.enigma_gallery_showcase_overlay {
      visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: -80%;
    left: 0;
	background:rgba(0,0,0,0.7);
	-webkit-transition: all .25s linear;
    -moz-transition: all .25s linear;
    -o-transition: all .25s linear;
    transition: all .25s linear;
}

	.enigma_gallery_showcase img{
	-webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;

}
.enigma_gallery_showcase_overlay_inner {
    position: absolute;
    bottom:-110%;
    left: 0;
    width: 100%;
    overflow: hidden;
    visibility: hidden;
	 -webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;


}
.enigma_gallery_showcase .enigma_gallery_showcase_icons {
    margin-top: 10px;
    text-align: center;
    width: 100%;
}
.enigma_gallery_showcase .enigma_gallery_showcase_icons a {
  
    display: inline-block;
    margin-left: 2px;
    padding: 8px 8px;
    opacity: 1;
	text-decoration: none;
	margin-right:5px;
	border-radius:100%;
	width:60px;
	height:60px;
	transition: all 0.3s ease 0s;
	
}

.enigma_gallery_showcase .enigma_gallery_showcase_icons a i{
    font-size: 1.6em;
	line-height:40px;
	
}
.enigma_gallery_showcase:hover .enigma_gallery_showcase_overlay {
    visibility: visible;
	top: 0;
}

.enigma_gallery_showcase:hover .enigma_gallery_showcase_overlay_inner {
    visibility: visible;
     bottom:40%;
    left: 0;
	
}

  
.enigma_blog_area{
	padding-top: 90px;
	padding-bottom: 90px;
}
.enigma_blog_wrapper{
	margin-bottom: 90px;
}
.enigma_blog_thumb_wrapper{
	margin-bottom:40px;
	border-radius: 4px;
	margin-top:10px;
	padding:10px;
}

.enigma_blog_thumb_wrapper img {
	width:100%;
	
}

.enigma_blog_thumb_wrapper h2 {
	font-size: 22px;
	margin-bottom: 8px;
	padding-right: 0px;
	line-height:1.4;
	margin-top:0px;
	
}
.enigma_blog_thumb_wrapper h2 a:hover {
	color: #34495e !important;
}
.enigma_fuul_blog_detail_padding h2 a:hover {
	color: #34495e !important;
}
.enigma_blog_thumb_wrapper{
	position:relative;
	overflow:hidden;
}

.enigma_blog_thumb_date{
	list-style: none;
	text-align:left;
	padding-left:0;
	color:#9b9b9b;
	font-size:14px;
	margin-bottom: 0px;
}
.enigma_blog_thumb_date li{
	display:inline-block;
	color:#555;
	margin-right:15px;
	margin-bottom: 5px;
}
.enigma_blog_thumb_date li i{
	margin-right:8px;
	font-size:22px;
}

.enigma_blog_thumb_date li a{
	color:#555;
}
.enigma_blog_thumb_wrapper p{
	font-size:16px;
	padding-right:8px;
	margin-bottom: 20px;
	line-height:27px;
}
.enigma_blog_thumb_wrapper span a i{
	margin-right:6px;
	font-size:20px;
	vertical-align: middle;
}

.enigma_tags {
	margin-bottom:8px;
}
.enigma_tags a ,.enigma_cats a{
	padding: 3px 7px;
	margin: 4px 4px 4px 0;
	margin-bottom:10px;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
	color: #515151;
	text-decoration: none;
	font-size: 0.9em;
	white-space: nowrap;
	display: inline-block;
}
.enigma_tags a i{
	margin-right:5px;
	transition: all 0.4s ease 0s;
}
.enigma_blog_read_btn{
	font-size: 16px;
	color:#fff;
	display:inline-block;
	transition: all 0.4s ease 0s;
	padding:5px 5px 5px 5px;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
	margin-bottom:20px;
}
.enigma_blog_thumb_wrapper_showcase {
    position: relative;
    padding: 0px;
	width: 100%;
	overflow: hidden;
	margin-bottom: 15px;
	
}
.enigma_blog_thumb_wrapper_showcase_overlay {
      visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: -80%;
    left: 0;
	background:rgba(0,0,0,0.5);
	-webkit-transition: all .25s linear;
    -moz-transition: all .25s linear;
    -o-transition: all .25s linear;
    transition: all .25s linear;
}

	.enigma_blog_thumb_wrapper_showcase img{
	-webkit-transition: all .45s ease-in;
    -moz-transition: all .45s ease-in;
    -o-transition: all .45s ease-in;
    transition: all .45s ease-in;
	

}
.enigma_blog_thumb_wrapper_showcase_overlay_inner {
    position: absolute;
    bottom:-110%;
    left: 0;
    width: 100%;
    overflow: hidden;
    visibility: hidden;
	 -webkit-transition: all .25s ease-in;
    -moz-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;


}
.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons {
    margin-top: 10px;
    text-align: center;
    width: 100%;
}
.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a {
    font-size: 1.3em;
    line-height: 1em;
    display: inline-block;
    margin-left: 2px;
    padding: 8px 8px;
    opacity: 1;
	text-decoration: none;
	margin-right:5px;
	border-radius:100%;
	width:60px;
	height:60px;
	
}

.enigma_blog_thumb_wrapper_showcase:hover .enigma_blog_thumb_wrapper_showcase_overlay {
    visibility: visible;
	top: 0;
}

.enigma_blog_thumb_wrapper_showcase:hover img{
	-webkit-transform: scale(1.9) rotate(15deg);
	-moz-transform: scale(1.9) rotate(15deg);
	-ms-transform: scale(1.9) rotate(15deg);}

.enigma_blog_thumb_wrapper_showcase:hover .enigma_blog_thumb_wrapper_showcase_overlay_inner {
    visibility: visible;
    bottom:40%;
    left: 0;
	
}
.enigma_blog_thumb_wrapper_showcase .enigma_blog_thumb_wrapper_showcase_icons a i{
     font-size: 1.6em;
	line-height:40px;
	
}

 

.enigma_blog_full{
	margin-bottom: 20px;
	margin-top: 10px;
	overflow:auto;
	padding: 0px;
	float: none;
}

.enigma_blog_full .enigma_blog_thumb_wrapper_showcase {
margin-bottom:20px;

}
 
.blog-date-left{
	list-style: none;
	float:left;
	padding: 0px;
	transition: all 0.4s ease 0s;

}
.blog-date-left li{
	width:100px;
	height:100px;
	text-align:center;
	transition: all 0.4s ease 0s;
}

.blog-date-right{
	list-style: none;
	float:right;
	padding: 0px;
	transition: all 0.4s ease 0s;

}
.blog-date-right li{
	width:100px;
	height:100px;
	text-align:center;
	transition: all 0.4s ease 0s;
}


.enigma_post_date {
	padding-top: 10px;
	padding-left:10px;
	padding-right:10px;
	padding-bottom: 10px;
	transition: all 0.4s ease 0s;
}

.enigma_post_date span.date {
	font-size: 16px;
    line-height: 35px;

}
.enigma_post_date h6 {
	font-size: 14px;
	font-weight: bold;
	line-height: 20px;
	margin-top: 10px;
	text-align: center;
	color:#fff;
}

.enigma_post_author img {
	height: 100px !important;
	max-width: 100%; 
}

.enigma_post_author {

	width: 100px;
	text-align: center;
	margin-top: 0px;
}

.enigma_blog_comment{

	border-radius: 0px;
	display: block;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	width: 100px;
	padding-top: 10px;
	padding-left:10px;
	padding-right:10px;
	padding-bottom: 10px;
	text-align: center;
	margin-top: 0px;
	color:#999999;
	background:#f6f6f6;

}
.enigma_blog_comment a{
	color:#999999;
}
.enigma_blog_comment i{
	font-size: 68px;
	line-height: 55px;
	transition: all 0.4s ease 0s;

}
.enigma_blog_comment h6{
	font-size:16px;
	color:#999999;
	transition: all 0.4s ease 0s;
}

.post-content-wrap {
	float: left;
	width:86%;
} 

.post-content-wrap-right {
	float: right;
	width:86%;
}
.post-content-wrap-right img{
	width:100%;
}
.enigma_blog_post_content{
	float: left;
	margin-bottom: 10px;
	width: 100%;
	
}
.enigma_blog_post_content p {
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	line-height: 27px;
	margin: 0 0 20px;
}
.enigma_blog_post_content p {
	color: #777777;
}
.enigma_fuul_blog_detail_padding{

	padding-left: 20px;
	float: left;
	width: 100%;
}
.enigma_fuul_blog_detail_padding h2 {
	margin-top:0px;
}
.enigma_fuul_blog_detail_padding h2 a{

	font-size: 28px;
	margin-bottom: 8px;
	padding-right: 0px;
	line-height: 35px;
	margin-top: 0px;
	transition: all 0.4s ease 0s;

}

.enigma_fuul_blog_detail_padding p {
	font-size: 16px;
	line-height: 26px;
	margin: 0 0 20px;
}
.blog-sep.header-sep {
	margin-top: 40px;
	margin-bottom: 50px;
}
.header-sep {
	border: 0;
	height: 4px;
	color: #f5f5f5;
	background-color: #f5f5f5;
}
 
.enigma_recent_widget_post {
    margin: 0 0 5px !important;
    padding-bottom: 16px;
	border-bottom: 0px solid #6B6B6B;
	vertical-align:middle;
}
.enigma_recent_widget_post:last-child{
	margin: 0 0 0px !important;
}

.enigma_recent_widget_post h3 , .enigma_footer_widget_column ul li {
   	font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 2px;
    margin-top: -2px;
	
}
.enigma_recent_widget_post h3 a {
    transition: all 0.2s ease 0s;
}

.enigma_recent_widget_post h3 a:hover {
	color: #ffffff;
}

.enigma_recent_widget_post_move{
	float: left;
}
.enigma_recent_widget_post_img {
    margin-right: 10px !important;
	width: 64px;
	height: 64px;
    transition: opacity 0.3s ease-out 0s;
	display: block;
}

.enigma_recent_widget_post_date {
	font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    line-height: 20px;
	color: #ffffff;
}

.enigma_sidebar_widget {
	margin-bottom: 30px;
	margin-top: 10px;
	overflow: hidden;
	box-shadow: 0 0 6px rgba(0,0,0,.7);
	padding: 0px 20px 15px 20px;
	
}
.enigma_sidebar_widget_title{
	margin-bottom:20px;
	margin-left: -20px;
	margin-right: -20px;
	text-align:center;
	padding-top:10px;
	padding-bottom:10px;
	
}
.enigma_sidebar_widget .enigma_recent_widget_post_date{
color: #6a6a6a;
}
.enigma_sidebar_widget .enigma_recent_widget_post h3 a:hover {
	color: #6a6a6a;
}
.enigma_sidebar_widget .enigma_recent_widget_post h3 {
    font-weight: 600;
	font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    line-height: 20px;
    margin-bottom: 2px;
    margin-top: -2px;
}

.enigma_sidebar_widget h3 {
	display: inline-block;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	line-height: 22px;
	margin-bottom: 5px;
	margin-top: 0px;
}

.enigma_sidebar_widget_title h2{
	margin:0px;
	clear: both;
	font: normal normal 18px Oswald;
	text-transform: uppercase;
	text-align: center;
	font-weight: normal;
	font-size: 22px;
	color: #fff;
}

.enigma_sidebar_blog_shadow {
	background: url('/<? echo $conf['tema']; ?>/png/shadow.png') no-repeat top center;
	position: absolute;
	left: 0;
	right: 0;
	height: 80px;
	z-index: 99;
	width: 100%;
	background-size: 100% 100%;
	height: 25px;
	bottom: 26px;
}

 
.enigma_blog_pagination {
    margin-bottom: 20px;
    overflow: auto;
    padding: 0 0 0px;
	float: none;
}
.enigma_blog_pagi {
    margin: 0px 0 0px;
    overflow: hidden;
    padding: 4px 0;
}
.enigma_blog_pagi a {
    border: 0 none;
    cursor: pointer;
	display: inline-block;
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	font-weight: normal;
	line-height: 20px;
	margin: 0 0px 10px 4;
	padding: 9px 16px;
	transition: all 0.3s ease 0s;
	vertical-align: baseline;
	white-space: nowrap;
}

 
.enigma_sidebar_widget ul li a , .enigma_footer_widget_column ul li a {
    position:relative;
}    
.enigma_sidebar_widget ul li a:before , .enigma_footer_widget_column ul li a:before {
        position:absolute;
        font-family: FontAwesome;
        top:0;
        left:-14px;
        content: "\f105";
    }
.enigma_footer_widget_column ul li ,.enigma_footer_widget_column ul#recentcomments li a{
	text-shadow: 0 0 1px rgba(0, 0, 0, 0.01);
	font-family: "Open Sans",sans-serif;
	font-size: 16px;
	line-height: 20px;	
	transition: all 0.2s ease 0s;
}

.enigma_sidebar_link p a , .enigma_sidebar_widget ul li a{
	transition: all 0.4s ease 0s;
	display: block;
	font-family: "Open Sans",sans-serif;
	font-size: 16px;
	line-height: 20px;
}
.enigma_sidebar_widget ul li ,.enigma_footer_widget_column ul#recentcomments li {list-style:none;}
.enigma_sidebar_widget ul li a{ padding-left: 10px; }
.enigma_sidebar_link p a i {
	margin-right: 10px;
}
.enigma_sidebar_link p ,.enigma_sidebar_widget ul li{
	display: block;
	font-family: "Open Sans",sans-serif;
	font-size: 16px;
	transition: all 0.4s ease 0s;
	padding-bottom: 10px;
	padding-top: 0;
}
.enigma_sidebar_link p a , .enigma_sidebar_widget ul li a{
	color: #6a6a6a;
}

 
.enigma_widget_tags , .tagcloud{
	margin: 0px 0 10px;
	overflow: hidden;
	padding: 0;
}
.enigma_widget_tags a , .tagcloud a ,.enigma_footer_widget_column .tagcloud a{
	border: 0 none;
	cursor: pointer;
	display: inline-block;
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px !important;	
	line-height: 20px;
	margin: 0 5px 10px 0;
	padding: 8px 12px;
	transition: all 0.8s ease 0s;
	vertical-align: baseline;
	white-space: nowrap;
}
.enigma_footer_widget_column .tagcloud {
	padding: 8px;
}
.enigma_widget_tags a  , .tagcloud a ,.enigma_footer_widget_column .tagcloud a {
	border: 1px solid #edf0f2;
	color: #555;
	-webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
}
 
.flickr-photos-list {
	padding-left: 0;
	list-style: none;
	margin-bottom: 0;
	overflow: hidden;
}

.flickr-photos-list > li {
	float: left;
	margin-right: 5px;
	margin-bottom: 5px;
}
.flickr-photos-list > li img {
	width: 73px;
	height: 73px;
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.flickr-photos-list > li img:hover {
    opacity: 0.65;
    filter: alpha(opacity=65);
}
.enigma_sidebar_left_side{

float:left;

}
.enigma_blog_right_side{
	float:right;
}

 
.enigma_author_detail_section{
	margin-bottom:60px;
	margin-top:20px;
}

.author_detail_img{
	width:100px;
	height:100px;
	float:left;
	margin-right:20px;
	margin-bottom:2px;
	
}
.enigma_author_detail_name{
	font-size: 18px;
	line-height: 20px;
	margin: 0px 0 5px;
	color:#fff;
}
.enigma_author_detail_wrapper p{
	font-family: 'Open Sans', sans-serif;
	font-size: 15px;
	line-height: 25px;
	margin: 0 0 0px;
	color:#fff;
}
.enigma_comment_section {
    overflow: auto;
    padding: 0 0 15px;
	margin: 0px 0px 0px 0px;
	float: none;
}
.enigma_comment_title {
    display: block;
    margin: 0 0 5px;
}
.enigma_comment_title h3 {
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;
    line-height: 25px;
    margin: 0 0 -2px;
    padding-bottom: 11px;
    padding-right: 10px;
}
.enigma_comment_title h3 > i {
	font-size: 34px;
}

.enigma_comment_box {
    margin: 0 0 10px !important;
    padding: 40px 0px 0 0;
    position: relative;
}
.pull_left_comment{
	margin-right: 15px;
	float: left;
}
.comment_img {
    height: 80px;
	width: 80px;
	margin: 0 0 20px;
}
.enigma_comment_detail {
    margin-left: 0px;
	padding: 20px;
}
.enigma_comment_detail_title {
    font-family: 'Open Sans', sans-serif;
	font-weight: 700;
    font-size: 18px;
	line-height: 20px;
    margin: 0px 0 5px;
}

.enigma_comment_detail p{
   font-family: 'Open Sans', sans-serif;
    font-size: 15px;
	line-height: 25px;
	margin: 0 0 20px;
}
.enigma_comment_date{
   padding-bottom:5px;
   margin-bottom: 10px;
   line-height: 20px;
   font-size: 14px;
   display:block;
   font-weight: 600;
	font-family: 'Open Sans', sans-serif;
}
.reply {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
	font-weight: 700;
}
.reply a {
	font-size: 16px;
	line-height: 22px;
}
.reply a > i {
	font-size: 16px;
	position: relative;
	padding-right: 5px;
	top: 2px;
}
.enigma_form_group {
margin-bottom: 20px;
}
.enigma_comment_form_section {
    margin-bottom: 60px;
    padding: 0 0 15px;
	margin: 20px 0 45px;
	float: none;
}
.enigma_comment_form_section h2 {
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;
    letter-spacing: 1px;
    line-height: 25px;
    margin: 0 0 30px;
	padding: 0 0 15px;
}
.enigma_comment_form_section h2 > i {
    font-size: 32px;
	position: relative;
	top: 5px;
}
.enigma_comment_form_section label {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
	line-height: 20px;
	margin: 0 0 11px;
}

.enigma_con_input_control {
    display: block;
    font-size: 14px;
    height: 45px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    vertical-align: middle;
    width: 100%;
}
.enigma_con_textarea_control {
    display: block;
    font-size: 14px;
    height: auto;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    vertical-align: middle;
    width: 100%;
}
.enigma_con_input_control:focus, .enigma_con_textarea_control:focus {
  outline: 0;
}

.enigma_con_input_control {
    background-image: none;
}
.enigma_con_textarea_control {
    background-image: none;
}
.enigma_send_button , #enigma_send_button{
	font-weight: 600;
	font-family: 'Open Sans', sans-serif;
	display: inline-block;
	padding: 15px 40px;
	margin-bottom: 0;
	font-size: 18px;
	
	line-height: 1.428571429;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 2px solid transparent;
	transition: all 0.4s ease;
	
}



.enigma_comment_title h3 {
	color: #121212;
	border-bottom: 1px solid #E9E9E9;
}
.enigma_comment_title h3 > i {
	color:#ccc;
}
.enigma_comment_detail {
	background: #F8F8F8;
	border: 2px solid #F1F0F0;
}

.enigma_comment_detail p{
	color:#6a6a6a;
}
.enigma_comment_date{
   color:#A0A0A0;
}

.enigma_comment_form_section h2 {
	color: #121212;
	border-bottom: 1px solid #E0E0E0;
}
.enigma_comment_form_section h2 > i {
	color:#ccc;
}
.enigma_con_input_control {
	background-color: #FFFFFF;
    border: 1px solid #c5c5c5;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555555;
}
.enigma_con_textarea_control {
	background-color: #FFFFFF;
    border: 1px solid #c5c5c5;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555555;
}


 
.enigma_testimonial_area{
	background: #ecf0f1;
	padding-top: 90px;
	padding-bottom: 90px;
	border-top: 1px solid #DEE1E2;
	border-bottom: 1px solid #DEE1E2;
	text-align:center;
}
.enigma_testimonial{
	text-align:center;
	margin-bottom:15px;
}
.enigma_testimonial_area i{
	font-size:60px;
	margin-bottom:20px;
}
.enigma_testimonial_area p{
	color:#727272;
	font-size: 20px;
	font-family: 'georgia';
	font-style: italic;
	margin-bottom:20px;
	line-height: 32px;
}
.enigma_testimonial_area img{
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	margin-bottom: 10px;
	width:150px;
	height: auto;
}
.enigma_testimonial_area h3{

	margin: 0 0 10px 0;
}
.enigma_testimonial_area span{
	margin: 0 0 20px 0;
	font-size:16px;
	color:#666;
}
.pager a{
    border-radius: 20px;
    cursor: pointer;
    display: inline-block;
    height: 15px;
    text-indent: -9999px;
    width: 15px;
	margin: 0 3px;
	text-decoration: none outside;
}
.pager a:focus{
	outline:none;
}
.pager {
    list-style: none outside none;
    margin: 0px;
    padding-left: 0;
    text-align: center;
	margin-top: 30px;
}



 

.enigma_client_area{
	padding-top: 90px;
	padding-bottom: 40px;

}
.enigma_client_wrapper{
	border: 4px solid #ecf0f1;
	opacity: 0.95;
	filter: alpha(opacity=95);
	text-align:center;
	transition: all 0.3s ease 0s;
	margin-bottom: 50px;
	
}

.enigma_client_area .enigma_heading_title2{
	text-align:right;
	margin-bottom:40px;
}

.enigma_client_navi {
	overflow: hidden;
	display: inline;
}
.enigma_client_prev {
	
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline;
	transition: all 0.3s ease 0s;
	padding: 6px 15px 10px;
	margin-right: 5px;
	
}
.enigma_client_next {
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline;
    transition: all 0.3s ease 0s;
	padding: 6px 15px 10px;
}
.enigma_client_prev i,
.enigma_client_next  i {
	font-size: 20px;
	vertical-align: middle;
	transition: all 0.3s ease 0s;
}
 
.enigma_callout_area{
	width:100%;
	padding-top:39px;
	padding-bottom:40px;
	display:block;
	overflow:hidden;
	
}

.enigma_callout_area p{
	font-size:22px;
	font-family: 'Roboto', sans-serif;
	font-weight: 300;
	-webkit-font-smoothing: antialiased;
	line-height: 35px;
	padding-top:10px;
}
.enigma_callout_area p{
	color:#fff;
}
.enigma_callout_area p i{
	font-size:40px;
	float:left;
	margin-right:20px;
	vertical-align:middle;
}
.enigma_callout_btn {
	float: right;	
}
.enigma_callout_area a {
    display: inline-block;
	font-family: 'Raleway', sans-serif;
	font-size: 18px;
	font-weight:700;
	line-height: 20px;
	border-radius:10px;
	padding: 16px 18px;
	text-align: right;
	text-transform: uppercase;
	transition: all 0.3s ease 0s;
	vertical-align: middle;
}
.enigma_callout_area a{
	transition: all 0.4s ease 0s;
	text-decoration:none;
	color:#fff;
	text-align:center;
}

.enigma_callout_area a {
	color: #FFFFFF;
	background-size: 100% 200%;
	 background-image: linear-gradient(to bottom, transparent 50%, #393c40 50%);
   -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
	border:4px solid #393c40;
}
.enigma_callout_area a:hover {
	background-position: 0 -100%;
	color:#fff;
}

.enigma_callout_shadow {
	position: absolute;
	left: 0;
	right: 0;
	height: 54px;
	z-index: 99;
	width: 100%;
	background-size: 100% 100%;
	margin-top:40px;
	background: url('/<? echo $conf['tema']; ?>/png/shadow.png') center center no-repeat;
	

}
 

.enigma_footer_widget_area{
	padding: 38px 0 20px;
}

.enigma_footer_widget_area h6 ,.enigma_footer_widget_column .textwidget{
	color: #f2f2f2;
    font-family: "Open Sans",sans-serif;
    font-size: 16px;
    line-height: 27px;
    margin-top: 25px;
}

.enigma_footer_widget_area p {
	font-size: 13px;
	line-height: 22px;
	font-family: 'Open Sans', sans-serif;
}

.enigma_footer_widget_area h6 {
	color: #95a5a6;
}
.enigma_footer_widget_area p {
	color: #ffffff;
}


.enigma_footer_widget_area{
	background: <? echo $conf['secundario']; ?>;
}

.enigma-footer-separator{
	background-color: #ffffff;
	height: 3px;
	margin-top:10px;
	text-align:center;
	width: 100px;
}
.enigma_footer_widget_title{
	color: #ffffff;
	text-shadow: 0px 1px 2px #2a2a2a;
}

.enigma_footer_widget_title{
	font-family: 'Open Sans', sans-serif;
	font-size: 24px;
	margin: 0px 0px 25px 0px;
	line-height: 25px;
	letter-spacing: 1px;
}

.enigma_footer_widget_column{
	margin-bottom: 50px;
}


.enigma_footer_widget_column address{
	font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    line-height: 25px;
}

.enigma_footer_widget_column address{
	color: #9e9d9d;
	
}
.enigma_footer_widget_column address p{
	color: #f2f2f2;
	padding:0 0 10px;
	font-size:16px;
}
.enigma_footer_widget_column address p i{
	margin-right:10px;
}
.enigma_footer_widget_column address a{
	color: #CCCCCC;
	
}
.enigma_footer_widget_column address a:hover{
	color: #ffffff;
}



.enigma_footer_widget_link {
    margin: 20px 0 10px;
    overflow: hidden;
    padding: 4px 0;
}
.enigma_footer_widget_link a {
    display: block;
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    line-height: 20px;
    margin: 0 0 10px;
    overflow: hidden;
    padding: 0px 0 0px;
    transition: all 0.4s ease 0s;
}

.enigma_footer_widget_link a {
	color: #ffffff;
	text-decoration:none;
}
.enigma_footer_widget_link a:hover {
	color:#f8504b;
}


 

.enigma_footer_area{
    padding: 10px 0 0px;
}
.enigma_footer_area p {
   font-family: 'Open Sans', sans-serif;
	line-height: 20px;
    font-size: 13px;
    bottom:0;
	text-align:center;
	padding-top:12px;
}

.enigma_footer_area p {
	color: #f2f2f2;
	font-size:15px;
}
.enigma_footer_area p span{
	color: #fa504b;
}
.enigma_footer_area p a {
    color: #000000;
}
.enigma_footer_area p a:hover {
    color: #ffffff;
}
.enigma_footer_copyright_info{
	float:left;
}
.enigma_footer_social_div{
	float:right;
}

 
.enigma_scrollup {
    width: 45px;
    height: 40px;
    opacity: 0.5;
    position: fixed;
    bottom: 100px;
    right: 30px;
    display: none;
	border-radius: 2px;
    text-align: center;
    color: #fafafa;
    font-size: 25x;
    background: #3b3b3b;
    z-index: 9999;
	-webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.enigma_scrollup i {
    line-height: 38px;
	font-size: 24px;
	vertical-align:middle;
}
.enigma_scrollup:hover{
	opacity: 0.8;
}
a.enigma_scrollup:hover i, a.enigma_scrollup:focus i {
    text-decoration: none;
    color: #fafafa;
    outline: none;
	
}
 
.scrollimation.fade-in{
	opacity:0;
	-webkit-transition:opacity 0.6s ease-out;
	transition:opacity 0.6s ease-out;
}

.scrollimation.fade-in.in{
	opacity:1;
}

.scrollimation.scale-in{
	opacity:0;
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
 

.wp-caption-text { font:14px;text-align: center; }
.gallery-caption { font:14px; }
.bypostauthor{ font:14px; }
.alignright{ font:14px; text-align:right;display: inline;
float: right; }

.alignleft {
display: inline;
float: left;
margin-right: 1.5em;
}
.aligncenter{font:14px; text-align:center; }
.wp-caption {
border: 1px solid #ccc;
margin-bottom: 1.5em;
max-width: 100%;font:14px;
}
.wp-caption img[class*="wp-image-"] {
display: block;
margin: 1.2% auto 0;
max-width: 98%;
}
.wp-caption .wp-caption-text {
margin: 0.8075em 0;
}
.enigma_fuul_blog_detail_padding img {max-width: 100%;height:auto;}
.enigma-sidebar .input-group{max-width:100%;}
.enigma-sidebar ul.sub-menu,.enigma-sidebar ul.children , .enigma_footer_widget_area ul.sub-menu,.enigma_footer_widget_area ul.children {padding:0;}

ul#recentcomments li a:before , .enigma_footer_widget_column ul#recentcomments{content:'';}
ul#recentcomments li a {line-height:11px;font-size:14px;}
.enigma_footer_widget_column ul {padding:9px;list-style-type:none;}
table.table, table {
width: 100%;
text-align: left;
background-color: transparent;
}
.enigma_footer_widget_column ul {padding:9px;}
.enigma_footer_widget_column ul {padding-left:0;}
.enigma_footer_widget_column ul li {padding: 3px;}
.post-content-wrap-right .enigma_fuul_blog_detail_padding{
	padding-right: 20px;
}
.callout-box.callout-box2 {
  padding: 26px 20px;
  background: #279fbb;
  color: #f1f1f1;
  border: 0;
}
.callout-box .callout-content h2 {
  font-weight: normal;
  line-height: 30px;
  font-size: 22px;
  margin: 0;
  color: #4b4b4b;
}
.screen-reader-text{display : none;}
.enigma_blog_post_content img {max-width:100%;}
 
#wp-calendar tbody tr td {
text-align: center;
}
#wp-calendar caption {
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
.enigma_footer_widget_column table td {
color:#e7e7e7;
}
.enigma_footer_widget_column #wp-calendar thead tr th {
color: #fff;
}
 
.enigma-sidebar .flickr_badge_image {
    float: left;
    margin-bottom: 5%;
    margin-left: 5%;    
	transition: all 0.2s ease-in-out 0s;
}
.flickr_badge_image:hover{opacity:0.65;}
.enigma_footer_widget_column .flickr_badge_image {
     float: left;
    margin-bottom: 5px;
    margin-right: 5px;
}
.sidebar .widget-content p {
    line-height: 150%;
}
.widgetmore {
    clear: both;
    display: block;
}
.sticky{}
 
.enigma_fuul_blog_detail_padding h1,.enigma_fuul_blog_detail_padding h3,.enigma_fuul_blog_detail_padding h4,
.enigma_fuul_blog_detail_padding h5 , .enigma_fuul_blog_detail_padding h5, .enigma_fuul_blog_detail_padding h6 
{
color: #31A3DD;
margin-top: 10px;
margin-bottom: 10px;
}
#wblizar_nav  span{
padding-top: 20px;
}
.nav-previous {
    
    width: 50%;
}
.nav-next {
  
	padding-left: 15%;
    width: 50%;
}
.navigation_en{padding-bottom:5%;}
.fa-arrow-left:before{content: "\f060" ;}
.fa-arrow-right:before{content: "\f061" ;}
 
.col-md-3.col-sm-4.col-center.weblizar-flickr-div a {
  display: inline-block !important;
}
.LoadingImg img{
	display: none;
}
#fancybox-loading{
	display: none;
}
 
.enigma_blog_full {
  overflow: hidden;
}
 
.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	color: #21759b;
	display: block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;  
}