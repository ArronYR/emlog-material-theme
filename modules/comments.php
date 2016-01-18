<?php
/**
 * 文章评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

extract($comments);
$isGravatar = Option::get('isgravatar');
?>
<hr>
<?php foreach($commentStacks as $cid): $comment = $comments[$cid];?>
    <div class="comment" id="comment-<?php echo $comment['cid']; ?>">
        <a name="<?php echo $comment['cid']; ?>"></a>
        <?php if($isGravatar == 'y'): ?>
            <div class="avatar">
                <img src="<?php echo getGravatar($comment['mail']); ?>" />
            </div>
        <?php endif; ?>
        <div class="comment-info">
            <b><?php echo $comment['poster']; ?> </b><br /><span class="comment-time"><?php echo $comment['date']; ?></span>
            <div class="comment-content"><?php echo $comment['content']; ?></div>
            <div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div>
        </div>
        <?php blog_comments_children($comments, $comment['children']); ?>
    </div>
<?php endforeach; ?>