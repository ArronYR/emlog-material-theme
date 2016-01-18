<?php
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<main>
    <div class="section" id="log-banner">
        <div class="container margin-top">
            <div class="row margin-bottom">
                <div class="col s12">
                    <h4 class="header center-on-small-only">微语</h4>
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
        微语部分
    </div>
</main>

<?php include View::getView('footer');?>