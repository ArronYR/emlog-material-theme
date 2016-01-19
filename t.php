<?php
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<main>
    <div class="section" id="log-banner">
        <div class="container margin-top">
            <div class="row margin-bottom">
                <div class="col s12">
                    <h4 class="header center-on-small-only">微语</h4>
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

    <div class="container" id="twitter">
        <div class="row margin-top">
            <div class="col s12">
                <?php
                    foreach($tws as $val):
                    $author = $user_cache[$val['author']]['name'];
                    $avatar = empty($user_cache[$val['author']]['avatar']) ?
                                BLOG_URL . 'admin/views/images/avatar.jpg' :
                                BLOG_URL . $user_cache[$val['author']]['avatar'];
                    $tid = (int)$val['id'];
                            '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
                ?>
                <ul class="collapsible" data-collapsible="expandable">
                    <li class="active twitter">
                        <div class="collapsible-header active">
                            <div class="avatar">
                                <img src="<?php echo $avatar; ?>" width="40" height="40" />
                            </div>
                            <b class="light margin-horizontal"><?php echo $author; ?> </b>
                            <span class="light twitter-time"><?php echo $val['date'];?></span>
                        </div>
                        <div class="collapsible-body">
                            <p>
                                <?php echo $val['t'].'<br/>';?>
                                <?php if (!empty($val['img'])):?>
                                    <a title="查看图片" href="<?php echo BLOG_URL.str_replace('thum-', '', $val['img']);?>" target="_blank">
                                        <img width="80" src="<?php echo BLOG_URL.$val['img'];?>"/>
                                    </a>
                                <?php endif;?>
                            </p>
                            <div class="twitter-reply right-align">
                                <a class="light red-text text-lighten-2 waves-effect waves-green btn-flat" href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">
                                    回复(<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)
                                </a>
                            </div>
                        </div>
                    </li>
                    <ul id="r_<?php echo $tid;?>" class="r twitter-reply-list"></ul>
                    <?php if ($istreply == 'y'):?>
                    <div class="twitter-reply-form" id="rp_<?php echo $tid;?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="comment" id="rtext_<?php echo $tid; ?>"  length="140" class="materialize-textarea"></textarea>
                                <label for="comment">发表回复</label>
                            </div>
                        </div>
                        <?php if(ROLE != ROLE_ADMIN && ROLE !== ROLE_WRITER):?>
                        <div class="row margin-bottom-0">
                            <div class="input-field col s12 m6">
                                <input type="text" id="rname_<?php echo $tid; ?>" class="validate" length="10" value="" />
                                <label for="rname_<?php echo $tid; ?>">昵称</label>
                            </div>
                        </div>
                        <div class="row margin-bottom-0">
                            <?php if($reply_code == 'y'):?>
                            <div class="input-field col s12 m6">
                                <?php echo $rcode; ?>
                                <input type="text" id="rcode_<?php echo $tid; ?>" value="" />
                            </div>
                            <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="row padding-bottom">
                            <div class="input-field col s6">
                                <?php echo $verifyCode; ?>
                                <button class="btn waves-effect waves-light" type="submit" tabindex="6" name="action" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);">
                                    发表评论
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s12 m6 msg">
                                <span id="rmsg_<?php echo $tid; ?>" class="light red-text text-lughten-2"></span>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </ul>
                <?php endforeach;?>
            </div>
        </div>
        <div class="row" id="pagenavi">
            <ul class="pagination center">
                <?php echo $pageurl;?>
            </ul>
        </div>
    </div>
</main>

<?php include View::getView('footer');?>