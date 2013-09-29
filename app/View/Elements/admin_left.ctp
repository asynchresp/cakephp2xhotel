<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
?>
<div class="leftnav">
	<h3><?php // echo __('Actions'); ?></h3>
        <ul>
<?php   if ($this->UserAuth->isAdmin()) { ?>
        <li><?php echo $this->Html->link(__("All Users",true),"/allUsers",array('class'=>(($controller=='users' && $action=='index')?'current':''))) ?></li>
        <li><?php echo $this->Html->link(__("Add User",true),"/addUser",array('class'=>(($action=='adduser')?'current':''))) ?></li>
	
	<li><?php echo $this->Html->link(__("Add Group",true),"/addGroup",array('class'=>(($action=='addgroup')?'current':''))) ?></li>
	<li><?php echo $this->Html->link(__("All Groups",true),"/allGroups",array('class'=>(($controller=='user_groups' && $action=='index')?'current':''))) ?></li>
	<li><?php echo $this->Html->link(__("Permissions",true),"/permissions",array('class'=>(($controller=='user_group_permissions' && $action=='index')?'current':''))) ?></li>
	<li><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId(),array('class'=>(($action=='viewuser')?'current':''))) ?></li>
	<li><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId(),array('class'=>(($action=='edituser')?'current':''))) ?></li>
<?php   } else {?>
	<li><?php echo $this->Html->link(__("Profile",true),"/myprofile",array('class'=>(($action=='index')?'current':''))) ?></li>
<?php   } ?>
	<li><?php echo $this->Html->link(__("Change Password",true),"/changePassword",array('class'=>(($action=='changepassword')?'current':''))) ?></li>
        </ul>
</div>