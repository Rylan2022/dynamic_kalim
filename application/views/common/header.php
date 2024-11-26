<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <title>Uniland - Real Estate HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,700;1,400&amp;display=swap" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/layerslider.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/colors/color.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/loader.css">
</head>

<body>

    <div class="preloader">
		<div class="loader xy-center"></div>
	</div>

    <div id="page_wrapper" class="bg-white">
        <!--============== Header Section Start ==============-->
        <header class="header-style-1 nav-on-banner fixed-bg-secondary">
            <div class="top-header xs-mx-none">
                <div class="container">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                            <ul class="top-contact list-color-white">
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Need Support ? +1-435-782-4312</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav-bar-top right list-color-white d-flex">
                                <li><a href="<?php echo base_url('about');?>"><i class="fa-brands fa-square-facebook"></i> Facebook</a></li>
                                <li><a href="<?php echo base_url('signup');?>"><i class="fa-brands fa-square-instagram"></i> Instagram</a></li>
                                <li><a href="<?php echo base_url('signin');?>"><i class="fa-brands fa-square-whatsapp"></i> Whatsapp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                <a class="navbar-brand" href="#"><img class="nav-logo" src="<?php echo base_url(''); ?>assets/images/logo/real_estate_logo_png.png" alt="Image not found !"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item ">
                                            <a class="nav-link " href="<?php echo base_url('index'); ?>">Home</a>
                                           
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="<?php echo base_url('about'); ?>">About Us</a>
                                           
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Properties</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo base_url('property_grid'); ?>">All Property</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('property_grid'); ?>">One BHK</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('property_grid'); ?>">Two BHK</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('property_grid'); ?>">Three BHK</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Features</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo base_url('agent_grid'); ?>">Agents</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('photo_gallery'); ?>">Photo Gallery</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('blog_grid'); ?>">Blogs</a></li>
                                                <li><a class="dropdown-item" href="<?php echo base_url('faq'); ?>">FAQs</a></li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="<?php echo base_url('property-single-v1'); ?>">Single Property</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="<?php echo base_url('property_single'); ?>">Single Property V1</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo base_url('property_single'); ?>">Single Property V2</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo base_url('property_single'); ?>">Single Property V3</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo base_url('property_single'); ?>">Single Property V4</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo base_url('property_single'); ?>">Single Property V5</a></li>
                                                    </ul>
                                                </li>
                                              
                                               
                                                <!-- <li class="dropdown">
                                                    <a class="dropdown-toggle dropdown-item" href="agent-grid-view.html">Agents</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="agent-grid-view.html">Agents Grid View</a></li>
                                                        <li><a class="dropdown-item" href="agent-list-view.html">Agents List View</a></li>
                                                        <li><a class="dropdown-item" href="agent-details.html">Agents Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle dropdown-item" href="photo-gallery-v1.html">Photo Gallery</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="photo-gallery-v1.html">Photo Gallery V1</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v2.html">Photo Gallery V2</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v3.html">Photo Gallery V3</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v4.html">Photo Gallery V4</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v5.html">Photo Gallery V5</a></li>
                                                    </ul>
                                                </li> -->
                                                
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item dropdown mega-dropdown">
                                            <a class="nav-link dropdown-toggle" href="about.html">About Us</a>
                                           <ul class="dropdown-menu mega-dropdown-menu">
                                                <li class="mega-container">
                                                    <div class="row row-cols-lg-4 row-cols-1">
                                                        <div class="col">
                                                            <ul>
                                                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                                                <li><a class="dropdown-item" href="our-mission.html">Our Mission</a></li>
                                                                <li><a class="dropdown-item" href="career.html">Careers</a></li>
                                                                <li><a class="dropdown-item" href="award.html">Awards</a></li>
                                                                <li><a class="dropdown-item" href="testimonials.html">Testimonials</a></li>
                                                                <li><a class="dropdown-item" href="timeline.html">Timeline</a></li>
                                                            </ul>
                                                        </div>
                                                        
                                                       
                                                        <div class="col">
                                                            <ul>
                                                                <li><a class="dropdown-item" href="our-services.html">Our Services</a></li>
                                                                
                                                               
                                                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> 

                                        </li> -->
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="#">Blog Grid</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="blog-grid-v1.html">Blog Grid V1</a></li>
                                                        <li><a class="dropdown-item" href="blog-grid-v2.html">Blog Grid V2</a></li>
                                                        <li><a class="dropdown-item" href="blog-grid-v3.html">Blog Grid V3</a></li>
                                                        <li><a class="dropdown-item" href="blog-grid-v4.html">Blog Grid V4</a></li>
                                                        <li><a class="dropdown-item" href="blog-grid-v5.html">Blog Grid V5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="#">Blog List</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="blog-list-v1.html">Blog List V1</a></li>
                                                        <li><a class="dropdown-item" href="blog-list-v2.html">Blog List V2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="blog-masonry-grid.html">Masonry Grid</a></li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="#">Single Blog</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="blog-single-v1.html">Blog Single V1</a></li>
                                                        <li><a class="dropdown-item" href="blog-single-v2.html">Blog Single V2</a></li>
                                                        <li><a class="dropdown-item" href="blog-single-v3.html">Blog Single V3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('services'); ?>">Services</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a>
                                        </li>
                                    </ul>
                            <a href="javascript:void(0)" class="btn btn-primary add-listing-btn openPopup"> Enquire Now</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->
