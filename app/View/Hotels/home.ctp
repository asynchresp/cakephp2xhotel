<style>
    .banner{
        
    }
    .search{
        background: #f2f5f6; /* Old browsers */
        background: -moz-linear-gradient(top,  #f2f5f6 0%, #e3eaed 37%, #c8d7dc 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f5f6), color-stop(37%,#e3eaed), color-stop(100%,#c8d7dc)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #f2f5f6 0%,#e3eaed 37%,#c8d7dc 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #f2f5f6 0%,#e3eaed 37%,#c8d7dc 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #f2f5f6 0%,#e3eaed 37%,#c8d7dc 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #f2f5f6 0%,#e3eaed 37%,#c8d7dc 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c8d7dc',GradientType=0 ); /* IE6-9 */
        border-radius: 5px;
        height: 100px;
        margin: -52px auto 0 169px;
        position: absolute;
        width: 70%;
        
    }
    
    .pan{
        border-top: 2px solid #003d4c;
        height: 200px;
    }
    
    
    .pan span{
        background-color: #05B2D2;
        color: white;
        border: 1px solid #003d4c;
    }
</style>

<div class="banner">
    <?php
    echo $this->Html->image('/app/webroot/banner/hotel.jpg',array('width'=>'100%','height'=>'200'));
    ?>
</div>

<div class="search">
    Search pannel
</div>
<br><br><br>
<div class="pan">
    <span>Most Popular Properties</span>
    
</div>

<div class="pan">
    <span>Tour Package Type</span>
    
</div>
<div class="pan">
    <span>Top Destinations Around The India</span>
    
</div>

