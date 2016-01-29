<?php
/**
 * 侧边栏
 *
 * 可通过 $widgets_exist['sort']['exists'] 检测侧边栏组件是否存在
 * 然后通过 require_once View::getView('modules/sort') 加载
 *
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

?>

<div class="col m12 l3 hide-on-med-and-down">
    <div class="row">
        <?php for ($w=0; $w < count($widgets_arr); $w++):?>
            <?php $widget_name = $widgets_arr[$w];?>
            <?php if (file_exists(TEMPLATE_PATH.'modules/'.$widget_name.'.php')):?>
                <div class="col s12 m4 l12 z-depth-1 hoverable side-widgets">
                    <?php require_once View::getView('modules/'.$widget_name);?>
                </div>
            <?php endif;?>
        <?php endfor;?>
    </div>
    <?php doAction('diff_side');?>
</div>

