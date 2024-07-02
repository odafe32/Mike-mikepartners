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
<link rel="shortcut icon" href="images/logo/logo.png">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
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

<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!--	Title
	=========================================================-->
<title>MikeandMikePartners</title>
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
         @media screen and (max-width:768px){
            .heading{
                font-size:27px;
            }
         }
         @media screen and (max-width:468px){
            .heading{
                font-size:25px;
            }
         }
         .black-section {
    background-color: #08070ef6;
    color: #fff;
    padding: 50px 0; 
 
}

.content {
    padding-right: 30px; /* Space between text and button */
}

.content h2 {
    font-size: 36px; /* Adjust heading font size */
    margin-bottom: 20px; /* Bottom margin for heading */
}

.content p {
    font-size: 17.5px; /* Adjust paragraph font size */
letter-spacing:1px;
TEXT-transform:capitalize;
    word-spacing:2px;
    font-weight:300;
}
.btn-int2 {
    background-color: transparent; /* Button background color */
    color: #fff; /* Button text color */
    font-size: 22px;
    line-height: 1;
    font-family: "Work Sans", sans-serif;
    font-weight: 200;
    text-transform: uppercase;
    word-spacing: 1px;
    position: relative; /* Ensure the pseudo-element is positioned relative to this element */
    display: inline-block; /* Adjust as needed */
    padding: 10px 20px; /* Add padding for better appearance */
    border: none; /* Remove default border */
    text-decoration: none; /* Remove underline from link */
}

.btn-int2:hover {
    color: #f1c643;
    font-weight: 200;
}

.btn-int2::before {
    content: '';
    background: #fff;
    position: absolute;
    height: 110px; /* Set height for the vertical line */
    width: 2px; /* Set width for the vertical line */
    left: 110%; /* Position the line to the right of the button text */
    top: 50%; /* Center vertically */
    transform: translateY(-40%); /* Adjust position to center properly */
}

.btn-int2::after {
    content: '\f061'; /* Font Awesome right arrow icon */
    font-family: 'Font Awesome 5 Free'; /* Specify Font Awesome as the font family */
    font-weight: 900; /* Ensure the icon uses the correct weight */
    position: absolute;
    left: 140%; /* Position the icon to the right of the vertical line */
    top: 50%; /* Center vertically */
    transform: translate(-50%, -50%); /* Adjust position to center properly */
    color: #fff; /* Icon color */
}

 /* Responsive adjustments */
 @media (max-width: 768px) {
            .section-black {
                flex-direction: column;
                text-align: center;
            }

            .content {
                padding-right: 0;
                width: 100%;
                margin-bottom: 20px;
                text-align:center;
            }

            .btn-int2 {
                font-size: 18px; /* Reduce font size */
                padding: 8px 16px; /* Adjust padding */
            }

            .btn-int2::before {
                height: 80px; /* Reduce height of the vertical line */
                left: 100%; /* Adjust position */
            }

            .btn-int2::after {
                left: 125%; /* Adjust position of the icon */
            }
        }

        @media (max-width: 480px) {
            .btn-int2 {
                font-size: 16px; /* Further reduce font size */
                padding: 6px 12px; /* Adjust padding */
            }

            .btn-int2::before {
                height: 60px; /* Further reduce height of the vertical line */
                left: 100%; /* Adjust position */
            }

            .btn-int2::after {
                left: 120%; /* Adjust position of the icon */
            }
        }
        
</style>
</head>
<body>

<!--	Page Loader  -->
 <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>   
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
      <!-- Banner Start -->
<div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('project_img/project1-a.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <div class="text-white text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-weight:600; text-transform:uppercase; fonts  font-family: 'Roboto', sans-serif;'">Crafting Dreams, Building Realities</h1>
                    <p class="lead" data-aos="fade-up" style="font-weight:300;   font-family: 'Roboto', sans-serif;'" data-aos-delay="200">Experience innovative design and expert craftsmanship.</p>
                    <a href="projects.php" class="btn btn-primary btn-lg mt-3 intro-but" style="font-family: font-family: 'Work Sans', sans-serif;" data-aos="fade-up" data-aos-delay="300">Explore Our Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--	Banner End  -->
        
        <!-- ----black---- -->
        <section class="black-section w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="content">
                    
                    <p  style=" font-weight:200;    font-family: 'Roboto', sans-serif; ">MIKE+MIKEPARTNERS, an architectural consulting firm dedicated to providing top-notch design and build services.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="text-center">
                    <a href="architectural-design.php" class="btn-int2"   style=" font-weight:300;    font-family: 'Roboto', sans-serif; ">
                        <div>Our</div>
                        <div>expertise</div>
                </a>
               
                </div>
            </div>
        </div>
    </div>
</section>

        <!--	Banner End  -->
          <!--	Recent Properties  -->
          <div class="full-row" style=" font-family: 'Work Sans', sans-serif;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class=" text-secondary double-down-line   text-center mb-4" style=" font-weight:300;    font-family: 'Work Sans', sans-serif; ">Our Projects</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['8'];?>" alt="pimage">
                                                <!-- <div class="featured  text-white" style="  background-color: #000;">Projects</div> -->
                                               
                                              
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-primary mb-2 text-capitalize" style=" font-family: 'Roboto', sans-serif; font-weight:500;"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['5'];?></span> </div>
                                                   
                                                    <?php 
                                                            // Fetch the text from the row
                                                            $text = $row['2']; 

                                                            // Split the text into words
                                                            $words = explode(' ', $text);

                                                            // Get the first 25 words
                                                            $first25Words = array_slice($words, 0, 30);

                                                            // Join the words back into a string
                                                            $shortText = implode(' ', $first25Words);

                                                            // Display the truncated text
                                                            echo '<div class="mb-4 p-3" style="padding: 10px; ">' . $shortText . '... <a href="propertydetail.php?pid=' . $row['0'] . '" style="color:#000; ">Read more</a></div>';
                                                            ?>

                                               
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	Recent Properties  -->
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center mb-5" style=" font-family: 'Work Sans', sans-serif; font-weight:300;">What We Do</h2>
            </div>
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

		<!-----  Our Services  ---->
		
      
    
	
        
        <!--	How It Work -->
        
        <!--	Achievement
  
			Testonomial -->
		<!--	Testonomial -->
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
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
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>