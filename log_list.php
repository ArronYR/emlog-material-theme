<?php
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<?php doAction('index_loglist_top'); ?>

<main>
    <?php require_once View::getView('modules/banner');?>

    <div class="container">
        <div class="row padding-top">
            <?php if ($widgets_num > 0): ?>
                <div class="section col s12 m12 l9 margin-bottom">
            <?php else:?>
                <div class="section col s12 margin-bottom">
            <?php endif;?>
                <?php if (empty($logs)):?>

                <?php else:?>
                    <div class="valign-wrapper" style="height: inherit; min-height: 300px">
                        <div class="valign center" style="width: 100%;">
                            <h5 class="light red-text text-lighten-2 center">未找到</h5>
                            <p class="light red-text text-lighten-2 center">抱歉，没有符合您查询条件的结果。</p>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <hr class="hide-on-large-only">
            <?php include View::getView('side');?>
        </div>
    </div>
</main>

<?php include View::getView('footer');?>