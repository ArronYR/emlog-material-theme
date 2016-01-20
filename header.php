<?php
/*
Template Name:MaterialTheme
Description:Material Design主题，美观优雅
Version:1.0
Author:Arron
Author Url:http://blog.helloarron.com
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

    <link href="<?php echo TEMPLATE_URL; ?>css/icon.css" rel="stylesheet">
    <link href="<?php echo TEMPLATE_URL; ?>css/prettify-obsidian-theme.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/ghpages-materialize.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/main.css"/>

    <script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/materialize.min.js"></script>
    <script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/main.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo TEMPLATE_URL; ?>/js/html5.js"></script>
    <![endif]-->
    <?php doAction('index_head'); ?>
</head>

<body>
    <?php require_once View::getView('modules/nav');?>

