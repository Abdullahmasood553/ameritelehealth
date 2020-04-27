<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
		$email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $organization = htmlspecialchars($_POST['phone']);


		// Check Required Fields
		if(!empty($email) && !empty($fname) && !empty($lname) && !empty($phone)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
        $toEmail = 'irfan@ameritechgrp.com';
				$subject = 'Contact Request From '.$fname;
				$body = '<h2>Contact Request</h2>
          <h4>First Name</h4><p>'.$fname.'</p>
          <h4>Last Name</h4><p>'.$lname.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Phone</h4><p>'.$phone.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$fname. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ameritele Health </title>
  <!-- <link rel="icon" href="img/Fevicon.png" type="image/png"> -->

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-shape">


  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/home/logo.png" alt="" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#services">Tele Services</a></li>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball" id="home">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <!-- <h2>FCC ADOPTS $200 MILLION FOR COVID-19 TELEHEALTH PROGRAM</h2> -->

          <h2>To combat Covid-19, FCC launched a $200 million program to subsidize (100%) eligible health care
            provider’s (FQHCs/CHCs/RHCs & NFP hospitals) acquisition of telehealth services and devices.</h2>
          <p>Telemedicine is the future of healthcare. Use the current opportunity and funding and position yourself to
            get ahead in a new era of healthcare delivery.</p>


          <p>By providing an option to treat more patients at home, you will not only free up valuable resources for
            those that need them the most, but also you will help your patients reduce the risk of exposure to the
            Virus.</p>
          <a class="button button-hero mt-4" href="tel:+214-919-4201">Call Us Now: 214-919-4201</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <h2>How Can We Help</h2>
          <ul class="list-group" style="text-align: justify;">
            <li class="list-group-item">
              <p> We have successfully implemented Telemedicine programs at hospitals and clinics.</p>
              <p>We are in a unique position to help you with a Turn-Key package of services to enable a hassle free end
                to end Tele Solution for your FQHC, thus allowing you to significantly improve patient outcomes for your
                most in-need patients, in this time of crisis.</p>
            </li>
          </ul>
          <br>

          <div class="list-group" style="text-align: justify;">
            <div class="list-group-item">
              <div class="d-flex w-100  bg-dark p-2">
                <h2 class="text-white" >Contact Us For...</h2>
              </div>
              <hr>
              <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Telemedicine service platform and devices</p>
              <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>  Call center service</p>
              <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Provider Network</p>
              <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Program Execution & Training</p>
              <p class="mb-1">  <a class="button button-hero mt-4" href="https://docs.fcc.gov/public/attachments/DOC-363498A1.pdf">FCC Annoucement</a> &nbsp;&nbsp;&nbsp;<a class="button button-hero mt-4" href="#services">Services We Offer</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin text-center" id="services">
    <div class="container">
      <div class="section-intro text-center pb-90px">

        <h2>Services Offered</h2>
      </div>
      <!-- ACCORDION -->
      <div id="accordion">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <div href="#collapse1" data-toggle="collapse" data-parent="#accordion" style="color:#fff">
                <i class="fas fa-arrow-circle-down"></i>
                 Telemedicine service platform and devices:
              </div>
            </h5>
          </div>

          <div id="collapse1" class="collapse">
            <div class="card-body">
              <ul class="list-group" style="text-align: justify;">

                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i> We install and configure
                  infrastructure to allow you to start offering Telemedicine services immediately.</li>
                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i> We can either use your existing
                  EHR platform’s telemedicine capabilities if they exist, or if they’re not available, we will introduce
                  a standalone option from our partner network to get you up and running in no time.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <div href="#collapse2" data-toggle="collapse" data-parent="#accordion" style="color:#fff">
                <i class="fas fa-arrow-circle-down"></i> Call center services:
              </div>
            </h5>
          </div>

          <div id="collapse2" class="collapse">
            <div class="card-body">
              <ul class="list-group" style="text-align: justify;">

                <li class="list-group-item">We can onboard your FQHC account to our call center service center and
                  provide outbound and intake call services.</li>
                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i>Through outbound calls to your
                  patient list (current and past) we will build awareness and help spread the word that the FQHC is
                  offering Telemedicine services along with your existing services.</li>
                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i>On the intake side we staff the
                  call center with dedicated clinical specialists to ease the burden on your FQHC for the intake
                  process.</li>

                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i>The intake call center staff
                  will be dedicated to your FQHC and will serve as an extension of your team. They will have access to
                  your EHR platform, allowing them to complete the intake process and route the patient to the correct
                  provider – either in your network or an extended network of providers we can help establish on your
                    behalf.</li>
                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i>Our intake staff members have
                  medical education and training and are qualified to appropriately engage patients. Our outbound call center staff
                  has clinical background.</li>
              

              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <div href="#collapse3" data-toggle="collapse" data-parent="#accordion" style="color:#fff">
                <i class="fas fa-arrow-circle-down"></i> Provider Network:
              </div>
            </h5>
          </div>

          <div id="collapse3" class="collapse">
            <div class="card-body">
              <ul class="list-group" style="text-align: justify;">

                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i>We have a vast network of
                  licensed providers available nationwide that can help meet your growing demand for Teleservices. If you require, we can augment
                  your current provider network with qualified physicians and specialists.</li>
               
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <div href="#collapse4" data-toggle="collapse" data-parent="#accordion" style="color:#fff">
                <i class="fas fa-arrow-circle-down"></i> Program Execution & Training:
              </div>
            </h5>
          </div>

          <div id="collapse4" class="collapse">
            <div class="card-body">
              <ul class="list-group" style="text-align: justify;">

                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i> We have successfully
                  implemented Telemedicine programs at other facilities. We will use our depth of experience to train
                  your staff on how to successfully operate a Tele program at your FQHC.</li>
                <br>
                <li class="list-group-item"><i class="fas fa-circle text-dark mx-2"></i> We will be there for the
                  initial setup and program launch and for as long as you require our ongoing services. You will never
                  be alone through this journey. </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--================Service Area End =================-->







  <!--================Search Package section Start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center  mb-lg-0">
          <div class="search-content">
            <h2>Contact Us Today We Can Help <br class="d-none d-xl-block"></h2>
            <div class="list-group" style="text-align: justify;">
              <div class="list-group-item">
                <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Telemedicine service platform and devices</p>
                <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>  Call center service</p>
                <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Provider Network</p>
                <p class="mb-1"><i class="fas fa-circle text-dark mx-2"></i>Program Execution & Training</p>
                <p class="mb-1">  <a class="button button-hero mt-4" href="https://docs.fcc.gov/public/attachments/DOC-363498A1.pdf">FCC Annoucement</a> &nbsp;&nbsp;&nbsp;<a class="button button-hero mt-4" href="#services">Services We Offer</a></p>
              </div>
            </div>
          </div>
     
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
          <div class="search-wrapper">
            <h3 class="text-white">Contact US</h3>
            <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
     
            <form method="post" class="search-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo isset($_POST['fname']) ? $fname : ''; ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo isset($_POST['lname']) ? $lname : ''; ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="organization" class="form-control" placeholder="Organization" value="<?php echo isset($_POST['organization']) ? $organization : ''; ?>">
                </div>
              </div>

              <div class="form-group">
                <button class="button border-0 mt-3" name="submit" type="submit">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->


  <!--================Blog section Start =================-->
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-90px">

        <h2>Turn Key Tele Health Services</h2>

      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/home/health-service.png" alt="" width="100px" height="200px">
            <div class="card-blog-body">
              <a href="#">
                <h4>Turn Key Tele Health Services</h4>
              </a>

              <p>We are in a unique position to help you with a Turn-Key package of services to enable a hassle free end
                to end Telemedicine Solution for your FQHC, thus allowing you to significantly improve patient outcomes
                for your most in-need patients, in this time of crisis. </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/home/schedule.png" alt="" width="200px" height="200px;">
            <div class="card-blog-body">
              <a href="#">
                <h4>Schedule a Consult and free assessment</h4>
              </a>

              <p>Contact Us Today! <a href="tel:+214-919-4201"><b>214-919-4201</b></a></p>
              <p> By providing an option to treat more patients at home, you will not only
                free up valuable resources for those that need them the most, but also you will help your patients
                reduce the risk of exposure to the Virus.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/home/partnership.png" alt="" width="277px" height="200px;">
            <div class="card-blog-body">
              <a href="#">
                <h4>
                  We partner with you for a successful program</h4>
              </a>

              <p>You can count on us. We will be there for the initial setup and program launch and for as long as you
                require our ongoing services. You will never be alone through this journey </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section End =================-->


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">

      <p class="col-sm-12 footer-text m-0 text-center text-white">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> All rights reserved by <a href="http://ameritelehealth.com/" target="_blank" style="color:#fff">ameritelehealth.com</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>

    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
   <script src="js/main.js"></script>
  </body>
</html>