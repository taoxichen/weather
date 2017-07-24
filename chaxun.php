<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <meta charset="UTF-8">
    <title>天气查询网站</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="author" content="maicong.me">
    <meta name="keywords" content="天气查询网站、在线查询">
    <meta name="description" content="天气查询网站、在线查询">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="application-name" content="天气查询网站">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="static/favicon.ico">
    <link rel="apple-touch-icon" href="static/apple-touch-icon.png">
    <link rel="canonical" href="http://www.tait.vip">
    <link rel="stylesheet" href="//cdn.bootcss.com/amazeui/2.3.0/css/amazeui.min.css">
    <link rel="stylesheet" href="static/style.css?v<?php echo MC_VERSION; ?>">
</head>

</br>
<body>
<header class="am-topbar am-topbar-fixed-top">
        <div class="am-container">
            <h1 class="am-topbar-brand">
              <a href="/">天气查询网站</a>
            </h1>
            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}">
              <span class="am-sr-only">导航切换</span>
              <span class="am-icon-bars"></span>
            </button>
            <nav class="am-collapse am-topbar-collapse am-fr" id="collapse-head">
                <ul class="am-nav am-nav-pills am-topbar-nav">
                    <li>
                      <a href="//www.tait.vip">源码下载</a>
                    </li>
                    <li class="am-active">
                      <a href="/index.php">天气查询网站</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
	 <header class="am-padding-vertical">
                <h2 class="about-title about-color">天气查询网站</h2>
                <p class="am-text-center">在线查天气</p>
            </header>
			<hr>
<div class="am-container am-margin-vertical-xl">
	<div class="am-u-lg-12 am-padding-vertical">
		<div class="am-u-md-12 am-u-sm-centered">
			<ul id="form-tabs" class="am-nav am-nav-pills am-nav-justify am-margin-bottom music-tabs">
                            <li  data-filter="name">
                                 <a href="/1/index.php">当前城市</a>
                            </li>
                            <li class="am-active" data-filter="id">
                                <a href="/1/chaxun.php">天气查询网站</a>
                            </li>
                            <li data-filter="url">
                                <a>关于</a>
                            </li>
                        </ul>
       
                        <form action="/1/weather.php" method="post" class="am-form-field am-input-lg am-text-center am-radius">
                        直接输入你要查的地区即可 <input type="text" name="fname">
                        <input type="submit" value="提交">
                        </form>
		</div>
	</div>
</div>
        <div class="am-popup" id="update-info">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">更新日志</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <ul>
                        <li>2017.07.20 <code>v1.0.0</code> 初学立flag，任务为弄个查询天气网站</li>
						<li>2017.07.21 <code>v1.0.1</code> 寻找查询天气接口，未果，无奈使用，他人网站插件进行完善</li>
						<li>2017.07.23 <code>v1.0.2</code> 基于一个大佬框架，进行美化</li>
						<li>2017.07.23 <code>v1.0.2</code> 修复各种bug</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="am-popup" id="copr-info">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">版权声明</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <p>本站由@tao开发</p>
					<P>基于一个大佬框架 github：https://github.com/maicong/music</P>
					<P>使用天气插件:http://www.tianqi.com/plugin/</p>
                    <p>提价bug联系Q1349801879</p>
					
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p class="am-text-sm">如果遇到bug，请 <a href="https://www.tait.vip" target="_blank" rel="author">@tao</a> © 2017进行留言-<?php echo date('Y', time()); ?> <a href="javascript:void(0)" data-am-modal="{target: '#update-info'}">更新日志</a> <a href="javascript:void(0)" data-am-modal="{target: '#copr-info'}">版权声明</a> <a href="https://www.tait.vip" target="_blank">开源共享</a></p>
    </footer>
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
    <script src="static/music.js?v<?php echo MC_VERSION; ?>"></script>
</body>
</html>