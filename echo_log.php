<?php
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<main>
    <div class="section" id="log-banner">
        <div class="container margin-top">
            <div class="row margin-bottom">
                <div class="col s12">
                    <h4 class="header center-on-small-only">
                        <?php echo $log_title; ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <?php if(Option::get('topimg')): ?>
            <div class="parallax">
                <img src="<?php echo BLOG_URL.Option::get('topimg'); ?>">
            </div>
        <?php endif;?>
    </div>

    <div class="container light" id="content">
        <?php echo $log_content; ?>
        <div class="margin-vertical">
            <?php if(!empty($log_cache_sort[$logid])): ?>
                <span class="light red-text text-lighten-2">分类: &nbsp;</span>
                <a class="light red-text text-lighten-2" href="<?php echo Url::sort($log_cache_sort[$logid]['id']); ?>">
                    <?php echo $log_cache_sort[$logid]['name']; ?>
                </a>
            <?php endif;?>
            &nbsp;/&nbsp;
            <div class="tag" style="display: inline-block;">
                <span class="light red-text text-lighten-2">标签: &nbsp;</span>
                <?php if (!empty($log_cache_tags[$logid])):?>
                    <?php foreach ($log_cache_tags[$logid] as $tag):?>
                        <a class="light" href="<?php echo Url::tag($tag['tagurl']);?>">
                            <span class="tag-badge">
                                <?php echo $tag['tagname'];?>
                            </span>
                        </a>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
            &nbsp;/&nbsp;
            <span class="light red-text text-lighten-2">浏览量: &nbsp;<?php echo $views; ?></span>
            <div class="right info" style="display: inline-block;">
                <?php echo gmdate('Y-n-j G:i l', $date); ?>
            </div>
        </div>
        <?php doAction('log_related', $logData); ?>
        <div class="row nextlog">
            <?php extract($neighborLog); ?>
            <div class="col s12 m6 truncate">
                <?php if($prevLog):?>
                    <i>上一篇:&nbsp;</i>
                    <a class="light teal-text text-darken-2" href="<?php echo Url::log($prevLog['gid']) ?>">
                        <?php echo $prevLog['title'];?>
                    </a>
                    <?php if($nextLog):?>
                       <span class="right hide-on-small-only">|</span>
                    <?php endif;?>
                <?php endif;?>
                &nbsp;
            </div>
            <div class="col s12 m6 truncate right-align">
                <?php if($nextLog):?>
                    <i>下一篇:&nbsp;</i>
                    <a class="light teal-text text-darken-2" href="<?php echo Url::log($nextLog['gid']) ?>">
                        <?php echo $nextLog['title'];?>
                    </a>
                <?php endif;?>
            </div>
        </div>
        <div class="comments">
            <?php include View::getView('modules/comments');?>
        </div>
        <div class="comments">
            <?php include View::getView('modules/comments_post');?>
        </div>
        <div style="clear:both;"></div>
    </div>
</main>

<?php include View::getView('footer');?>