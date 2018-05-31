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
    <link href="assets/css/jquery.noty.css" rel='stylesheet'>
    <link href="<?php echo base_url() ?>assets/css/uploadify.css" rel='stylesheet'>

    <!-- jQuery -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/rest.png">

</head>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Login</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="<?php echo base_url();?>session/do_login" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="uname" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->


</div><!--/.fluid-container-->