<?php /* The header */  ?>
<div id="page">
  <div id="header" class="section">
    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
        <?php endif; ?>
  
        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  
    <?php print render($page['header']); ?>


  </div>
  <?php if ($main_menu || $secondary_menu): ?>
  <div id="navigation" class="section">
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
  </div>
  <?php endif; ?>

  <div id="main" class="section">

    <div class="content-middle">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
      
      <?php print $messages; ?>
      
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
      
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>
    <?php endif; ?>
      
    </div>
  </div>

  <div id="footer" class="section">
    <div class="copyright">web design by <a href="http://www.thecodesharman.com.au">The Code Sharman</a> </div>
    <div><a id="login" href="/user">Login</a></div>
    <div><a id="logout" href="/user/logout" style="display: none">Logout</a></div>
    <?php print render($page['footer']); ?>
  </div>
</div>
