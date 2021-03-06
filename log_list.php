<?php
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>


<main>

    <?php require_once View::getView('modules/banner');?>

    <?php doAction('index_loglist_top'); ?>

    <div class="container">
        <div class="row padding-top">
            <?php if ($widgets_num > 0): ?>
                <div class="section col s12 m12 l9 margin-bottom" id="logs">
            <?php else:?>
                <div class="section col s12 margin-bottom" id="logs">
            <?php endif;?>
                <?php if (!empty($logs)):?>
                    <?php foreach($logs as $value):?>
                    <div class="row margin-bottom-xl padding-right">
                        <div class="hoverable padding-sm">
                            <h5>
                                <?php if(topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:'')): ?>
                                    <i class="red-text text-lighten-2 material-icons">turned_in</i>
                                <?php endif;?>
                                <a class="light teal-text text-lighten-2" href="<?php echo $value['log_url']; ?>">
                                    <?php echo $value['log_title']; ?>
                                </a>
                            </h5>
                            <div class="text-small">
                                <time class="light margin-right">
                                    <?php echo gmdate('Y-n-j', $value['date']); ?>
                                </time>
                                <a class="light margin-right" href="<?php echo Url::author($value['author'])?>">
                                    <?php echo $user_cache[$value['author']]['name'];?>
                                </a>
                                <?php if(!empty($log_cache_sort[$value['logid']])): ?>
                                    <a class="light red-text text-lighten-2 margin-right" href="<?php echo Url::sort($log_cache_sort[$value['logid']]['id']); ?>">
                                        <?php echo $log_cache_sort[$value['logid']]['name']; ?>
                                    </a>
                                <?php endif;?>
                                <?php if(ROLE == ROLE_ADMIN || $value['author'] == UID):?>
                                    <a href="<?php echo BLOG_URL;?>admin/write_log.php?action=edit&gid=<?php echo $value['logid'];?>" target="_blank">编辑</a>
                                <?php endif;?>
                            </div>
                            <div class="margin-vertical-sm">
                                <div class="tag" style="display: inline-block;">
                                    <span class="light red-text text-lighten-2">标签: &nbsp;</span>
                                    <?php if (!empty($log_cache_tags[$value['logid']])):?>
                                        <?php foreach ($log_cache_tags[$value['logid']] as $tag):?>
                                            <a class="light" href="<?php echo Url::tag($tag['tagurl']);?>">
                                                <span class="tag-badge">
                                                    <?php echo $tag['tagname'];?>
                                                </span>
                                            </a>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                                <div class="tag right hide-on-small-only" style="display: inline-block;">
                                    <a class="light teal-text text-darken-2 margin-left-sm" href="<?php echo $value['log_url']; ?>#comments">
                                        评论(<?php echo $value['comnum']; ?>)
                                    </a>
                                    <a class="light teal-text text-darken-2 margin-left-sm" href="<?php echo $value['log_url']; ?>">
                                        浏览(<?php echo $value['views']; ?>)
                                    </a>
                                </div>
                            </div>
                            <div class="light log-desc">
                                <?php echo $value['log_description'];?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="row padding-top" id="pagenavi">
                        <ul class="pagination center">
                            <?php echo $page_url;?>
                        </ul>
                    </div>
                <?php else:?>
                    <div class="valign-wrapper" style="height: inherit; min-height: 300px">
                        <div class="valign center" style="width: 100%;">
                            <h5 class="light red-text text-lighten-2 center">未找到</h5>
                            <p class="light red-text text-lighten-2 center">抱歉，没有符合您查询条件的结果。</p>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <hr class="hide-on-large-only">
            <?php include View::getView('side');?>
        </div>
    </div>
</main>

<?php include View::getView('footer');?>