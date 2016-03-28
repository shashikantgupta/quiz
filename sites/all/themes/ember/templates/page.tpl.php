<div id="branding" class="clearfix">
  <div class="headerfixed-top"></div>
  <div class="container"> 
  <!-- header inside-->
    <div class="logo">
      <a href="#">
        <img src="/prodigiquiz/sites/all/themes/ember/images/logo.png" alt="Prodigi | wpp"/>
      </a>
    </div>
    <div class="header-rightContent">
      
    </div>
    <!-- /End header inside-->
  </div>
  <?php if (!in_array('examinee', $user->roles)): ?>
   <div id="tab-bar" class="clearfix">
     <div class="container">   
      <?php print render($tabs); ?>
    <?php endif;?>
  </div>
</div>
</div>

<div id="page"<?php echo theme_get_setting('ember_no_fadein_effect') ? '' : ' class="fade-in"'?>>
<div class="content bg-image overflow-hidden">
       <div class="container">
        <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <div class="page-title"><h1> <?php print $title; ?></h1></div>
        <div class="SubTitle"><h2><?php print 'Welcome '.$user->name;?></h2></div><?php endif;?>
         
   <?php print render($title_suffix); ?>
      </div>
    </div>
  <div class="container">
    <!--Body container here-->
    <div class="statistic-box">
      <div class="col-md4"><span class="number">26</span><span class="captionText">Open tickets</span></div>
      <div class="col-md4"><span class="number">26</span><span class="captionText">Closes tickets</span></div>
      <div class="col-md4"><span class="number">26</span><span class="captionText">Pending tickets</span></div>
      <div class="col-md4"><span class="number"><i class="fa fa-plus-circle"></i></span><span class="captionText">Add Emp</span></div> 
    </div>
    <!--End body container here-->
   <!--breadcrumb here-->
   <?php global $user; ?>
   <?php if (!in_array('exa minee', $user->roles)): ?>
    <?php if (!empty($breadcrumb)): ?>
      <?php print $breadcrumb; ?>
    <?php endif; ?>
  <?php endif;?>
  <!--end breadcrumb here-->
  <!--End here-->
  <?php if ($page['help']): ?>
    <?php print render($page['help']); ?>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div id="console" class="clearfix">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <div id="content" class="clearfix">
    <div class="element-invisible">
      <a id="main-content"></a>
    </div>
    <div class="actions">
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
    </div>
    <?php print render($page['content']); ?>
  </div>

</div>
<div id="footer"></div>
</div>

<!-- <div id="footer">
  <div class="container">
    <div class="row"> <a href="#" class="gotop"><img src="/prodigiquiz/sites/all/themes/ember/images/wpp_icon.jpg" alt="Prodigi | wpp" title="Prodigi | wpp"> </a> <?php print $feed_icons; ?> </div>
  </div>
</div> -->