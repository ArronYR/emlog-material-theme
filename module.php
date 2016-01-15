<?php
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

global $CACHE;
$navi_cache = $CACHE->readCache('navi');


?>

<?php
//blog：导航
function blog_navi(){
    global $CACHE;
    $navi_cache = $CACHE->readCache('navi');
    ?>
    <ul class="bar">
    <?php
    foreach($navi_cache as $value):

        if ($value['pid'] != 0) {
            continue;
        }

        if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
            ?>
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
            <?php 
            continue;
        endif;
        $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'current' : 'common';
        ?>
        <li class="item <?php echo $current_tab;?>">
            <a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a>
            <?php if (!empty($value['children'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['children'] as $row){
                        echo '<li><a href="'.Url::sort($row['sid']).'">'.$row['sortname'].'</a></li>';
                }?>
            </ul>
            <?php endif;?>

            <?php if (!empty($value['childnavi'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['childnavi'] as $row){
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li><a href="' . $row['url'] . "\" $newtab >" . $row['naviname'].'</a></li>';
                }?>
            </ul>
            <?php endif;?>

        </li>
    <?php endforeach; ?>
    </ul>
<?php }?>