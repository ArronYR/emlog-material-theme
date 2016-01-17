<?php
/**
 * 侧边栏组件: 最新文章
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center padding-horizontal">
    <?php echo $widgets_exist['newlog']['title'];?>
</h5>

<ul id="newlog" class="collection">
<!-- 需要截断是在 li 上添加 class truncate -->
<?php foreach($newLogs_cache as $value): ?>
    <li class="collection-item waves-effect waves-teal" style="display: block">
        <a class="light red-text text-lighten-2" href="<?php echo Url::log($value['gid']); ?>" title="<?php echo $value['title']; ?>">
            <?php echo $value['title']; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>