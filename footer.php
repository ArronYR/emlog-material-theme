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
</footer>
<script>prettyPrint();</script>

</body>
</html>