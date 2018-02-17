<?php
$blogger_id = $this->session->userdata('blogger_id');
$blogger_name = $this->session->userdata('blogger_name');
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kodeforest.com/html/kickoff/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2015 13:09:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>

    <!-- Css Files -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/themetypo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/widget.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/color.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.bxslider.css" rel="stylesheet">    
    <link href="<?php echo base_url(); ?>css/prettyphoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <script src="<?php echo base_url();?>/js/country.js"  type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!--// Wrapper //-->
    <div class="kode-wrapper">
      <header id="mainheader" class="kode-header-absolute">

        <!--// TopBaar //-->
          <div class="kode-topbar">
		  <div class="container">
              <div class="row">
                <div class="col-md-6 kode_bg_white">
					<ul class="top_slider_bxslider">
						<li><span class="kode-barinfo"><strong>Latest News : </strong> Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit,</span></li>
						<li><span class="kode-barinfo"><strong>Latest News : </strong> Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit,</span></li>
						<li><span class="kode-barinfo"><strong>Latest News : </strong> Welcome visitor you can Login or Create an Account</span></li>
					</ul>
				</div>
                <div class="col-md-6">
                  <ul class="kode-userinfo">				 				  
						
						<?php if ($blogger_id != NULL) { ?>
							<li><a href="<?php echo base_url(); ?>viewer_manager/log_out.html"><i class="fa fa-user"></i>Logout</a></li>
						 <?php } else { ?>
							<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in"></i> Login</a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModalTwo"><i class="fa fa-user-plus"></i> Register</a></li>
						<?php } ?>
				  </ul>
                </div>
              </div>
            </div>
          </div>
        <!--// TopBaar //-->
		
		<div class="header-8">
			<div class="container">
				<!--NAVIGATION START-->
				<div class="kode-navigation pull-left">
					<ul>
						 <li><a href="<?php echo base_url(); ?>">Home</a></li>
						 <li><a href="<?php echo base_url(); ?>welcome/portfolio.html">Portfolio</a></li>
                        	
					</ul>
				</div>
				<!--NAVIGATION END--> 
				<!--LOGO START-->	
				<div class="logo">
                                    <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>images/logo.png" alt=""></a>
				</div>
				<!--LOGO END-->	
				<!--NAVIGATION START-->
				<div class="kode-navigation">
					<ul>						
                                            <li><a href="<?php echo base_url(); ?>welcome/live_score.html">Live Score</a></li>                      
                                            <li class="last"><a href="<?php echo base_url(); ?>welcome/contact">contact</a></li>
					</ul>
				</div>
				<!--NAVIGATION END-->  
				 <nav class="navbar navbar-default">
                    
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
			    <li><a href="<?php echo base_url(); ?>welcome/portfolio.html">Portfolio</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/live_score.html">Live Score</a></li>                      
                            <li class="last"><a href="<?php echo base_url(); ?>welcome/contact">contact</a></li>
					
                        </ul>
                      </div><!-- /.navbar-collapse -->

                  </nav>
			</div>
		</div>
      </header>

     
 <!--------------------------------------------------// Main Banner //----------------------------------------------------->
     
   <?php echo $maincontent; ?>


 <!-------------------------------------------------------// Main Content //------------------------------------------->
      <!--// NewsLatter //-->
      <div class="kode-newslatter kode-bg-color" >
        <span class="kode-halfbg thbg-color"></span>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Subscribe Our Monthly Newsletter</h3>
            </div>
            <div class="col-md-6">
              <form>
                <input type="text" placeholder="Your E-mail Adress" name="s" required>
                <label><input type="submit" value=""></label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--// NewsLatter //-->
	 <footer id="footer1" class="kode-parallax kode-dark-overlay kode-bg-pattern">
		<!--Footer Medium-->
		<div class="footer-medium">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="about-widget">
							<h3>About Kickoff</h3>
							<ul class="kode-form-list">
							  <li><i class="fa fa-home"></i> <p><strong>Address:</strong> 805 omnis iste natus error.</p></li>
							  <li><i class="fa fa-phone"></i> <p><strong>Phone:</strong> 111 8756 22  777 4456 112</p></li>
							  <li><i class="fa fa-envelope-o"></i> <p><strong>Email:</strong> Info@sportyleague.com</p></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="widget widget-flickr kode-gallery-pretty">
							<h3>Flickr</h3>
							<ul>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-1.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-2.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-3.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-1.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-2.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-3.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-1.jpg"></a></li>
								<li><a data-gal="prettyphoto" href="extra-images/widgetgallery-2.jpg"><img alt="" src="<?php echo base_url(); ?>extra-images/widgetgallery-2.jpg"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-us-widget">
							<h3>Connect with us</h3>
							<p>Follow us to stay in the loop on what’s<br>
							Sed ut perspiciatis unde omnis iste natus<br> error sit Sed ut perspiciatis unde omnis iste<br> natus error sit</p>
							<ul class="social-links1">
								<li>
									<a href="#" class="tw-bg1"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" class="fb-bg1"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#" class="youtube-bg1"><i class="fa fa-youtube"></i></a>
								</li>
								<li>
									<a href="#" class="linkedin-bg1"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="#" class="tw-bg1"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" class="fb-bg1"><i class="fa fa-facebook"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Footer Medium End-->
	
    
      </footer>
      <!--// Contact Footer //-->

      <div class="kode-bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>©2015 KickOff. All Right Reserved</p>
            </div>
            <div class="col-md-6">
              <a href="#" id="kode-topbtn" class="thbg-colortwo"><i class="fa fa-angle-up"></i></a>
            </div>
          </div>
        </div>      </div>
<div class="clearfix clear"></div>
    </div>
    <!--// Wrapper //-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login To Your Account</h4>
			<!--------------------------start MASSAGE----------------------------------->
                                                                        <h4 style="color:red;">
							                    <?php
							                    $exception = $this->session->userdata('exception');
							
							                    if (isset($exception)) {
							                        echo $exception;
							                        $this->session->unset_userdata('exception');
							                    }
							                    ?>
							                </h4>
							                <h4 style="color:green;">
							                    <?php
							                    $loged_out = $this->session->userdata('loged_out');
							
							                    if (isset($loged_out)) {
							                        echo $loged_out;
							                        $this->session->unset_userdata('loged_out');
							                    }
							                    ?>
							                </h4>
							                <h4 style="color:green;">
							                    <?php
							                    $registered = $this->session->userdata('registered');
							
							                    if (isset($registered)) {
							                        echo $registered;
							                        $this->session->unset_userdata('registered');
							                    }
							                    ?>
							                </h4>
			<!----------------------------end massage------------------------------------------------>
			
          </div>
          <div class="modal-body">
            <form class="kode-loginform" method="post"  action="<?php echo base_url(); ?>viewer_login/check_login">
              <p><span>User Email</span> <input type="text" name="blogger_email_address" placeholder="User Email"></p>
              <p><span>Password</span> <input type="password" name="blogger_password" placeholder="Password"></p>
              <p><label><input type="checkbox"><span>Remember Me</span></label></p>
              <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign in"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Register</h4>
	<!--------------------------------start-----message------------------------------------>
		<h4 style="color:red;">
                    <?php
                    $exception = $this->session->userdata('exception');

                    if (isset($exception)) {
                        echo $exception;
                        $this->session->unset_userdata('exception');
                    }
                    ?>
                </h4>
                <h4 style="color:green;">
                    <?php
                    $loged_out = $this->session->userdata('loged_out');

                    if (isset($loged_out)) {
                        echo $loged_out;
                        $this->session->unset_userdata('loged_out');
                    }
                    ?>
                </h4>
	<!-------------------------------end------message------------------------------------>
			
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="<?php echo base_url(); ?>viewer_register/save_user" method="post">
	      <p><span>Name</span> <input type="text" name="blogger_name" placeholder="Name"></p>
              <p><span>Email</span> <input type="text" name="blogger_email_address" placeholder="Email"></p>
              <p><span>Password</span> <input type="password" name="blogger_password" placeholder="Password"></p>
              <p><span>Address</span> <input type="text" name="address" placeholder="Name"></p>
			  <p><span>Country</span>
				  <select class="form-control"  id="country"  name="country" required="required">
					  <option value="">Select Country......</option>
						  <script type="text/javascript">
								  printCountryOptions();
						   </script>
				   </select>			  
			  </p>
              <p><label><input type="checkbox"><span>Remember Me</span></label></p>
              <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign Up"></p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.countdown.js"></script>  
    <script src="<?php echo base_url(); ?>js/waypoints-min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-progressbar.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.accordion.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.circlechart.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyphoto.js"></script>
    <script src="<?php echo base_url(); ?>js/kode_pp.js"></script>
    <script src="<?php echo base_url(); ?>js/functions.js"></script>

  </body>

<!-- Mirrored from kodeforest.com/html/kickoff/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2015 13:10:53 GMT -->
</html>