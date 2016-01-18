<?php
/**
 * 侧边栏组件: 最新评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center padding-horizontal">
    <?php echo $widgets_exist['newcomm']['title'];?>
</h5>

<ul id="newcomment" class="collection">
<!-- 需要截断是在 li 上添加 class truncate -->
<?php foreach($com_cache as $value):?>
    <?php $url = Url::comment($value['gid'], $value['page'], $value['cid']);?>
    <li id="comment" class="collection-item waves-effect waves-teal truncate" style="display: block">
        <div class="comment-author">
            <?php echo $value['name']; ?>&nbsp;:
        </div>
        <a class="light red-text text-lighten-2" href="<?php echo $url; ?>"><?php echo $value['content']; ?></a>
    </li>
<?php endforeach; ?>
</ul>