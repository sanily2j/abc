<?php
?>
<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Admin :: ABC</title>
	<link href="/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	
	
        <!--[if IE 6]>
        <link rel="stylesheet" href="/css/admin_menu/ie/ie6.css" type="text/css" media="screen" />
        <![endif]-->
	<!-- Admin Menu: End -->
	
        <?php echo $this->Html->css(array('ui/jquery-ui', 'admin_menu/reset','admin_menu/menu',
                                    'admin/demo',
                                    'alaxos/alaxos',
                                    'ajaxLoader',
                                    'validation','selectize/selectize.default')); ?>
        <script type="text/javascript">
	//<![CDATA[
	var date_format = "d-m-y";
	//]]>
	</script>
		<script type="text/javascript">
	//<![CDATA[
	var application_root = "/abc";
	//]]>
	</script>
	<script type="text/javascript">
	//<![CDATA[
	var confirmDeleteAllText =            "Are you sure you want to delete all those items ?";
	var pleaseChooseActionToPerformText = "Please choose the action to perform";

	//]]>
	</script>
		<?php
  echo $this->Html->script(array('vendor/jquery-1.9.1.min','vendor/ui/jquery-ui',
      'ckeditor/ckeditor','selectize','alaxos/alaxos/alaxos',
      'jquery.validate.min','additional-methods','jquery.history','abc'));      
?>
</head>
<body>
	<div id="container">
		<noscript><p class="error" style="text-align:center">Javascript must be turned on to navigate correctly on this site</p></noscript>
		<div id="header">
			<h1><a href="<?php echo $this->base;?>/admin">Audit Bureau of Circulation</a></h1>
		</div> 
                <div id="admin_menu">
                    <?php echo $this->element($this->Session->read('Auth.Role.name') . '_menu_links'); ?>
                </div>
		<div id="content">			
			
			
			<div style="clear:both;">&nbsp;</div>
			
			<?php
			if($this->Session->check('Message.auth'))
			{
			    echo $this->element('flash_error', array('plugin' => 'alaxos', 'message' => $this->Session->flash('auth')));
			}
			?>
			
			<?php echo $this->Session->flash(); ?>
                        <div id="tabs">
                            <ul>
                                <li><a class="tabslink" href="#tabs-1">&nbsp;</a></li>
                              <li><a class="tabslink" href="#tabs-2">&nbsp;</a></li>
                              <li><a class="tabslink" href="#tabs-3">&nbsp;</a></li>
                              <li><a class="tabslink" href="#tabs-4">&nbsp;</a></li>
                              <li><a class="tabslink" href="#tabs-5">&nbsp;</a></li>
                            </ul>
                            <div id="tabs-1" class="cont-box sub_div0">
                                <?php echo $content_for_layout; ?>
                            </div>
                            <div id="tabs-2" class="cont-box sub_div1">
                            </div>
                            <div id="tabs-3" class="cont-box sub_div2">
                            </div>
                            <div id="tabs-4" class="cont-box sub_div3">
                            </div>
                            <div id="tabs-5" class="cont-box sub_div4">
                            </div>
                        </div>
			<?php
//			if(($this->params['controller'] == 'users' || $this->params['controller'] == 'roles')
//			    &&
//			    !in_array($this->params['action'], array('login', 'add', 'admin_add', 'copy', 'admin_copy')))
//			{
//			    echo $this->element('default_user_not_deletable');
//			}
			?>
			
		</div>		
					
						
			
                <?php echo $this->element('ajax_divs'); ?>
		<div id="footer">&nbsp;</div>
	</div>
	    </body>
</html>
<?php echo $this->element('sql_dump'); ?>