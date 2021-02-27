<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>ระบบบริหารจัดการสิ่งแวดล้อมและการจัดเก็บ</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--<link rel="icon" href="https://environment.webclient.me/assets_admin/img/icon.ico" type="image/x-icon"/>-->

  <!-- Fonts and icons -->
  <script src="https://environment.webclient.me/assets_admin/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['https://environment.webclient.me/assets_admin/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://environment.webclient.me/assets_admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://environment.webclient.me/assets_admin/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="https://environment.webclient.me/assets_admin/css/demo.css">
</head>

<body>
  <div class="wrapper sidebar_minimize">
    <div class="main-header ">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">
        
        <a href="index.html" class="logo"> 
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">
        
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <!--<div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div> -->
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
              
           
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="https://environment.webclient.me/assets_admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg"><img src="https://environment.webclient.me/assets_admin/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                      <div class="u-text">
                        <h4>Hizrian</h4>
                        <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Profile</a> 
                    <a class="dropdown-item" href="#">Logout</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">     
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="https://environment.webclient.me/assets_admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  ผู้ใช้งาน
                  <span class="user-level">Administrator</span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">
                  <li>
                    <a href="#profile">
                      <span class="link-collapse">ข้อมูล</span>
                    </a>
                  </li>
                  <li>
                    <a href="#edit">
                      <span class="link-collapse">แก้ไขข้อมูล</span>
                    </a>
                  </li> 
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav nav-primary">
            <li class="nav-item">
              <a data-toggle="collapse" href="https://environment.webclient.me/" class="collapsed" aria-expanded="false">
                <a href="https://environment.webclient.me/"> 
                <i class="fas fa-home"></i> 
                <p>สถิติการดำเนินงาน</p>
                </a>   
              </a>
               
            </li>
             
            <li class="nav-item">
              <a data-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>บริหารการจัดเก็บ</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="https://environment.webclient.me/index.php/MController/collection">
                      <span class="sub-item">ตรวจสอบรายการจัดเก็บ</span>
                    </a>
                  </li>  
                   <li>
                    <a href="#">
                      <span class="sub-item">จัดการผู้ใช้รถ</span>
                    </a>
                  </li> 
                    
                </ul>
              </div>
            </li>
             <li class="nav-item  ">
              <a data-toggle="collapse" href="#sidebarLayouts">
                <i class="fas fa-th-list"></i>
                <p>รายการซ่อมบำรุง</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="sidebarLayouts">
                <ul class="nav nav-collapse">
                  <li class="active">
                    <a href="#">
                      <span class="sub-item">อยู่ระหว่างการส่งซ่อม</span>
                    </a>
                  </li>
                  
                   
                </ul>
              </div>
            </li>
            
             
             
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->