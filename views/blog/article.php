<?php ?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <meta name="theme-color" content="#f8f5ec" />
    <meta name="msapplication-navbutton-color" content="#f8f5ec">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f8f5ec">

    <meta name="description" content="从零开始的 Mac"/>
    <meta name="keywords" content="Ahonn, Ahonn's Blog, 前端，JavaScript，Vim, 编程" />
<!--    <meta name="baidu-site-verification" content="0a275bcf7d954b807e1db498d8e5b192" />-->
<!--    <meta name="google-site-verification" content="j5dWC85DkoAfUR50W00ewfii3X9ouH55HnyBP6oZxGE" />-->

    <link rel="alternate" href="/atom.xml" title="Ahonn">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico?v=2.6.0" />
    <link rel="canonical" href="http://www.ahonn.me/2017/08/31/starting-from-scratch-mac/"/>

    <link rel="stylesheet" type="text/css" href="<?= \yii\helpers\Url::to('@web/css/style.css') ?>" />

    <title> 从零开始的 Mac - Ahonn </title>
</head>

<body>

<div id="mobile-navbar" class="mobile-navbar">
    <div class="mobile-header-logo">
        <a href="<?= \yii\helpers\Url::to(['blog/index']) ?>" class="logo">Jacklucn</a>
    </div>
    <div class="mobile-navbar-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<nav id="mobile-menu" class="mobile-menu slideout-menu">
    <ul class="mobile-menu-list">

        <a href="<?= \yii\helpers\Url::to(['blog/index']) ?>">
            <li class="mobile-menu-item">
                首页
            </li>
        </a>

        <a href="<?= \yii\helpers\Url::to(['blog/archives']) ?>">
            <li class="mobile-menu-item">
                归档
            </li>
        </a>

        <a href="<?= \yii\helpers\Url::to(['blog/about']) ?>">
            <li class="mobile-menu-item">
                关于
            </li>
        </a>

    </ul>
</nav>

<div class="container" id="mobile-panel">
    <header id="header" class="header"><div class="logo-wrapper">
            <a href="/." class="logo">Jacklucn</a>
        </div>

        <nav class="site-navbar">
            <ul id="menu" class="menu">
                <li class="menu-item">
                    <a class="menu-item-link" href="<?= \yii\helpers\Url::to(['blog/index']) ?>">
                        首页
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-item-link" href="<?= \yii\helpers\Url::to(['blog/archives']) ?>">
                        归档
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-item-link" href="<?= \yii\helpers\Url::to(['blog/about']) ?>">
                        关于
                    </a>
                </li>

            </ul>
        </nav>
    </header>

    <main id="main" class="main">
        <div class="content-wrapper">
            <div id="content" class="content">

                <article class="post">
                    <header class="post-header">
                        <h1 class="post-title">
                            从零开始的 Mac
                        </h1>

                        <div class="post-meta">
        <span class="post-time">
          2017-08-31
        </span>
                            <div class="post-category">
                                <a href="/categories/tool/">折腾工具</a>
                            </div>

                            <div class="post-visits"
                                 data-url="/2017/08/31/starting-from-scratch-mac/"
                                 data-title="从零开始的 Mac">
                                阅读次数
                            </div>

                        </div>
                    </header>

                    <div class="post-content">

                        <p><img src="http://ouv0frko5.bkt.clouddn.com/2017-08-31-Code%20Geass.png" alt="Code Geass"></p>
                        <blockquote>
                            <p>题图是现在的壁纸 <a href="https://alpha.wallhaven.cc/wallpaper/456973" target="_blank" rel="noopener">Code Geass</a> （没错，就是反叛的鲁鲁修中的 Code Geass）</p>
                        </blockquote>
                        <p>昨天乱搞把电脑搞炸了，然后又误操作把系统格掉了。悲剧.. 除了在 Github 上的代码其他什么东西都没有了，心疼收集了那么久的电子书..</p>
                        <p>然后只能重装系统了，想想也好.. 是时候清理清理电脑了，正好借着这个机会整理一下。一开始使用简直烦到不行。没有安装罗技的鼠标驱动，鼠标按键无法打开 Launchpad，虽然可以用键盘快捷键，还是觉得很不舒服。还有一个很重点的是没有 Alfred，简直变得生活不能自理了。然后还有很多好用的工具要重新安装，找原先的 iTerm2 配色找了半天.. 所以说论备份的重要性..</p>
                        <a id="more"></a>
                        <p>只好从零开始了，下面是一些比较 Nice 的工具：</p>
                        <ul>
                            <li>Alfred：这个不用说，必备。没有这个我都不会用电脑了</li>
                            <li>Chrome：不解释，还好它能同步回之前的书签什么的</li>
                            <li>Shadowsocks：翻墙必备，没有它简直不像在上网</li>
                            <li>iHosts：修改 host 神器，开放必备</li>
                            <li>iPic：好用的图床工具，一键传上七牛</li>
                            <li>GhostSKB：自动根据 App 切换输入法</li>
                            <li>Dash：文档神器，搭配 Alfred 查 API so easy</li>
                            <li>Magnet：类似 Windows 上的窗口控制，触顶全屏等</li>
                            <li>Jietu：腾讯出品的截图软件，关掉其他截屏只用这个</li>
                            <li>Paste: 剪切板增强，体验超级好</li>
                            <li>Bartender：上面安装了那么多东西菜单栏一堆图标，用这个管理</li>
                        </ul>
                        <p>除了这些 App 还有非常重要的东西要安装：iTerm2 + zsh + oh my zsh，接着把 Neovim 装上下载之前的配置，调整 iTerm2 的配色（现在用的是这个 <a href="https://github.com/w0ng/vim-hybrid" target="_blank" rel="noopener">vim-hybrid</a>，主要是配合 Vim 的配色），现在可以美滋滋的写代码了～</p>
                        <p>等一下，我的 Chrome 插件呢？还好它们都回同步回来，谢天谢地。我的插件主要有这些：</p>
                        <ul>
                            <li>Octotree：Github 的侧栏目录树</li>
                            <li>GitHub Hovercard：Github Hover 卡片</li>
                            <li>OneTab：开太多标签又不想关掉的时候用这个</li>
                            <li>LassPass：密码同步，没钱买 1Password 的话用这个还是不错的</li>
                            <li>Advertising Terminator：屏蔽广告</li>
                            <li>Proxy SwitchyOmega：网络代理，主要配合 Shadowsocks</li>
                            <li>Vimium：浏览器 Vim 模式，可以丢掉鼠标了</li>
                            <li>Web Timer：统计上网花费时间</li>
                        </ul>
                        <p>然后就是一些经常用的 App 了，Quiver、Pocket、VS Code、网易云音乐之类的。差不多装了该装的东西了，用起来顺心多了… 剩下的就是之后慢慢优化了。</p>
                        <p>之前不知道 MacOS 有单用户模式..Google 出来的也没人提.. 等我格完盘之后才发现。另外其实我直接重装的话个人数据都还在的.. 说到底还是我自己作死点了格盘.. 说多了都是泪..</p>

                    </div>

                    <div class="post-copyright">
                        <p class="copyright-item">
                            <span>原文作者: </span>
                            <a href="http://www.ahonn.me">Ahonn</a>
                        </p>
                        <p class="copyright-item">
                            <span>原文链接: </span>
                            <a href="http://www.ahonn.me/2017/08/31/starting-from-scratch-mac/">http://www.ahonn.me/2017/08/31/starting-from-scratch-mac/</a>
                        </p>
                        <p class="copyright-item">
                            <span>许可协议: </span>

                            <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank">知识共享署名-非商业性使用 4.0 国际许可协议</a>
                        </p>
                    </div>

                    <footer class="post-footer">

                        <div class="post-tags">

                            <a href="/tags/MacOS/">MacOS</a>

                            <a href="/tags/Chrome/">Chrome</a>

                        </div>

                        <nav class="post-nav">

                            <a class="prev" href="/2017/09/27/rain-soulja/">
                                <i class="iconfont icon-left"></i>
                                <span class="prev-text nav-default">Rain - SoulJa</span>
                                <span class="prev-text nav-mobile">上一篇</span>
                            </a>

                            <a class="next" href="/2017/08/17/finally-i-chose-quiver/">
                                <span class="next-text nav-default">最后我选择了 Quiver</span>
                                <span class="prev-text nav-mobile">下一篇</span>
                                <i class="iconfont icon-right"></i>
                            </a>

                        </nav>
                    </footer>
                </article>
            </div>

            <div class="comments" id="comments">

                <div id="disqus_thread">
                    <noscript>
                        Please enable JavaScript to view the
                        <a href="//disqus.com/?ref_noscript">comments powered by Disqus.</a>
                    </noscript>
                </div>

            </div>

        </div>
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

<script type="text/javascript">
    var disqus_config = function () {
        this.page.url = 'http://www.ahonn.me/2017/08/31/starting-from-scratch-mac/';
        this.page.identifier = '2017/08/31/starting-from-scratch-mac/';
        this.page.title = '从零开始的 Mac';
    };
    (function() {
        var d = document, s = d.createElement('script');

        s.src = '//ahonn.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>

<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/jquery-3.1.1.min.js')?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/slideout.js')?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/even.js')?>"></script>
<script type="text/javascript" src="<?= \yii\helpers\Url::to('@web/js/bootstrap.js')?>"></script>

</body>
</html>

