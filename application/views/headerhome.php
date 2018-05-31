<!DOCTYPE html>
<html>
<head>
    <title>Sistem Imformasi Restaurant</title>
    <!-- The styles -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/charisma-app.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bower_components/chosen/chosen.min.css" rel='stylesheet'>
    <link href="<?php echo base_url() ?>assets/bower_components/responsive-tables/responsive-tables.css" rel='stylesheet'>
    <link href="<?php echo base_url() ?>assets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel='stylesheet'>
    <link href="<?php echo base_url() ?>assets/css/jquery.noty.css" rel='stylesheet'>
    <link href="<?php echo base_url() ?>assets/css/uploadify.css" rel='stylesheet'>

    <!-- jQuery -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/rest.png">

</head>

<body>
    <!-- topbar starts -->
     <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <a class="navbar-brand" href="index.html">
                <span>APP-Rest</span></a>

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="http/"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->


<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li><a class="ajax-link" href="<?php echo base_url()?>home"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url()?>booking"><i class="glyphicon glyphicon-edit"></i><span> Booking</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url()?>shopping"><i class="glyphicon glyphicon-picture"></i><span> Menu </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url()?>shopping/show_cart"><i
                                    class="glyphicon glyphicon-shopping-cart"></i><span> Keranjang </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url()?>contact"><i class="glyphicon glyphicon-list-alt"></i><span> Kontak</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>welcome/logout"><i class="glyphicon glyphicon-eye-open"></i><span> LOGout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>