<?php   if ($this->UserAuth->isAdmin()) { ?>
        <li><?php echo $this->Html->link(__("All Users",true),"/allUsers") ?></li>
        <li><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></li>
	
	<li><?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?></li>
	<li><?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?></li>
	<li><?php echo $this->Html->link(__("Permissions",true),"/permissions") ?></li>
	<li><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?></li>
	<li><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></li>
<?php   } else {?>
	<li><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></li>
<?php   } ?>
	<li><?php echo $this->Html->link(__("Change Password",true),"/changePassword") ?></li>