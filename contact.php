<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Sent Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Sent Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/logo/logo.png">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
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


<link rel="stylesheet" href="fgn/icomoon/style.css" />
    <link rel="stylesheet" href="fgn/flaticon/font/flaticon.css" />
<!--	Title
	=========================================================-->
<title>Contact Us</title>
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
         
.contact-info i {
  font-size: 20px;
  float: left;
  width: 44px;
  height: 44px;
  background: #00204a;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 50px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  color: #fff; }

.contact-info h4, .contact-info .h4 {
  font-size: 18px;
  padding: 0 0 0 60px; }

.contact-info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px; }

.site-footer {
  background: #efefef;
  font-size: 14px;
  color: #888;
  padding: 70px 0; }
        </style>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner -->
		
        <!--	Contact Information -->
        <div class="full-row">
            <div class="container">
            <div class="row">
          <div
            class="col-lg-4 mb-5 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="contact-info">
              <div class="address mt-2">
                <i class="icon-room"></i>
                <h4 class="mb-2">Location:</h4>
                <p>
               Nigeria.
                </p>
              </div>

              <div class="open-hours mt-4">
                <i class="icon-clock-o"></i>
                <h4 class="mb-2">Open Hours:</h4>
                <p>
                  Sunday-Friday:<br />
                  08:00 AM - 2300 PM
                </p>
              </div>

              <div class="email mt-4">
                <i class="icon-envelope"></i>
                <h4 class="mb-2">Email:</h4>
                <p>info@Untree.co</p>
              </div>

              <div class="phone mt-4">
                <i class="icon-phone"></i>
                <h4 class="mb-2">Call:</h4>
                <p>+1 1234 55488 55</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <?php echo $msg; ?><?php echo $error; ?>
            <form action="#" method="post">
              <div class="row">
                <div class="col-6 mb-3">
                  <input 
                  style="border: 1px solid #ccc;"
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                    name="name"
                  />
                </div>
                <div class="col-6 mb-3">
                  <input 
                  style="border:#ccc 1px solid ;"
                    type="email"
                    class="form-control"
                    placeholder="Your Email" name="email"
                    
                  />
                </div>
                <div class="col-12 mb-3">
                  <input 
                  style="border:#ccc 1px solid ;"
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                    
                    name="subject" 
                  />
                </div>
                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                    <input type="text"  name="phone" class="form-control" placeholder="Phone" maxlength="10">
                                    </div>
                                </div>
                <div class="col-12 mb-3">
                  <textarea  style="border:#ccc 1px solid ;"
                    name="message"
                    id=""
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                </div>

                <div class="col-12">
                  <input 
                  style="border:#ccc 1px solid ; background-color:#005555;"
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary"
                    name="send"
                  />
                </div>
              </div>
            </form>
          </div>



        </div>
            </div>
        </div>
        <!--	Contact Inforamtion -->
        
        <!--	Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29921.88989279091!2d72.89392697798161!3d20.373147326844283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d1d69db97345%3A0x8bc4433aecadadfd!2sROFEL%20ARTS%20%26%20COMMERCE%20COLLEGE!5e0!3m2!1sen!2sin!4v1585740130321!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<!--	Map -->
        
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