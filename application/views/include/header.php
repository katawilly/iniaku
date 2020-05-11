<!doctype html>
<html lang="en">

<?php $settings = get_settings(); ?>
  
<!-- Mirrored from jumpstart.mediumra.re/landing-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 01:58:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-17"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-52115242-17');
    </script>

    <meta charset="utf-8">
    <title><?php echo html_escape($settings->site_name) ?> - <?php echo html_escape($settings->site_title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV Landing Page & Generator">

    <link rel="icon" href="<?php echo base_url($settings->favicon) ?>">
    <!-- Begin loading animation -->
    <style>
      @keyframes hideLoader{ 0%{ width: 100%; height: 100%; } 100%{ width: 0; height: 0; } } body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center; } body:not(.loaded) > div.loader{ opacity: 1; } body:not(.loaded){ overflow: hidden; } body.loaded > div.loader{ animation: hideLoader .5s linear .5s forwards; } .loading-animation{width:40px;height:40px;margin:100px auto;background-color:#009B72;border-radius:100%;animation:pulse 1s infinite ease-in-out}@keyframes pulse{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>
    <!-- End loading animation -->
    <link href="<?php echo base_url() ?>assets/front/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&amp;display=swap" rel="stylesheet">
        <!-- csrf token -->
    <script type="text/javascript">
       var csrf_token = '<?php echo $this->security->get_csrf_hash(); ?>';
       var token_name = '<?php echo $this->security->get_csrf_token_name();?>'
    </script>
    
    <!-- google analytics -->
    <?php if (!empty($settings->google_analytics)): ?>
        <?php echo base64_decode($settings->google_analytics) ?>
    <?php endif ?>
    
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <!-- <div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
    <div class="container">
        <div class="row no-gutters align-items-md-center justify-content-center">
            <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=https://themeforest.net/item/jumpstart-app-and-software-template/24207799>Redeem Offer</a>
            </div>
            <div class="col-auto position-absolute right">
                <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="<?php echo base_url() ?>assets/front/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white">
                    </span>
                </button>
            </div>
        </div>
    </div>
</div> -->
    <div class="navbar-container">
      <nav class="navbar navbar-expand-lg navbar-light" data-sticky="top">
        <div class="container">
          <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="index.html">
            <img alt="Jumpstart" src="<?php echo base_url() ?>assets/front/img/logos/iniaku.svg">
          </a>
          <div class="d-flex align-items-left order-lg-3">
            <?php if ($this->session->userdata('logged_in') == TRUE): ?>
                <?php if (is_admin()): ?>

                    <a target="_blank" href="<?php echo base_url('admin/dashboard') ?>" class="btn btn-sm btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Dashboard</a>
                <?php else: ?>
                    <a target="_blank" href="<?php echo base_url('admin/profile') ?>" class="btn btn-sm btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3"><img class="img-circle" width="30px" src="<?php echo base_url(user()->thumb) ?>" alt=""> Manage profile <i class="fa fa-long-arrow-right"></i></a>
                <?php endif ?>
            <?php else: ?>
                <a href="<?php echo base_url('create-profile') ?>" class="btn btn-sm btn-warning ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Create Your CV</a>
                <a href="<?php echo base_url('login') ?>" class="btn btn-sm btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Login</a>
            <?php endif ?>
          </div>
          <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
            <ul class="navbar-nav my-3 my-lg-0">

              <li class="nav-item">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-item arrow-bottom <?php if(isset($page_title) && $page_title == 'Home'){echo'text-primary-3';} ?>" href="<?php echo base_url() ?>" role="button">Home</a>
              </li>
              <li class="nav-item">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-item arrow-bottom <?php if(isset($page_title) && $page_title == 'Pricing'){echo'text-primary-3';} ?>" href="<?php echo base_url('pricing') ?>" role="button">Features</a>
              </li>
              
              <li class="nav-item">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-item arrow-bottom <?php if(isset($page_title) && $page_title == 'Users'){echo'text-primary-3';} ?>" href="<?php echo base_url('users?sort=all') ?>" role="button">User</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>