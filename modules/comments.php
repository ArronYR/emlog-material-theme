<?php
/**
 * 文章评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

extract($comments);
$isGravatar = Option::get('isgravatar');
?>
<hr>
<a name="comments"></a>
<?php foreach($commentStacks as $cid): ?>
    <?php
        $comment = $comments[$cid];
        $comment['poster'] = $comment['url'] ? '<a class="light margin-horizontal" href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
    ?>
    <ul class="collapsible" data-collapsible="expandable">
        <li class="active comment" id="comment-<?php echo $comment['cid']; ?>">
            <a name="<?php echo $comment['cid']; ?>"></a>
            <div class="collapsible-header active">
                <?php if($isGravatar == 'y'): ?>
                    <div class="avatar">
                        <img src="<?php echo getGravatar($comment['mail']); ?>" width="40" height="40" />
                    </div>
                <?php endif; ?>
                <b><?php echo $comment['poster']; ?> </b>
                <span class="light comment-time"><?php echo $comment['date']; ?></span>
            </div>
            <div class="collapsible-body">
                <p><?php echo $comment['content']; ?></p>
                <div class="comment-reply right-align">
                    <a class="light red-text text-lighten-2 waves-effect waves-green btn-flat" href="#comment-<?php echo $comment['cid']; ?>" cid="<?php echo $comment['cid']; ?>">回复</a>
                </div>
            </div>
        </li>
        <?php include View::getView('modules/comment-children');?>
    </ul>
<?php endforeach; ?>

<div class="row" id="pagenavi">
    <ul class="pagination center">
        <?php echo $commentPageUrl;?>
    </ul>
</div>