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
<title>About Us</title>
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
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->

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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0" style="font-weight:600; text-transform:uppercase; fonts  font-family: 'Roboto', sans-serif;'">About US</></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
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
            <h2 class="font-weight-bold heading text-primary mb-4" >About Us</h2>
          </div>
          <div class="col-lg-6">
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
     
     providing top-notch services for buying, selling, and renting properties. Our team is dedicated to ensuring customer satisfaction by offering personalized and professional services tailored to meet each client's unique needs.
    </p>
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    we believe in creating lasting relationships with our clients by providing exceptional service and unparalleled expertise. Our mission is to make the real estate process seamless and enjoyable for our clients, whether they are first-time homebuyers or seasoned investors.
    </p>
 
</div>
<div class="col-lg-6">
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
        Our services include architectural design, interior design, master planning, and consultancy and project management. We take pride in delivering high-quality results that exceed our clients' expectations and contribute to their success.
    </p>
    <p class="text-black" style="font-weight:400; font-family: 'Roboto', sans-serif;">
    We are committed to staying at the forefront of the industry by continuously improving our services and embracing innovative solutions. Our team of experienced professionals is always ready to assist clients with their real estate needs, ensuring that they achieve their goals and dreams.
    </p>
</div>

        </div>
      </div>
    </div>

        <!--	About Our Company -->
        <div class="full-row">
            <div class="container">
                
				
				<?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
				<div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $row['1'];?></h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content">
                            <?php echo $row['2'];?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img"> <img sty src="admin/upload/<?php echo $row['3'];?>" alt="about image"> </div>
                    </div>
                </div>
				
				<?php } ?>
				
            </div>
        </div>
        <!--	About Our Company -->        


    <div class="section pt-0 full-row " style="margin-top:200px;">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="img-about dots">
              <img src="project_img/hero_bg_3.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading" style="color:#333;">Architectural Design</h3>
                <p class="text-black-50">
                Our team of talented architects and designers work closely with clients to create stunning, functional spaces that reflect their unique style and needs.
             
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading" style="color:#333;">Master Planning</h3>
                <p class="text-black-50">
                Our master planning services ensure that every project is thoughtfully designed and strategically executed to meet both current and future needs.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading" style="color:#333;">Consultancy and Project Management</h3>
                <p class="text-black-50">
                From initial concept to final completion, we provide expert consultancy and project management services to guide you through every step of your real estate journey.
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
            <img src="project_img/img_1.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
            <img src="project_img/img_3.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <img src="project_img/img_2.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>

      </div>
    </div>

    <!-- ------people----- -->
     <div class="container   row-full" style="background:#f2f2f2 font-family: 'Roboto', sans-serif;">
    <div class=" text-center mt-5 mb-2" >
        <h1 class="mb-0" style="color:#000;">Meet our team</h1><span>Crafting Dreams, Building Realities</span></div>
    <div class="container mt-3">
        <div class="row">
           
              <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">MANDELA DAVID</h5><span class="work d-block">Senior Associate / Design Manager</span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">OGBALA MOSES</h5><span class="work d-block">Associate / Project Engineer</span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">BENJAMIN MOSES</h5><span class="work d-block">Chief Foreman</span>

                </div>
            </div>
              <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">JOSEPH ISAIAH</h5><span class="work d-block">Engineering Assistant / Project Manager</span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">HUMPHERY JACOB</h5><span class="work d-block">Architectural Designer / Project Manager </span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">JAMES OCHE</h5><span class="work d-block">Procurement Executive </span>

                </div>
            </div>
              <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">FAVOUR AWAZIE</h5><span class="work d-block">Ag. Head of Finance & Administration </span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">MAXWELL YAMSA</h5><span class="work d-block">Senior Administrative Assistant </span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">DESMOND NIMGWANG</h5><span class="work d-block">Administrative Assistant </span>

                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3 text-center rounded box" style=" font-family: 'Roboto', sans-serif;"><img class="img-responsive rounded-circle" src="" width="50">
                    <h5 class="mt-3 name">DAHIRU DANLAMI</h5><span class="work d-block">Administrative Assistant </span>

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