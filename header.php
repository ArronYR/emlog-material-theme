<?php
/*
Template Name:MaterialTheme
Description:Material Design主题，美观优雅
Version:1.0
Author:Arron
Author Url:http://www.helloarron.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $site_title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="<?php echo $site_key; ?>" />
    <meta name="description" content="<?php echo $site_description; ?>" />
    <meta name="generator" content="emlog" />

    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
    <link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
    <link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo TEMPLATE_URL; ?>css/icon.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/main.css?<?php echo rand();?>"/>

    <script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/main.js?<?php echo rand();?>"></script>

    <script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
    <!--[if IE 6]>
    <script src="<?php echo TEMPLATE_URL; ?>js/iefix.js" type="text/javascript"></script>
    <![endif]-->
    <?php doAction('index_head'); ?>
</head>

<body>
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="logo-image center">
                    <img class="circle responsive-img" src="<?php echo TEMPLATE_URL; ?>images/2230.jpeg">
                </div>
                <div class="row center">
                    <h5 class="header col s12 light"><?php echo $bloginfo; ?></h5>
                </div>
                <div class="row center">
                    <a href="<?php echo BLOG_URL; ?>" class="btn-large waves-effect waves-light teal lighten-1"><?php echo $blogname; ?></a>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="<?php echo BLOG_URL.Option::get('topimg'); ?>">
        </div>
    </div>
    <div id="wrap">
        <div id="header">
            <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
            <h3><?php echo $bloginfo; ?></h3>
        </div>
        <?php if(Option::get('topimg')): ?>
            <div id="banner"><a href="<?php echo BLOG_URL; ?>"><img src="<?php echo BLOG_URL.Option::get('topimg'); ?>" height="134" width="960" /></a></div>
        <?php endif;?>
        <div id="nav"><?php blog_navi();?></div>
    </div>