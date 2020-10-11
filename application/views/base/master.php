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
  <title>Alinea - Admin</title>
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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/prism.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?php echo base_url();?>/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/date-picker.css">
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
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url();?>/assets/images/logo/logo.png" alt=""></a></div>
        </div>
        <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"></i></div>
        <div class="left-menu-header col">
          <ul>
            <li>
              <form class="form-inline search-form">
                <div class="search-bg"><i class="fa fa-search"></i></div>
                <input class="form-control-plaintext" placeholder="Search here.....">
              </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
            </li>
          </ul>
        </div>
        <div class="nav-right col pull-right right-menu">
          <ul class="nav-menus">
            <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-secondary">2</span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>
                  <p class="f-w-600 font-roboto">You have 3 notifications</p>
                </li>
                <li>
                  <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                </li>
                <li>
                  <p class="mb-0"><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                </li>
                <li>
                  <p class="mb-0"><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                </li>
                <li>
                  <p class="mb-0"><i class="fa fa-circle-o mr-3 font-warning"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                </li>
              </ul>
            </li>
            <li class="onhover-dropdown"><i data-feather="message-square"></i>
              <ul class="chat-dropdown onhover-show-div p-t-15 p-b-15">
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="<?php echo base_url();?>/assets/images/user/1.jpg" alt="">
                    <div class="status-circle away"></div>
                    <div class="media-body"><span>Erica Hughes</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-warning">58 mins ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="<?php echo base_url();?>/assets/images/user/2.jpg" alt="">
                    <div class="status-circle online"></div>
                    <div class="media-body"><span>Kori Thomas</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-success">1 hr ago</p>
                  </div>
                </li>
                <li>
                  <div class="media"><img class="img-fluid rounded-circle mr-3" src="<?php echo base_url();?>/assets/images/user/4.jpg" alt="">
                    <div class="status-circle offline"></div>
                    <div class="media-body"><span>Ain Chavez</span>
                      <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-danger">32 mins ago</p>
                  </div>
                </li>
                <li class="text-center"> <a href="#">View All     </a></li>
              </ul>
            </li>
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown p-0">
              <div class="media profile-media"><img class="b-r-10" src="<?php echo base_url();?>/assets/images/dashboard/profile.jpg" alt="">
                <div class="media-body"><span>Emay Walter</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><i data-feather="user"></i><span>Account </span></li>
                <li><i data-feather="mail"></i><span>Inbox</span></li>
                <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                <li><i data-feather="settings"></i><span>Settings</span></li>
                <li><i data-feather="log-in"> </i><span>Log in</span></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="<?php echo base_url();?>/assets/images/logo/logo.png" alt=""></a></div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url();?>/assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav>
          <div class="main-navbar">
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                </li>
                <li class="dropdown">
                  <a class="nav-link menu-title <?php echo $this->uri->segment(1); ?> ? 'active' : '' }}" href="#"><i data-feather="home"></i><span>Dashboard</span>
                    <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                  </a>
                  <ul class="nav-submenu menu-content" style="display: block;">
                    <li><a href="#" class="active">Dashboard</a></li>
                  </ul>
                </li>
            <!-- <li class="dropdown">
              <a class="nav-link menu-title {{request()->route()->getPrefix() == '/widgets' ? 'active' : '' }}" href="#"><i data-feather="airplay"></i><span>Data PIA</span>
                <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/widgets' ? 'down' : 'right' }}"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;' }}">
                <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}">File Terupload</a></li>
                <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}">File Checker</a></li>
              </ul>
            </li> -->
            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerAdminDivisi' ? 'active' : '' ?>" href="#"><i data-feather="airplay"></i><span>Admin Divisi</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerAdminDivisi' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) === 'ControllerAdminDivisi' ?  'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) == 'indexListProposal' ? 'active' : '' ?>">List Proposal</a></li>
                <li><a href="<?php echo base_url()?>AdminDivisi/ListMakalah" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalah' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) == 'indexScoreProposal' ? 'active' : '' ?>">Score Proposal</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerAdminDirektorat' ? 'active' : '' ?>" href="#"><i data-feather="airplay"></i><span>Admin Direktorat</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerAdminDirektorat' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) === 'ControllerAdminDirektorat' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListProposalDirektorat' ?  'active' : '' ?>">List Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalahDirektorat' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreMakalahDirektorat' ?  'active' : '' ?>">Score Makalah</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerAdminArea' ? 'active' : '' ?>" href="#"><i data-feather="airplay"></i><span>Admin Area</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerAdminArea' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) === 'ControllerAdminArea' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListProposalArea' ?  'active' : '' ?>">List Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalahArea' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreProposalArea' ?  'active' : '' ?>">Score Proposal</a></li>

              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'active' : '' ?>" href="#"><i data-feather="airplay"></i><span>Admin Kantor Wilayah</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListProposalKanwil' ?  'active' : '' ?>">List Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalahKanwil' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreMakalahKanwil' ?  'active' : '' ?>">Score Makalah</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'active' : '' ?>" href="#"><i data-feather="users"></i><span>Admin Budaya Kerja</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) == 'ControllerAdminKanwil' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreProposalBudayaKerja' ?  'active' : '' ?>">Score Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexManajemenPengumumanBudayaKerja' ?  'active' : '' ?>">Manajemen Pengumuman</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreMakalahBudayaKerja' ?  'active' : '' ?>">Score Makalah</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerSuperAdmin' ? 'active' : '' ?>" href="#"><i data-feather="users"></i><span>Super Admin</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerSuperAdmin' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) == 'ControllerSuperAdmin' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexManajemenJuri' ?  'active' : '' ?>">Manajemen Juri</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexFileTerupload' ?  'active' : '' ?>">File Terupload</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexFileChecker' ?  'active' : '' ?>">File Checker</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexManajemenAdmin' ?  'active' : '' ?>">Manajemen Admin</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexManajemenTreshold' ?  'active' : '' ?>">Manajemen Treshold</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexManajemenSuperAdmin' ?  'active' : '' ?>">Manajemen Super Admin</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalahSuperAdmin' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListProposalSuperAdmin' ?  'active' : '' ?>">List Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreMakalahSuperAdmin' ?  'active' : '' ?>">Score Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreProposalSuperAdmin' ?  'active' : '' ?>">Score Proposal</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerKaryawan' ? 'active' : '' ?>" href="#"><i data-feather="user"></i><span>Karyawan</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerKaryawan' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) == 'ControllerKaryawan' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexDashboardKaryawan' ?  'active' : '' ?>">Dashboard</a></li>
                <li><a href="<?php echo base_url()?>Karyawan/UploadMakalah" class="<?php echo $this->uri->rsegment(2) === 'indexUploadMakalah' ?  'active' : '' ?>">Upload Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexUploadProposal' ?  'active' : '' ?>">Upload Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexUploadResumeProposal' ?  'active' : '' ?>">Upload Resume Nasional</a></li>
                <li><a href="<?php echo base_url();?>Karyawan/HasilPlagiat" class="<?php echo $this->uri->rsegment(2) === 'indexHasilChecker' ?  'active' : '' ?>">Hasil Checker</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title <?php echo $this->uri->rsegment(1) == 'ControllerJuri' ? 'active' : '' ?>" href="#"><i data-feather="airplay"></i><span>Juri</span>
                <div class="according-menu"><i class="fa fa-angle-<?php echo $this->uri->rsegment(1) == 'ControllerJuri' ? 'down' : 'right' ?>"></i></div>
              </a>
              <ul class="nav-submenu menu-content" style="display: <?php echo $this->uri->rsegment(1) == 'ControllerJuri' ? 'block;' : 'none;' ?>">
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListMakalahJuri' ?  'active' : '' ?>">List Makalah</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListProposalJuri' ?  'active' : '' ?>">List Proposal</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexListResumeNasional' ?  'active' : '' ?>">List Resume Nasional</a></li>
                <li><a href="#" class="<?php echo $this->uri->rsegment(2) === 'indexScoreMakalahNasional' ?  'active' : '' ?>">Score Makalah Nasional</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Page Sidebar Ends-->
  <div class="page-body">
    <div class="container-fluid">

      <?php
      $this->load->view($content);
      ?>


    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<!-- footer start-->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 footer-copyright">
        <p class="mb-0">Copyright 2020 © Alinea All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <p class="pull-right mb-0">For Pegadaian & made with <i class="fa fa-heart font-secondary"></i></p>
      </div>
    </div>
  </div>
</footer>
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

<script src="<?php echo base_url();?>/assets/js/chart/chartist/chartist.js"></script>
<script src="<?php echo base_url();?>/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="<?php echo base_url();?>/assets/js/chart/knob/knob.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/chart/knob/knob-chart.js"></script>
<script src="<?php echo base_url();?>/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="<?php echo base_url();?>/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="<?php echo base_url();?>/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/dashboard/default.js"></script>
<script src="<?php echo base_url();?>/assets/js/notify/index.js"></script>
<script src="<?php echo base_url();?>/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="<?php echo base_url();?>/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="<?php echo base_url();?>/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="<?php echo base_url();?>/assets/js/tooltip-init.js"></script>


<!-- Plugins JS start-->
<script src="<?php echo base_url();?>/assets/js/prism/prism.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/clipboard/clipboard.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom-card/custom-card.js"></script>
<script src="<?php echo base_url();?>/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo base_url();?>/assets/js/script.js"></script>
<script src="<?php echo base_url();?>/assets/js/theme-customizer/customizer.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>