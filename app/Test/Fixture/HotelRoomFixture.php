<?php
/**
 * HotelRoomFixture
 *
 */
class HotelRoomFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'room_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'inventory' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'short_description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'long_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'max_adults' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'max_childs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'extra_guest_occupancy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'no_of_beds' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'room_order' => array('type' => 'integer', 'null' => true, 'default' => null),
		'room_image1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room_image2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room_image3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room_image4' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room_image5' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room_video' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'food_menu_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'food_package_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_facility_category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_facility_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'room_price' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'pricing_tax_status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'tax_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'additional_guest' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'child_age_below1' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_age_below1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'child_age_below2' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_age_below2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'child_age_below3' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_age_below3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'child_above_age1' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_above_age1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'child_above_age2' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_above_age2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'child_above_age3' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'price_above_age3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'commision' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'special_price' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'special_price_earning' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'commision_customer' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'commision_customer_earining' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'commision_agent' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'commision_agent_earining' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'meta_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_keyword' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'country_id' => 1,
			'state_id' => 1,
			'city_id' => 1,
			'hotel_id' => 1,
			'room_type_id' => 1,
			'inventory' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'short_description' => 'Lorem ipsum dolor sit amet',
			'long_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'max_adults' => 1,
			'max_childs' => 1,
			'extra_guest_occupancy' => 1,
			'no_of_beds' => 1,
			'room_order' => 1,
			'room_image1' => 'Lorem ipsum dolor sit amet',
			'room_image2' => 'Lorem ipsum dolor sit amet',
			'room_image3' => 'Lorem ipsum dolor sit amet',
			'room_image4' => 'Lorem ipsum dolor sit amet',
			'room_image5' => 'Lorem ipsum dolor sit amet',
			'room_video' => 'Lorem ipsum dolor sit amet',
			'food_menu_type_id' => 1,
			'food_package_id' => 1,
			'hotel_facility_category_id' => 1,
			'hotel_facility_id' => 1,
			'room_price' => 1,
			'pricing_tax_status' => 1,
			'tax_id' => 1,
			'additional_guest' => 1,
			'child_age_below1' => 1,
			'price_age_below1' => 1,
			'child_age_below2' => 1,
			'price_age_below2' => 1,
			'child_age_below3' => 1,
			'price_age_below3' => 1,
			'child_above_age1' => 1,
			'price_above_age1' => 1,
			'child_above_age2' => 1,
			'price_above_age2' => 1,
			'child_above_age3' => 1,
			'price_above_age3' => 1,
			'commision' => 1,
			'special_price' => 1,
			'special_price_earning' => 1,
			'commision_customer' => 1,
			'commision_customer_earining' => 1,
			'commision_agent' => 1,
			'commision_agent_earining' => 1,
			'meta_title' => 'Lorem ipsum dolor sit amet',
			'meta_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'meta_keyword' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'modified' => 1378047690,
			'created' => '2013-09-01 17:01:30'
		),
	);

}
