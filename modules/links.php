<?php
/**
 * 友情链接
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<div class="links">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <h5 class="white-text">友情链接</h5>
                <ul>
                <?php foreach($link_cache as $value): ?>
                    <li><a class="white-text" href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>