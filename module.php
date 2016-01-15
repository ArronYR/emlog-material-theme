<?php
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

global $CACHE;
$navi_cache = $CACHE->readCache('navi');
$link_cache = $CACHE->readCache('link');
$user_cache = $CACHE->readCache('user');

global $widgets_exist;
$widgets_exist = [];
// 个人资料
function widget_blogger($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['blogger']['title'] = $titles;
    $widgets_exist['blogger']['exists'] = $exists;
}
// 搜索
function widget_search($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['search']['title'] = $titles;
    $widgets_exist['search']['exists'] = $exists;
}

// 友情链接
function widget_link($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['link']['title'] = $titles;
    $widgets_exist['link']['exists'] = $exists;
}

$widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
foreach ($widgets as $val)
{
    $widget_title = @unserialize($options_cache['widget_title']);
    $custom_widget = @unserialize($options_cache['custom_widget']);
    if(strpos($val, 'custom_wg_') === 0){
        $callback = 'widget_custom_text';
        if(function_exists($callback)){
            call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
        }
    }else{
        $callback = 'widget_'.$val;
        if(function_exists($callback)){
            preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
            $wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
            call_user_func($callback, htmlspecialchars($wgTitle));
        }
    }
}

?>
