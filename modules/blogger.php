<?php
/**
 * 侧边栏组件: 个人资料
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<?php if ($widgets_exist['blogger']['exists']):?>
    <a id="logo-container" href="<?php echo BLOG_URL; ?>" class="brand-logo">
        <?php if (!empty($user_cache[1]['photo']['src'])): ?>
            <img class="circle responsive-img" src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>">
        <?php endif;?>
    </a>
    <?php if ($user_cache[1]['mail'] != ''):?>
        <a class="blogger-email waves-effect waves-teal" href="mailto:<?php echo $user_cache[1]['mail'];?>">
            <div class="blogger-name"><?php echo $user_cache[1]['name'];?></div>
        </a>
    <?php else:?>
        <div class="blogger-name"><?php echo $user_cache[1]['name'];?></div>
    <?php endif;?>
    <p class="blogger-des"><?php echo $user_cache[1]['des']; ?></p>
<?php else:?>
    <a id="logo-container" href="<?php echo BLOG_URL; ?>" class="brand-logo">
        <img class="circle responsive-img" src="<?php echo TEMPLATE_URL; ?>images/2230.jpeg">
    </a>
<?php endif;?>