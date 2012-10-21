<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $baseUrl = Yii::app()->request->baseUrl;?>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8"/>
    <link rel="stylesheet" href="<?php echo $baseUrl?>/css/styles_reset.css"/>
    <link rel="stylesheet" href="<?php echo $baseUrl?>/css/base.css"/>
    <link rel="stylesheet" href="<?php echo $baseUrl?>/css/mainlayout.css"/>
</head>
<body>
    <div class="header_title"></div>
    <div class="wrapper">
        <div class="section_left">
            <img class="logo" src="<?php echo $baseUrl?>/images/dg_logo.png" />
            <div class="clear"></div>
            <img src="<?php echo $baseUrl?>/images/tailoring_element.jpg" />
            <div class="clear"></div>
            <ul class="nav_main">
                <li><?php echo CHtml::link("首页", "http://www.baidu.com");?></a></li>
                <li><?php echo CHtml::link("栏目", "http://www.baidu.com");?></a></li>
                <li><?php echo CHtml::link("关于我们", "http://www.baidu.com");?></a></li>
                <li><?php echo CHtml::link("其他", "http://www.baidu.com");?></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="section_right">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>
