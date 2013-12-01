<?php 

$groupName=strtolower($this->UserAuth->getGroupName());

$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);

$actionForHref=str_replace(array('admin_','index'), '', $action);
if(trim($actionForHref)=='')
    $matchHref='/'.$controller;
else 
    $matchHref='/'.$controller.'/'.$actionForHref;


$hotelManagementControllerArr=array('hotels','hotel_groups','hotel_themes','hotel_types','hotel_facilities','hotel_facility_categories','food_menu_types');
$generalControllerArr=array('sites','countries','states','cities');
$promoControllerArr=array('tour_packages','coupons');
$cmsControllerArr=array('activity_types','hotel_cancellation_policies','hotel_informative_pages','hotel_modification_policies','point_near_by_hotels','popular_points','taxes');


?>

<div class="leftnav">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
            
            <?php if($groupName!='hotel_owner'){ ?>    
            
            <li class='<?php echo ((in_array($controller,$generalControllerArr))?'has-sub active':'has-sub');?>'><?php echo $this->Html->link(__('General'),'#'); ?> 
                    <ul>
                        <li><?php echo $this->Html->link(__('All Site'), array('controller' => 'sites','action' => 'index')); ?>
                        <li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites','action' => 'add')); ?>
                        <li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add'),array('class'=>'current')); ?> </li>
                        <li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
            <?php }?>
            
                <li class='<?php echo ((in_array($controller,$hotelManagementControllerArr))?'has-sub active':'has-sub');?>'><?php echo $this->Html->link(__('Hotel Management'),'#'); ?> 
                    <ul>
                        <li><?php echo $this->Html->link(__('Hotel Groups'), array('controller' => 'hotel_groups', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('All Hotel'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
                              
                        <li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Hotel Types'), array('controller' => 'hotel_types', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
                       
                    </ul>
                </li>
                
                 <li class='<?php echo ((in_array($controller,$promoControllerArr))?'has-sub active':'has-sub');?>'><?php echo $this->Html->link(__('Promo and Discount'),'#'); ?> 
                    <ul>
                        <li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
                
                <li class='<?php echo ((in_array($controller,$cmsControllerArr))?'has-sub active':'has-sub');?>'><?php echo $this->Html->link(__('Content Management'),'#'); ?> 
                    <ul>
                        <li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>


                        <li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('controller' => 'hotel_cancellation_policies', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>



                        <li><?php echo $this->Html->link(__('List Hotel Informative Pages'), array('controller' => 'hotel_informative_pages', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('controller' => 'hotel_informative_pages', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Hotel Modification Policies'), array('controller' => 'hotel_modification_policies', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Hotel Modification Policy'), array('controller' => 'hotel_modification_policies', 'action' => 'add')); ?> </li>



                        <li><?php echo $this->Html->link(__('List Point Near By Hotels'), array('controller' => 'point_near_by_hotels', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Point Near By Hotel'), array('controller' => 'point_near_by_hotels', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>

                    </ul>
                </li>
                
                
		
	</ul>
</div>

<script>
    $( document ).ready(function() {
    $('.leftnav ul ul li:odd').addClass('odd');
    $('.leftnav ul ul li:even').addClass('even');
    $('.leftnav > ul > li > a').click(function() {
      $('.leftnav li').removeClass('active');
      $(this).closest('li').addClass('active');	
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        $(this).closest('li').removeClass('active');
        checkElement.slideUp('normal');
      }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('.leftnav ul ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
      }
      if($(this).closest('li').find('ul').children().length == 0) {
        return true;
      } else {
        return false;	
      }		
    });
    
    
    var checkOnSelection = $('.leftnav > ul > li.active a').next();
    if(checkOnSelection.is('ul')) {
        checkOnSelection.slideDown('normal');
            
        checkOnSelection.find('li a').each(function(){
            var current=$(this);
//            console.log(current.attr('href'))
            newHref=current.attr('href').split('admin');
//            console.log(newHref[1]);
            if(newHref[1]=='<?php echo $matchHref;?>')
                current.addClass('selectedChild');
            
        });
        
    }
 
    });
</script>