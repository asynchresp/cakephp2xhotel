<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
?>
<li><?php echo $this->Html->link(__("Dashboard",true),"/dashboard") ?></li>
<?php   if ($this->UserAuth->isAdmin()) { ?>
	
	<li><?php echo $this->Html->link(__("Admin",true),"/allUsers",array('class'=>(($controller=='users' || $controller=='user_groups' || $controller=='user_group_permissions')?'selected':''))) ?></li>
	
<?php   } else {?>
	<li><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></li>
<?php   } ?>
	<li><?php echo $this->Html->link(__("Sites",true),'/admin/sites',array('class'=>(($controller!='users' && $controller!='user_groups' && $controller!='user_group_permissions')?'selected':''))) ?></li>