<?php
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

?>

<div class="col m12 l3">
    <div class="row">
        <?php if ($widgets_exist['calendar']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/calendar');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>

        <?php if ($widgets_exist['hotlog']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/hotlog');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>

        <?php if ($widgets_exist['newlog']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/newlog');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>

        <?php if ($widgets_exist['randlog']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/randlog');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>
        
        <?php if ($widgets_exist['newcomm']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/newcomm');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>
        
        <?php if ($widgets_exist['sort']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/sort');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>

        <?php if ($widgets_exist['tag']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/tag');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>

        <?php if ($widgets_exist['twitter']['exists']):?>
            <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                <?php require_once View::getView('modules/twitter');?>
            </div>
            <hr class="hide-on-med-and-up">
        <?php endif;?>
    </div>
</div>

