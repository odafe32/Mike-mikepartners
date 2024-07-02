<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At Mike & MikePartners, we provide exceptional real estate services with a focus on customer satisfaction. Enquire now." />
    <link rel="canonical" href="https://www.mikeandmikepartners.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mike & MikePartners" />
    <meta property="og:description" content="Mike & MikePartners is a leader in the real estate industry, providing top-notch services for buying, selling, and renting properties. Enquire now." />
    <meta property="og:url" content="https://www.mikeandmikepartners.com/" />
    <meta property="og:site_name" content="Mike & MikePartners" />
    <meta property="article:modified_time" content="2024-06-23T00:09:19+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/logo/logo.png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="fgn/icomoon/style.css" />
    <link rel="stylesheet" href="fgn/flaticon/font/flaticon.css" />
<!-- Title -->
<title>Consultancy and Project Management</title>
<style>
        .nav-link {
           
            text-align: center;
        }
        .navbar-nav {
            width: 100%;}
            .dropdown-item {
                text-align:center;
                color:#000;
                font-weight:600;
            }
         .nav-link:hover,
         .dropdown-item:hover{
            color:#000;
            background:#f6f6f6;
            font-weight:500;
         }
         .intro-but{
            font-size:15px;      border:none;
            backgroud:#000;
         }
         .dropdown-item{
            background:#f7f7f7;
         }
         .intro-but:hover{
            background:#fff;
            border:none;
            color:#000;
         }
         
.img-about img {
  position: relative;
  z-index: 2; }

.img-about.dots {
  position: relative; }
  .img-about.dots:after {
    position: absolute;
    z-index: 1;
    bottom: -50px;
    right: -70px;
    content: "";
    width: 412px;
    height: 220px;
    background: url("./project_img/dots.png") no-repeat; }

    .feature-h {
  margin-bottom: 30px; }
  .feature-h .wrap-icon {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    height: 80px;
    background: #efefef;
    color: #000;
    position: relative;
    border-radius: 50%;
    border: 2px solid transparent;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1); }
    .feature-h .wrap-icon [class^="icon-"] {
      position: absolute;
      left: 50%;
      font-size: 20px;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .feature-h .feature-text {
    margin-top: 15px; 
margin-left:20px;}
    .feature-h .feature-text .heading {
      font-size: 18px; }
  .feature-h:hover .wrap-icon, .feature-h:focus .wrap-icon {
    border: 2px solid #00204a;
    background-color: transparent;
    -webkit-transform: scale(1.07);
    -ms-transform: scale(1.07);
    transform: scale(1.07); }
  .feature-h:hover [class^="icon-"], .feature-h:focus [class^="icon-"] {
    color: #00204a; }
    
.img-fluid {
  max-width: 100%;
  height: auto; }

  .name {
  color: #000;
  font-size:20px;
  text-transform:capitalize;

}

.work {
  font-weight: bold;
  font-size: 15px;
  color:#800000;
}

.about span {
  font-size: 13px;
}

.v-profile {
  color: blue;
  cursor: pointer;
}

.box {
  -webkit-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
  -moz-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
  box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
  margin:20px;
}

.col-md-3 {
  margin-top: 10px;
}
         </style>
</head>
<body>

<!--	Page Loader -->
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> 

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('project_img/project4-b.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0" style="font-weight:600; text-transform:uppercase; fonts  font-family: 'Roboto', sans-serif;'">Consultancy and Project Management</h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
         <div class="section full-row">
      <div class="container">
        <div class="row text-left mb-5">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4" >Consultancy and Project Management</h2>
          </div>
          <div class="col-lg-6">
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    At Mike & Mike Partners, our consultancy and project management services are designed to ensure the success of every project we undertake. We provide expert guidance and oversight throughout the entire project lifecycle, from initial concept through to completion, ensuring that our clients’ visions are realized efficiently and effectively.
    </p>
   
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    Our consultancy services cover a broad spectrum of needs. We offer strategic advice on project feasibility, budgeting, scheduling, and risk management. Our team of experienced consultants works closely with clients to understand their goals, constraints, and opportunities, providing tailored solutions that align with their specific needs.
    </p>
 
</div>
<div class="col-lg-6">
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    Our project managers are adept at navigating the complexities of large-scale developments. They ensure that projects stay on track, on budget, and on time, while maintaining the highest standards of quality. Their proactive approach helps to identify potential issues early, allowing for timely interventions that keep projects moving forward smoothly.
    </p>
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    At Mike & Mike Partners, we are committed to delivering exceptional results. Our consultancy and project management services are grounded in a deep understanding of the industry and a commitment to excellence. We strive to exceed our clients’ expectations, delivering projects that are not only successful but also create lasting value.
    </p>
</div>

        </div>
      </div>
    </div>

        <!--	About Our Company -->
 
        <!--	About Our Company -->        


    <div class="section pt-0 full-row " style="margin-top:200px;">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="img-about dots">
              <img src="project_img/project3-a.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading" style="color:#333;">Consultancy and Project Management</h3>
                <p class="text-black-50">
                Public spaces play a crucial role in our master planning projects. We design plazas, parks, and recreational areas that serve as communal hubs, encouraging social interaction and outdoor activities. These spaces are thoughtfully integrated into the overall development, providing residents with places to relax, play, and connect.
                </p>

              
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
    <div class="section full-row">
      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
            <img src="project_img/project5-a.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
            <img src="project_img/project4-b.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <img src="project_img/project2-c.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>

      </div>
    </div>
<!-- ---------------------------------- -->
<div class="full-row bg-gray">
    <div class="container">
        <div class="row">
          
        </div>
        <div class="text-box-one">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                        <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0"><a>Architectural Design</a></h5>
                        <p style=" font-family: 'Roboto', sans-serif; font-weight:300;">Our architectural design services bring innovative and sustainable solutions to life, blending aesthetics with functionality to create inspiring spaces.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                        <i class="flaticon-house text-primary flat-medium" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0"><a>Interior Design</a></h5>
                        <p>We transform interiors into vibrant and harmonious living spaces that reflect your personal style and cater to your needs, ensuring comfort and elegance.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                        <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0"><a>Master Planning</a></h5>
                        <p>Our master planning services provide comprehensive layouts that integrate various elements of urban and regional planning to create sustainable and functional environments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                        <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                        <h5 class="text-secondary hover-text-primary py-3 m-0"><a>Consultancy and Project Management</a></h5>
                        <p>We offer expert consultancy and project management services to guide your projects from conception to completion, ensuring timely and cost-effective delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ----end------ -->
       <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>