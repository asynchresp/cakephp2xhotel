<script language="javascript" type="text/javascript">

    function getStatesByAjax(countryId) {
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array('controller' => 'hotels', 'action' => 'getstate'), false); ?>',
            data: 'country_id=' + countryId,
            success: function(data) {
                $('#stateDiv').html(data);
                getCitiesByAjax(0);
            },
            error: function(message) {
                alert(message);
            }
        });
    }

    function getCitiesByAjax(stateId) {

        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array('controller' => 'hotels', 'action' => 'getcity'), false); ?>',
            data: 'state_id=' + stateId,
            success: function(data) {
                $('#cityDiv').html(data);
            },
            error: function(message) {
                alert(message);
            }
        });

    }
    
</script>

<style>
    #getLatLongDiv{
        width: 614px;
        background-color: white;
        border: 1px solid lightgrey;
        margin-left: 194px;
    }    
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div class="hotels form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel'); ?></span></div>
    <div class="content_mid">
        <?php echo $this->Form->create('Hotel', array('type' => 'file')); ?>
        <fieldset>
                <?php /* ?><legend><?php // echo __('Edit Hotel');  ?></legend><?php */ ?>
        <?php
		$data = $this->request->data;
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id', array('selected'=>'6'));
		//echo $this->Form->input('hotel_group_id', array('selected'=>'3'));
        echo $this->Form->input('user_id',array('empty'=>'Select User'));
		echo $this->Form->input('hotel_type_id');
		echo $this->Form->input('star_rating_id');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description', array('class'=>'ckeditor'));
		//echo $this->Form->input('hotel_logo');
		echo $this->Form->input('hotel_logo',array('type'=>'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_logo".DS.h($data['Hotel']['hotel_logo_dir']).DS.h($data['Hotel']['hotel_logo']);
		$fileExistChk = 0;
		if(file_exists($filename)) {
			$fileExistChk = 1;
			echo $this->Html->image('/app/webroot/img/hotel_logo/' . h($data['Hotel']['hotel_logo_dir'] . "/thumb_".h($data['Hotel']['hotel_logo'])), array('alt'=>h($data['Hotel']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['Hotel']['name'])));
		}
		if($fileExistChk == 1) {	
        echo $this->Form->input('hotel.hotel_logo.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}	
		echo $this->Form->input('hotel_image', array('type' => 'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_image".DS.h($data['Hotel']['hotel_image_dir']).DS.h($data['Hotel']['hotel_image']);
		$fileExistChk = 0;
		if(file_exists($filename)) {
			$fileExistChk = 1;
			echo $this->Html->image('/app/webroot/img/hotel_image/' . h($data['Hotel']['hotel_image_dir'] . "/thumb_".h($data['Hotel']['hotel_image'])), array('alt'=>h($data['Hotel']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['Hotel']['name'])));
		}
		if($fileExistChk == 1) {	
        echo $this->Form->input('hotel.hotel_image.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}	
		echo $this->Form->input('hotel_video', array('type' => 'file'));
		//echo $filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_video".DS.h($data['Hotel']['hotel_video_dir']).DS.h($data['Hotel']['hotel_video']);
		$videofile = FULL_BASE_URL.'/hotel/app/webroot/img/hotel_video/' . h($data['Hotel']['hotel_video_dir']) . "/".h($data['Hotel']['hotel_video']);
		
		//echo $this->Html->media($videofile, array('fullBase' => true,'text' => 'Fallback text'));
		//echo $this->Html->media(array($videofile, array('src' => 'video.ogg', 'type' => "video/ogg; codecs='theora, vorbis'")),array('autoplay'));
		echo $this->Form->input('hotel_order');
		echo $this->Form->input('checkindatetime',array('id'=>'checkindatetime','type'=>'text'));
		echo $this->Form->input('checkoutdatetime',array('id'=>'checkoutdatetime','type'=>'text'));		
		//echo $this->Form->input('point_near_by_hotel');
		//echo $this->Form->input('hotel_theme_id');
		
		//echo $this->Form->input('hotel_facility_category_id');
		//echo $this->Form->input('hotel_facility_id');
		echo $this->Form->input('pricing_tax_status');
		echo $this->Form->input('hotel_tax');
		echo $this->Form->input('nearby_location_tag');
		echo $this->Form->input('hotel_cancellation_policy_id');
		echo $this->Form->input('hotel_modification_policy_id');
		echo $this->Form->input('HotelFacility');
		echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('HotelTheme');
		echo $this->Form->input('PointNearByHotel');
		echo $this->Form->input('Tax');
		
		echo $this->Form->input('area');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		 echo $this->Form->input('country_id', array('id' => 'HotelCountryId', 'label' => 'Country', 'class' => '{validate:{required : true, messages:{required:"Please enter Country"}}}', 'onchange' => "getStatesByAjax(this.value);", 'empty' => 'Select Country'));
            echo '<div id="stateDiv">';
            echo $this->Form->input('state_id', array('id' => 'HotelStateId', 'label' => 'State', 'class' => '{validate:{required : true, messages:{required:"Please enter State"}}}', 'onchange' => "getCitiesByAjax(this.value);", 'empty' => 'Select State'));
            echo '</div>';
            echo '<div id="cityDiv">';
            echo $this->Form->input('city_id', array('id' => 'HotelCityId', 'label' => 'City', 'class' => '{validate:{required : true, messages:{required:"Please select City"}}}', 'empty' => 'Select City'));
            echo '</div>';
            echo $this->Form->input('latitude',array('id'=>'lat'));
            echo $this->Form->input('longitude',array('id'=>'lng'));
    
//<!--            <a title="Get Lat Long" onclick="getLatLongBox()" />Find Lat Long</a>-->
            echo '<div id="getLatLongDiv">';
                echo $this->Form->input('gadres',array('id'=>'gadres','label'=>false,'onclick'=>'this.select()','placeholder'=>'Type address with city name, street name to get more accurate lat long.','style'=>'width:89%','after'=>'<a title="Find Lat & Long" onclick="codeAddress();" style="background-color: #ADD8E6;border-radius: 3px;margin-left: 5px;padding: 7px;cursor:pointer" />Get</a>'));
                echo '<div id="latlongmap" style="width:600px; height:320px;"></div>';
        echo '</div>';		
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('main_keyword_tag');
		
		
		//echo $this->Form->input('HotelGroup');
		//echo $this->Form->input('HotelCancellationPolicy');
		//echo $this->Form->input('HotelModificationPolicy');
		//echo $this->Form->input('StarRating');
		echo $this->Form->label('hotel.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
            ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>
<?php echo $this->element('left_nav'); ?>

<script>
  $(function() {
    $( "#checkindatetime" ).datetimepicker({
        dateFormat:'d M, y',
        addSliderAccess: true,
	sliderAccessArgs: { touchonly: false }
    });
    
    $( "#checkoutdatetime" ).datetimepicker({
        dateFormat:'d M, y',
        addSliderAccess: true,
	sliderAccessArgs: { touchonly: false }
    });
  });
</script>

    
    

<script type="text/javascript">

    var map;
    var geocoder;
    var marker;

    function initialize() {
        var latlng = new google.maps.LatLng(1.10, 1.10);
        var myOptions = {
            zoom: 5,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("latlongmap"),
                myOptions);
        geocoder = new google.maps.Geocoder();
        marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        map.streetViewControl = false;

        google.maps.event.addListener(map, 'click', function(event) {
            marker.setPosition(event.latLng);

            var yeri = event.latLng;
            document.getElementById('lat').value = yeri.lat().toFixed(6);
            document.getElementById('lng').value = yeri.lng().toFixed(6);
//            document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
//                    + yeri.lat().toFixed(6) + '&long='
//                    + yeri.lng().toFixed(6);
        });


//        google.maps.event.addListener(map, 'mousemove', function(event) {
//            var yeri = event.latLng;
//            document.getElementById("mlat").value = yeri.lat().toFixed(6);
//            document.getElementById("mlong").value = yeri.lng().toFixed(6);
//        });

    }

    function codeAddress() {
        var address = document.getElementById("gadres").value;
        geocoder.geocode({'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                document.getElementById('lat').value = results[0].geometry.location.lat().toFixed(6);
                document.getElementById('lng').value = results[0].geometry.location.lng().toFixed(6);
                var latlong = "(" + results[0].geometry.location.lat().toFixed(6) + " , " +
                        +results[0].geometry.location.lng().toFixed(6) + ")";
//                document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
//                        + results[0].geometry.location.lat().toFixed(6) + '&long='
//                        + results[0].geometry.location.lng().toFixed(6);


                var infowindow = new google.maps.InfoWindow({
                    content: latlong
                });

                marker.setPosition(results[0].geometry.location);
                map.setZoom(16);

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });

            } else {
                alert("Lat and long cannot be found.");
            }
        });
    }

    initialize();

</script>

