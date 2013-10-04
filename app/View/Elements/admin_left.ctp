<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
?>
<div class="leftnav">
	<h3><?php // echo __('Actions'); ?></h3>
        <ul>
<?php   if ($this->UserAuth->isAdmin()) { ?>
        <li class="<?php echo (($controller=='users' && $action=='index')?'active':'');?>"><?php echo $this->Html->link(__("All Users",true),"/allUsers") ?></li>
        <li class="<?php echo (($action=='adduser')?'active':'');?>"><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></li>
	<li class="<?php echo (($action=='addgroup')?'active':'');?>"><?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?></li>
	<li class="<?php echo (($controller=='user_groups' && $action=='index')?'active':'');?>"><?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?></li>
	<li class="<?php echo (($controller=='user_group_permissions' && $action=='index')?'active':'');?>"><?php echo $this->Html->link(__("Permissions",true),"/permissions") ?></li>
	<li class="<?php echo (($action=='viewuser')?'active':'');?>"><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?></li>
	<li class="<?php echo (($action=='edituser')?'active':'');?>"><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></li>
<?php   } else {?>
	<li class="<?php echo (($action=='index')?'active':'');?>"><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></li>
<?php   } ?>
	<li class="<?php echo (($action=='changepassword')?'active':'');?>"><?php echo $this->Html->link(__("Change Password",true),"/changePassword") ?></li>
        </ul>
</div>