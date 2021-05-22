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
 * @version 1.0.5
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
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

</div>

<style>
    .links-text{margin-top:10px;padding:5px 16px}
</style>
