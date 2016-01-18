<?php
/**
 * 侧边栏组件: 归档
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center padding-horizontal">
    <?php echo $widgets_exist['archive']['title'];?>
</h5>

<ul id="record" class="padding-horizontal">
<?php foreach($record_cache as $value): ?>
    <li>
        <a class="light red-text text-lighten-2" href="<?php echo Url::record($value['date']); ?>">
            <?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)
        </a>
    </li>
<?php endforeach; ?>
</ul>