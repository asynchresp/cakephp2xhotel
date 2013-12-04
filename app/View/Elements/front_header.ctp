<?php 
$controller=  strtolower($this->request->params['controller']);
$action=  strtolower($this->request->params['action']);
?>

<div class="logos">
    
</div>
<div class="navigations">
    <ul>
            <li><?php echo $this->Html->link(__('Home'), FULL_BASE_URL.'/bnbhotel/index'); ?></li>
            <li><?php echo $this->Html->link(__('Hotels'), FULL_BASE_URL.'/bnbhotel/admin/hotelgroups'); ?></li>
            <li><?php echo $this->Html->link(__('Extra'), FULL_BASE_URL.'/bnbhotel/admin/countries'); ?></li>

    </ul>
</div>
