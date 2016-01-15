<?php
/**
 * 侧边栏组件: 分类
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<h5 class="light teal-text text-darken-2 center">
    <?php echo $widgets_exist['sort']['title'];?>
</h5>
<ul id="blogsort">
    <?php $i=0; foreach($sort_cache as $value): if ($value['pid'] != 0) continue; ?>
        <li>
            <a href="<?php echo Url::sort($value['sid']); ?>">
                <?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)
            </a>
            <?php if (!empty($value['children'])): ?>
                <ul>
                <?php $children = $value['children']; foreach ($children as $key): $value = $sort_cache[$key]; ?>
                    <li>
                        <a href="<?php echo Url::sort($value['sid']); ?>">
                            <?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>