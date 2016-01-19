<?php
/**
 * 文章子评论
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

extract($comments);
?>

<?php foreach($comment['children'] as $child):?>
    <?php
        $isGravatar = Option::get('isgravatar');
        $comment = $comments[$child];
        $comment['poster'] = $comment['url'] ? '<a class="light margin-horizontal" href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
    ?>
    <li class="active comment comment-children" id="comment-<?php echo $comment['cid']; ?>">
        <a name="<?php echo $comment['cid']; ?>"></a>
        <div class="collapsible-header active">
            <?php if($isGravatar == 'y'): ?>
                <div class="avatar">
                    <img src="<?php echo getGravatar($comment['mail']); ?>" width="40" height="40" />
                </div>
            <?php endif; ?>
            <b><?php echo $comment['poster']; ?> </b>
            <span class="comment-time"><?php echo $comment['date']; ?></span>
        </div>
        <div class="collapsible-body">
            <p><?php echo $comment['content']; ?></p>
            <?php if($comment['level'] < 4): ?>
                <div class="comment-reply right-align">
                    <a class="light red-text text-lighten-2 waves-effect waves-green btn-flat" href="#comment-<?php echo $comment['cid']; ?>" cid="<?php echo $comment['cid']; ?>">回复</a>
                </div>
            <?php endif; ?>
        </div>
    </li>
    <?php include View::getView('modules/comment-children');?>
<?php endforeach; ?>