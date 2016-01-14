<?php
/**
 * 自定义404页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>错误提示-页面未找到</title>

    <link href="<?php echo TEMPLATE_URL; ?>css/lato.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/materialize.min.css"/>

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .error-container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 72px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="content">
            <div class="title">
                Not found.
            </div>
            <div class="link">
                <a class="waves-effect waves-light btn-large" href="javascript:history.back(-1);">BACK</a>
            </div>
        </div>
    </div>
</body>
</html>