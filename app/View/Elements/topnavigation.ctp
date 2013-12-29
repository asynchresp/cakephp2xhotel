<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
$groupName=strtolower($this->UserAuth->getGroupName());
?>
<li><?php echo $this->Html->link(__("Dashboard",true),"/dashboard") ?></li>
<?php   if ($this->UserAuth->isAdmin()) { ?>
	
	<li><?php echo $this->Html->link(__("Admin",true),"/allUsers",array('class'=>(($controller=='users' || $controller=='user_groups' || $controller=='user_group_permissions')?'selected':''))) ?></li>
	
<?php   } else {?>
	<li><?php echo $this->Html->link(__("Profile",true),"/myprofile",array('class'=>(($controller=='users')?'selected':''))) ?></li>
<?php   } 


    if($groupName=='hotel_owner'){
?>
    <li><?php echo $this->Html->link(__("Sites",true),'/admin/hotels',array('class'=>(($controller!='users' && $controller!='user_groups' && $controller!='user_group_permissions')?'selected':''))) ?></li>
    <?php
    }
    else{ ?>
    <li><?php echo $this->Html->link(__("Sites",true),'/admin/sites',array('class'=>(($controller!='users' && $controller!='user_groups' && $controller!='user_group_permissions')?'selected':''))) ?></li>
    <?php } ?>
