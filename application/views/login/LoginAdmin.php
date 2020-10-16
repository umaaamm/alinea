<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
  <title>Alinea</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?php echo base_url();?>/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css">
</head>
<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">    </fecolormatrix>
      </filter>
    </svg>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper">
    <div class="container-fluid p-0">
      <!-- login page start-->
      <div class="authentication-main no-bg">
        <div class="row">
          <div class="col-md-12">
            <div class="auth-innerright">
              <div class="authentication-box">
                <div class="mt-4">
                  <div class="card-body">
                    <div class="cont text-center">

                      <div> 
                        <form class="theme-form" method="post" action="<?php echo base_url();?>LoginMethodAdmin">
                          <?php echo $this->session->flashdata('notif_l');?>

                          <h4>LOGIN ADMIN</h4>
                          <h6>Enter your Email and Password</h6>
                          <div class="form-group">
                            <label class="col-form-label pt-0">Your Email</label>
                            <input class="form-control" type="email" required="" name="email">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="password" name="password" required="">
                          </div>
                          <div class="checkbox p-0">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">Remember me</label>
                          </div>
                          <div class="form-group row mt-3 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                          </div>
                          <div class="login-divider"></div>
                          <div class="social mt-3">
                            <div class="row btn-showcase">
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-fb">Facebook</button>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-twitter">Twitter</button>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-google">Google + </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="sub-cont">
                        <div class="img">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- login page end-->
    </div>
  </div>
  <!-- latest jquery-->
  <script src="<?php echo base_url();?>/assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="<?php echo base_url();?>/assets/js/bootstrap/popper.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/bootstrap/bootstrap.js"></script>
  <!-- feather icon js-->
  <script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?php echo base_url();?>/assets/js/sidebar-menu.js"></script>
  <script src="<?php echo base_url();?>/assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="<?php echo base_url();?>/assets/js/login.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?php echo base_url();?>/assets/js/script.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>
</html>