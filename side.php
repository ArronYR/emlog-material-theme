<?php
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

?>

<?php if ($widgets_exist['calendar']['exists']):?>
    <div class="col hide-on-small-only m3">
        <?php require_once View::getView('modules/calendar');?>
    </div>
<?php endif;?>

<?php if ($widgets_exist['twitter']['exists']):?>
    <div class="col hide-on-small-only m3">
        <?php require_once View::getView('modules/twitter');?>
    </div>
<?php endif;?>

<?php if ($widgets_exist['tag']['exists']):?>
    <div class="col hide-on-small-only m3">
        <?php require_once View::getView('modules/tag');?>
    </div>
<?php endif;?>