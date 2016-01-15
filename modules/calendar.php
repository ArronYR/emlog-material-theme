<?php
/**
 * 侧边栏组件: 日历
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center"><?php echo $widgets_exist['calendar']['title'];?></h5>
<div id="calendar"></div>
<script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script>