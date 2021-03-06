<?php
/**
 * 页面模块: 导航栏组件
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<header>
    <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
    <ul id="nav-mobile" class="side-nav fixed" style="left: 0px;">
        <li class="logo center">
            <?php require_once View::getView('modules/blogger');?>
        </li>
        <?php if($widgets_exist['search']['exists']): ?>
            <li class="search">
                <div class="search-wrapper card">
                    <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
                        <input name="keyword" class="search" type="text" id="search">
                        <i class="material-icons">search</i>
                    </form>
                </div>
            </li>
        <?php else:?>
            <hr>
        <?php endif;?>
        <?php foreach ($navi_cache as $value):?>
            <?php if($value['pid'] != 0){continue;}?>
            <?php if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):?>
                <li class="bold"><a href="<?php echo BLOG_URL; ?>admin/" class="waves-effect waves-light">管理站点</a></li>
                <li class="bold"><a href="<?php echo BLOG_URL; ?>admin/?action=logout" class="waves-effect waves-light">退出</a></li>
            <?php continue; endif;
                $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
                $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
                $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'active' : '';
            ?>
            <?php if (!empty($value['children'])) :?>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-light"><?php echo $value['naviname']; ?></a>
                            <div class="collapsible-body">
                                <ul>
                                    <?php foreach ($value['children'] as $row):?>
                                        <li><a class="waves-effect waves-light" href="<?php echo Url::sort($row['sid']);?>" ><?php echo $row['sortname'];?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif;?>
            <?php if (!empty($value['childnavi'])) :?>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-light"><?php echo $value['naviname']; ?></a>
                            <div class="collapsible-body">
                                <ul>
                                    <?php foreach ($value['childnavi'] as $row):?>
                                        <?php $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';?>
                                        <li><a class="waves-effect waves-light" href="<?php echo $row['url'];?>" <?php echo $newtab;?>><?php echo $row['naviname'];?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif;?>
            <?php if (empty($value['children']) && empty($value['childnavi'])) :?>
                <li class="bold <?php echo $current_tab;?>">
                    <a href="<?php echo $value['url']; ?>" <?php echo $newtab;?> class="waves-effect waves-light"><?php echo $value['naviname']; ?></a>
                </li>
            <?php endif;?>
        <?php endforeach;?>
    </ul>
</header>