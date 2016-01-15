<?php
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

global $CACHE;
$navi_cache = $CACHE->readCache('navi');
$link_cache = $CACHE->readCache('link');
$user_cache = $CACHE->readCache('user');
$tag_cache = $CACHE->readCache('tags');
$sort_cache = $CACHE->readCache('sort');
$newtws_cache = $CACHE->readCache('newtw');

$istwitter = Option::get('istwitter');

global $widgets_exist;
global $widgets_left;
$widgets_exist = [];
$widgets_left = 0;

// 个人资料
function widget_blogger($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['blogger']['title'] = $title;
    $widgets_exist['blogger']['exists'] = $exists;
}

// 日历
function widget_calendar($title, $exists=true){
    global $widgets_exist, $widgets_left;
    $widgets_exist['calendar']['title'] = $title;
    $widgets_exist['calendar']['exists'] = $exists;
    $widgets_left += 1;
}

// 标签
function widget_tag($title, $exists=true){
    global $widgets_exist, $widgets_left;
    $widgets_exist['tag']['title'] = $title;
    $widgets_exist['tag']['exists'] = $exists;
    $widgets_left += 1;
}

// 分类
function widget_sort($title, $exists=true){
    global $widgets_exist, $widgets_left;
    $widgets_exist['sort']['title'] = $title;
    $widgets_exist['sort']['exists'] = $exists;
    $widgets_left += 1;
}

// 最新微语
function widget_twitter($title, $exists=true){
    global $widgets_exist, $widgets_left;
    $widgets_exist['twitter']['title'] = $title;
    $widgets_exist['twitter']['exists'] = $exists;
    $widgets_left += 1;
}

// 搜索
function widget_search($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['search']['title'] = $title;
    $widgets_exist['search']['exists'] = $exists;
}

// 友情链接
function widget_link($title, $exists=true){
    global $widgets_exist;
    $widgets_exist['link']['title'] = $title;
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
