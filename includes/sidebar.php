<?php
/**
 * .______    __    __       ___        ______
 * |   _  \  |  |  |  |     /   \      /  __  \
 * |  |_)  | |  |__|  |    /  ^  \    |  |  |  |
 * |   _  <  |   __   |   /  /_\  \   |  |  |  |
 * |  |_)  | |  |  |  |  /  _____  \  |  `--'  |
 * |______/  |__|  |__| /__/     \__\  \______/
 * 
 * Sidebar
 * 
 * @author Bhao
 * @link https://dwd.moe/
 * @version 1.0.2
 */
?>
<div class="right">
  <div class="mdui-card sidebar-info mdui-shadow-10">
    <div class="sidebar-info-img">
      <img class="mdui-img-circle" style="width: 80px;" src="<?php logo(); ?>" />
    </div>
    <div class="sidebar-info-body">
      <?php describe(); ?>
    </div>
  </div>
  <?php if ($this->is('page', $this->options->linksCid) && $this->options->linksDescribe != NULL): ?>
  <div class="mdui-card sidebar-info mdui-shadow-10">
     <ul class="mdui-list">
      <div class="sidebar-reply-title">个人介绍</div>
      <li class="mdui-divider mdui-m-y-0"></li>
        <li class="links-list">
          <div class="links-text"><?php linksDescribe(); ?></div>
        </li>
    </ul>
  </div>
  <?php endif; ?>

    <div class="sidebar-info mdui-shadow-10">
        <ul class="mdui-list">
            <div class="sidebar-reply-title"><strong><a href="https://zhangyaoyu.com/">我的脑电波</a></strong></div>
            <li class="mdui-divider mdui-m-y-0"></li>
            <li class="links-list">
                <div class="links-text"><a href="https://zhangyaoyu.com/2020/03/12/%e4%b8%80%e4%b8%aa%e5%a5%bd%e7%9a%84%e8%ae%a2%e5%8d%95%e5%8f%b7%e6%98%af%e5%a6%82%e4%bd%95%e8%af%9e%e7%94%9f%e7%9a%84/">一个好的订单号是如何诞生的</a></div>
                <div class="links-text"><a href="https://zhangyaoyu.com/2020/02/26/%e8%ae%b0%e4%b8%80%e6%ac%a1%e5%a4%9a%e7%ba%bf%e7%a8%8b%e7%bd%91%e7%bb%9c%e6%95%b0%e6%8d%ae%e6%8b%89%e5%8f%96%e7%9a%84%e4%bc%98%e5%8c%96%e6%80%9d%e8%b7%af/">记一次多线程数据拉取的网络优化思路</a></div>
                <div class="links-text"><a href="https://zhangyaoyu.com/2019/08/15/%e7%ad%96%e7%95%a5%e6%a8%a1%e5%bc%8f%e3%80%81%e5%b7%a5%e5%8e%82%e6%a8%a1%e5%bc%8f%e3%80%81%e8%a1%a8%e9%a9%b1%e5%8a%a8%e5%ae%9e%e8%b7%b5%e5%ba%94%e7%94%a8%e5%9c%ba%e6%99%af-%e7%94%a8%e6%88%b7%e4%bb%bb/">策略模式、工厂模式、表驱动实践应用场景–用户任务系统</a></div>
                <div class="links-text"><a href="https://zhangyaoyu.com/2019/03/26/%e9%98%bf%e9%87%8c-%e8%9a%82%e8%9a%81%e9%87%91%e6%9c%8d%e7%ac%94%e8%af%95%e9%a2%98%e7%9b%ae-ip%e9%bb%91-%e7%99%bd%e5%90%8d%e5%8d%95%e5%b7%a5%e5%85%b7%e6%8e%a5%e5%8f%a3/">阿里-蚂蚁金服笔试题目–ip黑/白名单工具接口</a></div>
                <div class="links-text"><a href="https://zhangyaoyu.com/2019/04/04/java8-hashmap%e5%b8%b8%e8%a7%81%e9%97%ae%e9%a2%98%e7%9a%84%e6%ba%90%e7%a0%81%e7%ae%80%e8%af%bb/">Java8 HashMap常见问题的源码简读</a></div>
                <div class="links-text"><a href="https://zhangyaoyu.com/2019/09/11/%e6%a8%a1%e6%9d%bf%e6%a8%a1%e5%bc%8f%e5%ae%9e%e9%99%85%e5%ba%94%e7%94%a8/">模板方法模式实际应用</a></div>
            </li>
        </ul>
    </div>

  <!--<div class="sidebar-info mdui-shadow-10">
    <ul class="mdui-list">
      <div class="sidebar-reply-title">最新回复</div>
      <li class="mdui-divider mdui-m-y-0"></li>
      <?php /*$this->widget('Widget_Comments_Recent')->to($comments); */?>
      <?php /*while ($comments->next()) : */?>
        <a href="<?php /*$comments->permalink(); */?>">
          <li class="mdui-list-item mdui-ripple sidebar-reply-list">
            <div class="sidebar-reply-text"><?php /*$comments->author(false); */?> : <?php /*$comments->excerpt(); */?></div>
          </li>
          <li class="mdui-divider"></li>
        </a>
      <?php /*endwhile; */?>
    </ul>
  </div>-->
  <?php if($this->options->linksIndexNum != "0"){?>
  <div class="mdui-card sidebar-info mdui-shadow-10">
    <ul class="mdui-list">
      <div class="sidebar-reply-title">友情链接</div>
      <li class="mdui-divider mdui-m-y-0"></li>
      <div class='mdui-row-xs-2'>
        <?php Links_Plugin::output("
        <div class='mdui-col'>
        <a href='{url}'>
         <li class='mdui-list-item mdui-ripple sidebar-reply-list'>
            <div class='sidebar-reply-text'>{name}</div>
          </li>    
        </a>
        </div>
        ", $this->options->linksIndexNum);?>
      </div>
    </ul>
  </div>
  <?php } ?>
  <?php if ($this->is('single') && $this->fields->catalog == "true" && !$this->hidden) {?>
    <div class="sidebar-info mdui-shadow-10" id="toc">
      <ul class="mdui-list">
        <div class="sidebar-reply-title">文章目录</div>
        <li class="mdui-divider"></li>
        <div class="toc"></div>
      </ul>
    </div>
  <?php } ?>
</div>

<style>
    .links-text{margin-top:10px;padding:5px 16px}
</style>
