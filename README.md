# Emlog-Material-Theme

## Preview

![图片](http://7rfkwd.com1.z0.glb.clouddn.com/preview.jpg)

## Features

1. 响应式
2. 支持官方的所有的侧边栏组件：
	`个人资料`、`日历`、`最新微语`、`标签`、`分类`、`存档`、`最新评论`、`最新文章`、`热门文章`、`随机文章`、`链接`、`搜索`以及第三方插件。（可根据后台设置自定义排序）
3. 重新组织模板文件，重写`module.php`和所有主题组件，结构清晰，代码直观便于修改。

## Usage

方式一：[Github](https://github.com/ArronYR/emlog-material-theme)，点击右方【Download ZIP】现在文件，将其移入`emlog`的`content/templates/`目录下，进入网站后台，点击【模板】选项，选择`MaterialTheme `即可。

方式二：在网站后台的【应用中心】【模板】下载（确保`content/templates/`有写入权限）。

方式三：在网站后台的【模板】->【安装模板】中上传【方式一】下载的zip包即可。

## Code Themes

配合该主题有`5`种代码样式：

![图片](http://7rfkwd.com1.z0.glb.clouddn.com/Prettify%20Themes%20Gallery.png)

通过修改主题目录下的`header.php`引入不同的样式即可：

```css
<link href="<?php echo TEMPLATE_URL;?>css/prettify-default-theme.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL;?>css/prettify-desert-theme.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL;?>css/prettify-sunburst-theme.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL;?>css/prettify-obsidian-theme.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL;?>css/prettify-doxy-theme.css" rel="stylesheet">
```

## 更新Banner
因为只默认模板可以自定义banner，其它模板没这功能。所以如果需要自定义请在【模板】设置中先上传该banner图片，然后切换回该主题即可。

![banner](http://7rfkwd.com1.z0.glb.clouddn.com/emlog-banner.png)

