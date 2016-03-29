<div id="branding" class="clearfix">
  <div class="container"> 
  <!-- header inside-->
    <div class="logo">
      <a href="#">
        <img src="/prodigiquiz/sites/all/themes/ember/images/logo.svg" alt="Prodigi | wpp"/>
      </a>
    </div>
    <div class="header-rightContent">
      <?php if (!in_array('examinee', $user->roles)): ?>
       <div id="tab-bar">
       <div class="subManu">   
          <?php print render($tabs); ?>
        <?php endif;?>
      </div>
    </div>
    </div>
    <!-- /End header inside-->
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

  <div id="content" class="dataTables clearfix">
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

   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <div class="panel-body">
          <form action="">
            <fieldset>
              <div class="form-group">
                <label>Text field</label>
                <input class="form-control" placeholder="Text field" type="text">
              </div>
              <div class="form-group">
                <label>Password field</label>
                <input class="form-control" placeholder="Password" type="password" value="mypassword">
              </div>
              <div class="form-group">
                <label>Textarea</label>
                <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>Readonly</label>
                <span class="form-control">Read only text</span>
              </div>
            </fieldset>
            <div>
              <div class="btn btn-primary">
                <i class="fa fa-save"></i>
                Submit
              </div>
            </div>
          </form>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
<div id="footer"></div>
</div>

<!-- <div id="footer">
  <div class="container">
    <div class="row"> <a href="#" class="gotop"><img src="/prodigiquiz/sites/all/themes/ember/images/wpp_icon.jpg" alt="Prodigi | wpp" title="Prodigi | wpp"> </a> <?php print $feed_icons; ?> </div>
  </div>
</div> -->