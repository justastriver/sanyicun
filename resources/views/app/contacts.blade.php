<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>About Page | Amaze UI Example</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/app.css"/>
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
  <div class="am-offcanvas-bar">
    <div class="am-offcanvas-content ">
      <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
        <li><a href="index.html" class="am-active">首页</a></li>
        <li><a href="products.html">产品</a></li>
        <li><a href="case.html">案例</a></li>
        <li><a href="signup.html">合作</a></li>
        <li><a href="pricing.html">定制</a></li>
        <li><a href="about.html">关于</a></li>
        <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
        <li><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></li>
      </ul>
    </div>
  </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#"><img src="assets/images/logo.png" /></a>
    </h1>
    <button class="am-btn am-btn-primary am-show-sm-only nav-push-btn am-topbar-toggle " data-am-offcanvas="{target: '#navPush', effect: 'push'}">
      <span class="am-sr-only">导航切换</span> 
      <span class="am-icon-bars"></span>
    </button>
    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="index.html" class="am-active">首页</a></li>
        <li><a href="products.html">产品</a></li>
        <li><a href="case.html">案例</a></li>
        <li><a href="signup.html">合作</a></li>
        <li><a href="pricing.html">定制</a></li>
        <li><a href="about.html">关于</a></li>
        <!-- 如果有二级菜单 以下是二级菜单代码 -->
        <!--<li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            案例 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">标题</li>
            <li><a href="#">1. 默认样式</a></li>
            <li><a href="#">2. 基础设置</a></li>
            <li><a href="#">3. 文字排版</a></li>
            <li><a href="#">4. 网格系统</a></li>
          </ul>
        </li>-->
        <!-- 登录注册按钮 -->
        <div class="am-topbar-right">
          <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
        </div>
        <div class="am-topbar-right">
          <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
        </div>
      </ul>
    </div>
  </div>
</header>

<!-- banner -->
<div class="other-banner-mod am-vertical-align">
    <div class="am-vertical-align-middle">
      <h1>One Web,Any Device</h1>
      <h2>万物互联，无缝体验</h2>
    </div>
</div>

<!-- 链接icon -->
<div class="about-menu-mod">
  <div class="am-container">
    <ul class="about-menu am-avg-md-4 am-avg-sm-4">
      <li>
        <a href="about.html"><i class="menu-icon"></i><span>关于我们</span></a>
      </li>
      <li>
        <a href="reports.html"><i class="menu-icon"></i><span>媒体报道</span></a>
      </li>
      <li class="active">
        <a href="contacts.html"><i class="menu-icon"></i><span>联系方式</span></a>
      </li>
      <li>
        <a href="join.html"><i class="menu-icon"></i><span>加入我们</span></a>
      </li>
    </ul>
  </div>
</div>

<!-- 联系我们 -->
<div class="contact-mod module-wrap no-borderb">
  <div class="am-container">
    <div class="am-u-md-5 am-u-sm-12">
      <dl class="contact-list">
        <dt>公司基本信息</dt>
        <dd>美通云动（北京）科技有限公司</dd>
        <dd>北京市海淀区海淀大街27号亿景大厦三层西侧</dd>
        <dd>邮编：100080</dd>
        <dd>总机：010-53632501</dd>
        <dd>客服与支持：<a href="mailto:service@yunshipei.com">service@yunshipei.com</a></dd>
        <dd>投诉与建议：<a href="mailto:advice@yunshipei.com">advice@yunshipei.com</a></dd>
        <dd>人才招聘：<a href="mailto:jobs@yunshipei.com">jobs@yunshipei.com</a></dd>
        <dt class="hotline">服务热线</dt>
        <dd>产品售前咨询和购买专线：400 069 0309</dd>
        <dd>售后技术咨询及客服专线：400 069 0309</dd>
        <dd>代理商咨询和合作服务专线：010-5363 2515</dd>
      </dl>
    </div>
    <div class="am-u-md-7 am-u-sm-12 address-list-mod">
      <div class="line"></div>
      <dl class="contact-list">
        <dt>访问云适配</dt>
        <dl>
          <dt>中国北京（总部）</dt>
          <dd>北京市海淀区海淀大街27号亿景大厦三层西侧</dd>
          <dd>400 069 0309</dd>
          <dd><a href="mailto:cn@allmobilize.com">cn@allmobilize.com</a></dd>
          <dt>天津分公司</dt>
          <dd>天津市武清开发区创业总部基地C04栋5层</dd>
          <dd>022-5990 2233</dd>
          <dt>美国西雅图</dt>
          <dd>8201 164th Ave NE, Suite 200 Redmond, WA 98052</dd>
          <dd><a href="mailto:us@allmobilize.com">us@allmobilize.com</a></dd>
          <dt>香港特别行政区</dt>
          <dd>Cyberport Entrepreneurship Centre Unit 518, Level 5, Core F, Cyberport 3 100 Cyberport Road,Hong Kong</dd>
          <dd><a href="mailto:hk@allmobilize.com">hk@allmobilize.com</a></dd>
        </dl>
      </dl>
    </div>
  </div>
</div>
<!-- 百度地图 -->
<div style="width:100%;height:700px;" id="dituContent"></div>

<!-- footer -->
<footer>
  <div class="am-container">
    <div class="footer-logo">
      <img src="assets/images/logo-colorful.png" />
    </div>
    <ul class="social-links-list">  
      <li>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=744071477&amp;site=qq&amp;menu=yes" target="_blank" title="qq">
          <i class="am-icon-qq am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank" id="wechat" title="微信">
          <i class="am-icon-weixin am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="http://weibo.com/allmobilize" target="_blank" title="新浪微博">
          <i class="am-icon-weibo am-icon-sm"></i>
        </a>
      </li> 
    </ul>
    <ul class="footer-nav">
      <li>
        <a href="/about.html">关于我们</a>
      </li>
      <li>
        <a href="/faq.html">常见问题</a>
      </li>
      <li>
        <a href="/build.html">移动建站白皮书</a>
      </li>
      <li>
        <a href="http://dev.yunshipei.com/">开发者中心</a>
      </li>
    </ul>
    <ul class="friend-links">
      <li>友情链接：</li>
      <li>
        <a href="http://segmentfault.com/" target="_blank" title="SegmentFault">SegmentFault</a>
      </li>
      <li>
        <a href="http://www.zjgsq.com/" target="_blank" title="Web前端">Web前端</a>
      </li>
      <li>
        <a href="http://apicloud.com/" target="_blank" title="APICloud">APICloud</a>
      </li>
      <li>
        <a href="http://www.w3cdream.com/" target="_blank" title="W3C梦想站">W3C梦想站</a>
      </li>
      <li>
        <a href="http://bbs.egret-labs.org/" target="_blank" title="Egret社区">Egret社区</a>
      </li>
      <li>
        <a href="https://meiqia.com/integrations" target="_blank" title="美洽客服">美洽客服</a>
      </li>
    </ul>
  </div>
</footer>

<!-- 微信弹出框 -->
<div class="weixin-mod">
  <div class="weixin-inner">
    <a class="weixin-close"><i class="am-icon-times-circle"></i></a>
    <div class="qrcode-weixin">
      <img src="assets/images/qrcode-weixin.jpg" alt="">
    </div>
    <div class="weixin-info">在微信上关注我们</div>
  </div>
</div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script src="assets/js/app.js"></script>
<!--<![endif]-->
</html>