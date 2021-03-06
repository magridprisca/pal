<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/img/favicon.png">

  <title>Knowledge Management System</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url() ?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url() ?>assets/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url() ?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url() ?>assets/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/fullcalendar.css">
  <link href="<?php echo base_url() ?>assets/admin/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <header class="header dark-bg">
      <a href="<?php echo base_url('admin');?>" class="logo">
        <img alt="" src="<?php echo base_url() ?>assets/admin/img/logo-pal.png" height="30 px">
      </a>
        <div class="toggle-nav">
          <div class="" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fa fa-reorder"></i></div>
        </div>
        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                              <?php if($_SESSION['poto']==null){
                                echo '<img src='.base_url('assets/upload/users/user.jpg').' width=40px>';
                              }else {
                                echo '<img src='.base_url($_SESSION['poto']).' width=40px/>';
                              }?>
                            </span>
                            <span class="username"><?= $_SESSION['nama'] ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="<?php echo base_url('profile')?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?php echo base_url('C_user/logout')?>"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li <?php if($menu=='dashboard') echo 'class="active"'; ?>>
            <a class="" href="<?php echo base_url('admin') ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li <?php if($menu=='profile') echo 'class="active"'; ?>>
            <a class="" href="<?php echo base_url('profile')?>">
                          <i class="icon_profile"></i>
                          <span>Profile</span>
                      </a>
          </li>
          <li class="sub-menu <?php if($menu=='knowledge') echo 'active'; ?>">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Knowledge</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url('C_knowledge/viewList');?>">List Knowledge</a></li>
              <li><a class="" href="<?= base_url('C_knowledge/add');?>">Create New Knowledge</a></li>
            </ul>
          </li>
          <li class="<?php if($menu=='discussion') echo 'active'; ?>">
            <a href="<?= base_url('discuss');?>" class="">
                          <i class="icon_chat_alt"></i>
                          <span>Discussion</span>
                      </a>
          </li>
          <li class="sub-menu <?php if($menu=='favorit') echo 'active'; ?>">
            <a href="javascript:;" class="">
                          <i class="icon_star"></i>
                          <span>Favorite</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url('C_favorite/kno');?>">Favorite Knowledge</a></li>
              <li><a class="" href="<?= base_url('C_favorite/dis');?>">Favorite Discussion</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
