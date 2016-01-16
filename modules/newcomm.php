<?php
/**
 * 侧边栏组件: 最新评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center">
    <?php echo $widgets_exist['newcomm']['title'];?>
</h5>

<ul id="newcomment">
    <?php foreach($com_cache as $value):?>
        <?php $url = Url::comment($value['gid'], $value['page'], $value['cid']);?>
        <li id="comment">
            <?php echo $value['name']; ?><br/>
            <a href="<?php echo $url; ?>"><?php echo $value['content']; ?></a>
        </li>
    <?php endforeach; ?>
</ul>