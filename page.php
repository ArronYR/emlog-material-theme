<?php
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<main>
    <div class="container">
        <h2><?php echo $log_title; ?></h2>
        <?php echo $log_content; ?>
        <?php blog_comments($comments); ?>
        <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
        <div style="clear:both;"></div>
    </div>
</main>

<?php include View::getView('footer');?>