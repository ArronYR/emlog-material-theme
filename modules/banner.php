<?php
/**
 * 页面模块: Banner组件
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div class="section" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="header center-on-small-only">
                    <a href="<?php echo BLOG_URL; ?>" class="white-text waves-effect waves-light">
                        <?php echo $blogname; ?>
                    </a>
                </h1>
                <h4 class="light red-text text-lighten-4 center-on-small-only"><?php echo $bloginfo; ?></h4>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <?php if(Option::get('topimg')): ?>
        <div class="parallax">
            <img src="<?php echo BLOG_URL.Option::get('topimg'); ?>">
        </div>
    <?php endif;?>
</div>