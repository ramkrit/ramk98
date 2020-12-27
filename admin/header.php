<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:index.php");
}
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Zero Art Creations | 9667056026</title>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">

<link rel="stylesheet" href="assets/css/themes/all-themes.css"/>
</head>

<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars --> 


<nav class="navbar clearHeader">


    <div class="col-12">

        <div class="navbar-header"><a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Zero Art Creations</a> <h3 class="navbar-brand" style="margin-left: 315px; font-size: 40px;">Zero Art Creations</h3></div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3>Admin</h3>
                
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active open"><a href="dashboard.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li>
                    <a href="add-category.php"><i class="zmdi zmdi-account"></i><span>ADD  Category</span> </a>
                    
                </li>
                <li>
                    <a href="all-category.php"><i class="zmdi zmdi-account"></i><span>All Category</span> </a>
                    
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>ADD Image</span> </a>
                    <ul class="ml-menu">
                        <li><a href="add_image.php">Add Image</a></li>
                        <li><a href="all_image.php">All Images</a></li>     
                    </ul>
                </li>

                
                

            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
              <li class="nav-item" style="width: 100%;"><a class="nav-link active"  href="logout.php">Log Out</a></li>
        </ul>
        
    </aside>
    <!-- #END# Right Sidebar --> 
</section>
<!--Side menu and right menu -->
