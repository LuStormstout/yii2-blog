<?php
/* @var $content string */

use yii\helpers\Url;
\frontend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="Jacklucn, Jacklucn's Blog, 后端，PHP，编程"/>

    <?= \yii\helpers\Html::csrfMetaTags() ?>

    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico?v=2.6.0"/>

    <link rel="canonical" href="https://www.jacklucn.com/"/>
    <link rel="stylesheet" href="<?= \yii\helpers\Url::to('@web/css/comment.css') ?>">
    <link rel="stylesheet" href="<?= \yii\helpers\Url::to('@web/css/buttons.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= Url::to('@web/css/style.css') ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= Url::to('@web/images/IMG_0128.jpg') ?>">

    <title> Jacklucn </title>
</head>

<body>
<?php $this->beginBody() ?>
<div id="mobile-navbar" class="mobile-navbar">
    <div class="mobile-header-logo">
        <a href="<?= Url::to(['index/index']) ?>" class="logo">Jacklucn</a>
    </div>
    <div class="mobile-navbar-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<nav id="mobile-menu" class="mobile-menu slideout-menu">
    <ul class="mobile-menu-list">
        <a href="<?= Url::to(['index/index']) ?>">
            <li class="mobile-menu-item">
                首页
            </li>
        </a>
        <a href="<?= Url::to(['index/archives']) ?>">
            <li class="mobile-menu-item">
                归档
            </li>
        </a>
        <a href="<?= Url::to(['index/about']) ?>">
            <li class="mobile-menu-item">
                关于
            </li>
        </a>
    </ul>
</nav>

<div class="container" id="mobile-panel">

    <header id="header" class="header">
        <div class="logo-wrapper">
            <a href="<?= Url::to(['index/index']) ?>" class="logo">Jacklucn</a>
        </div>
        <nav class="site-navbar">
            <ul id="menu" class="menu">
                <li class="menu-item">
                    <a class="menu-item-link" href="<?= Url::to(['index/index']) ?>">
                        首页
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-item-link" href="<?= Url::to(['index/archives']) ?>">
                        归档
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-item-link" href="<?= Url::to(['index/about']) ?>">
                        关于
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="main" class="main">
        <?= $content; ?>
    </main>

    <footer id="footer" class="footer">
        <div class="social-links">
            <a href="mailto:jacklu.net@gmail.com" class="iconfont icon-email" title="email"></a>
            <a href="https://github.com/jacklucn" class="iconfont icon-github" title="github"></a>
            <a href="https://www.zhihu.com/people/jacklucn/activities" class="iconfont icon-zhihu" title="zhihu"></a>
        </div>
        <div class="copyright">
            <div class="container">
                <p class="pull-left">&copy; Jacklucn <?= date('Y') ?></p>
            </div>
        </div>
    </footer>
    <div class="back-to-top" id="back-to-top">
        <i class="iconfont icon-up"></i>
    </div>
</div>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/jquery-3.1.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/slideout.js') ?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/even.js') ?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/bootstrap.js') ?>"></script>

</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
