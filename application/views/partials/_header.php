<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>E-VoS</title>
    <!-- Bootstrap Core CSS -->
    <?= link_tag("assets/bootstrap/dist/css/bootstrap.min.css"); ?>
    <!-- Menu CSS -->
    <?= link_tag("plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"); ?>
    <!-- toast CSS -->
    <?= link_tag("plugins/bower_components/toast-master/css/jquery.toast.css"); ?>
    <!-- morris CSS -->
    <?= link_tag("plugins/bower_components/morrisjs/morris.css"); ?>
    <!-- chartist CSS -->
    <?= link_tag("plugins/bower_components/chartist-js/dist/chartist.min.css"); ?>
    <?= link_tag("plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"); ?>
    <!-- Calendar CSS -->
    <?= link_tag("plugins/bower_components/calendar/dist/fullcalendar.css"); ?>
	<!-- Date picker plugins css -->
    <?= link_tag("plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css"); ?>
    <!-- DataTables -->
    <?= link_tag("plugins/bower_components/datatables/jquery.dataTables.min.css"); ?>
    <!-- animation CSS -->
    <?= link_tag("assets/css/animate.css"); ?>
    <!-- Custom CSS -->
    <?= link_tag("assets/css/style.css"); ?>
    <!-- color CSS -->
    <?= link_tag("assets/css/colors/default.css"); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            vertical-align: middle !important;
        }
    </style>
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>