<?php
/**
 * 发表文章评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<?php if($allow_remark == 'y'): ?>
<div id="comment-place">
    <div class="comment-post" id="comment-post">
        <form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
            <input type="hidden" name="gid" value="<?php echo $logid; ?>" />
            <?php if(ROLE == ROLE_VISITOR): ?>
            <div class="row">
                <div class="input-field col s12 m6 l4">
                    <input type="text" id="author" name="comname" class="validate" length="10" value="<?php echo $ckname; ?>" size="22" tabindex="1">
                    <label for="author" data-error="wrong" data-success="right">昵称</label>
                </div>
                <div class="input-field col s12 m6 l4">
                    <input type="email" id="email" name="commail" class="validate" length="128" value="<?php echo $ckmail; ?>" size="22" tabindex="2">
                    <label for="email" data-error="wrong" data-success="right">邮件地址 (选填)</label>
                </div>
                <div class="input-field col s12 m6 l4">
                    <input type="url" id="url" name="comurl" class="validate" length="128" value="<?php echo $ckurl; ?>" size="22" tabindex="3">
                    <label for="url" data-error="wrong" data-success="right">个人主页 (选填)</label>
                </div>
            </div>
            <?php endif; ?>
            <div class="row margin-bottom-0">
                <div class="input-field col s12">
                    <textarea name="comment" id="comment" tabindex="4" class="materialize-textarea"></textarea>
                    <label for="comment">评论内容</label>
                </div>
            </div>
            <div class="row padding-bottom">
                <div class="input-field col s6">
                    <?php echo $verifyCode; ?>
                    <button class="btn waves-effect waves-light" type="submit" tabindex="6" name="action" id="comment_submit">
                        发表评论
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
            <input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="-1"/>
        </form>
    </div>
</div>
<div id="comment-modal" class="modal bottom-sheet">
    <div class="modal-content">
        <div class="right-align">
            <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">取消回复</a>
        </div>
        <div id="comment-body"></div>
    </div>
</div>
<?php endif; ?>