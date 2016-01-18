<?php
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<main>
    <div class="section" id="log-banner">
        <div class="container margin-top">
            <div class="row margin-bottom">
                <div class="col s12">
                    <h4 class="header center-on-small-only">
                        <?php echo $log_title; ?>
                    </h4>
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

    <div class="container" id="content">
        <h1><?php echo $log_title; ?></h1>
        <?php echo $log_content; ?>
        <?php blog_comments($comments); ?>
        <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
        <div style="clear:both;"></div>
    </div>
</main>

<?php include View::getView('footer');?>