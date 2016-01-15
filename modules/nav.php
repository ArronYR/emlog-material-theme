<?php
/**
 * 页面模块: 导航栏组件
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<header>
    <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
    <ul id="nav-mobile" class="side-nav fixed" style="left: 0px;">
        <li class="logo">
            <a id="logo-container" href="<?php echo BLOG_URL; ?>" class="brand-logo">
                <img class="circle responsive-img" src="<?php echo TEMPLATE_URL; ?>images/2230.jpeg">
            </a>
        </li>
        <li class="search">
            <div class="search-wrapper card">
                <input id="search"><i class="material-icons">search</i>
                <div class="search-results"></div>
            </div>
        </li>
        <li class="bold active"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">CSS</a>
                    <div class="collapsible-body" style="">
                        <ul>
                            <li><a href="color.html">Color</a></li>
                            <li><a href="grid.html">Grid</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>