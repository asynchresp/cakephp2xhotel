<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
?>


<div id='cssmenu'>
<ul>
   <li><a href='index.html'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li><a href='#'><span>Widgets</span></a></li>
         <li><a href='#'><span>Menus</span></a></li>
         <li class='last'><a href='#'><span>Products</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Company</span></a>
      <ul>
         <li><a href='#'><span>About</span></a></li>
         <li class='last'><a href='#'><span>Location</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>


<div class="leftnav">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
            
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add'),array('class'=>'current')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('controller' => 'hotel_cancellation_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Groups'), array('controller' => 'hotel_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Informative Pages'), array('controller' => 'hotel_informative_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('controller' => 'hotel_informative_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Modification Policies'), array('controller' => 'hotel_modification_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Modification Policy'), array('controller' => 'hotel_modification_policies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Types'), array('controller' => 'hotel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Point Near By Hotels'), array('controller' => 'point_near_by_hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point Near By Hotel'), array('controller' => 'point_near_by_hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script>
    $( document ).ready(function() {
    $('#cssmenu ul ul li:odd').addClass('odd');
    $('#cssmenu ul ul li:even').addClass('even');
    $('#cssmenu > ul > li > a').click(function() {
      $('#cssmenu li').removeClass('active');
      $(this).closest('li').addClass('active');	
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        $(this).closest('li').removeClass('active');
        checkElement.slideUp('normal');
      }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#cssmenu ul ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
      }
      if($(this).closest('li').find('ul').children().length == 0) {
        return true;
      } else {
        return false;	
      }		
    });
    });
</script>