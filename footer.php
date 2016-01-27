<?php
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<footer class="page-footer">
    <?php if($widgets_exist['link']['exists']):?>
        <?php require_once View::getView('modules/links');?>
    <?php endif;?>
    <div class="footer-copyright">
        <div class="container">
            &copy;&nbsp;<?php echo date('Y');?>&nbsp;&nbsp;|&nbsp;&nbsp;
            Powered by <a class="grey-text text-lighten-4" href="http://www.emlog.net" title="采用emlog系统">emlog</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <?php if (!Option::get('rss_output_num')):?>
                <a class="grey-text text-lighten-4" href="<?php echo BLOG_URL; ?>rss.php" title="RSS订阅">RSS订阅</a>
            <?php endif;?>
            <a class="grey-text text-lighten-4 right" href="https://github.com/ArronYR/emlog-material-theme">Theme By ArronYR</a>
        </div>
    </div>
    <?php doAction('index_footer'); ?>
</footer>

<!-- 添加 class click-to-toggle 为点击切换, horizontal 为水平-->
<div class="fixed-action-btn hide" style="bottom: 25px; right: 24px;" id="fixed-menu">
    <a class="btn-floating btn-large waves-effect waves-light green">
        <i class="large mdi-navigation-menu"></i>
    </a>
    <ul>
        <li>
            <a class="btn-floating waves-effect waves-light red" id="goto-top" title="回到顶部">
                <i class="material-icons">navigation</i>
            </a>
        </li>
        <li>
            <a href="<?php echo BLOG_URL; ?>" class="btn-floating waves-effect waves-light blue" title="首页">
                <i class="material-icons">home</i>
            </a>
        </li>
    </ul>
</div>

</body>
</html>