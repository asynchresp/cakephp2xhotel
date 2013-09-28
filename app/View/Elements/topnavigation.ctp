<li><?php echo $this->Html->link(__("Dashboard",true),"/dashboard") ?></li>
<?php   if ($this->UserAuth->isAdmin()) { ?>
	
	<li><?php echo $this->Html->link(__("Admin",true),"/allUsers") ?></li>
	
<?php   } else {?>
	<li><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></li>
<?php   } ?>
	