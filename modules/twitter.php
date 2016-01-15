<?php
/**
 * 侧边栏组件: 最新微语
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center">
    <?php echo $widgets_exist['twitter']['title'];?>

    <?php if ($istwitter == 'y') :?>
        <span class="twitter-more right">
            <a class="light red-text text-lighted-1" href="<?php echo BLOG_URL . 't/'; ?>">更多&raquo;</a>
        </span>
    <?php endif;?>
</h5>

<ul class="collection" id="twitter">
    <?php foreach($newtws_cache as $value): ?>
        <?php $img = empty($value['img']) ? "" : '<a title="查看图片" class="t_img" href="'.BLOG_URL.str_replace('thum-', '', $value['img']).'" target="_blank">&nbsp;</a>';?>
        <li class="collection-item">
            <span class="light twitter-title"><?php echo $value['t']; ?><?php echo $img;?></span>
            <time class="light teal-text text-lighted-1"><?php echo smartDate($value['date']); ?></time class="light">
        </li>
    <?php endforeach; ?>
</ul>