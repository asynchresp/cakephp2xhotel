<?php
/**
 * HotelFixture
 *
 */
class HotelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'site_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'short_description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'long_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hotel_logo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hotel_order' => array('type' => 'integer', 'null' => true, 'default' => null),
		'point_near_by_hotel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_theme_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'area' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address_line1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address_line2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'latitude' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'longitude' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'star_rating_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'checkindatetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'checkoutdatetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'hotel_facility_category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_facility_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'hotel_image' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hotel_video' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pricing_tax_status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'hotel_tax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'meta_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_keyword' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'main_keyword_tag' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nearby_location_tag' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hotel_cancellation_policy_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_modification_policy_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'site_id' => 1,
			'hotel_group_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'short_description' => 'Lorem ipsum dolor sit amet',
			'long_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hotel_logo' => 'Lorem ipsum dolor sit amet',
			'hotel_order' => 1,
			'point_near_by_hotel' => 1,
			'hotel_type_id' => 1,
			'hotel_theme_id' => 1,
			'area' => 'Lorem ipsum dolor sit amet',
			'address_line1' => 'Lorem ipsum dolor sit amet',
			'address_line2' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'state_id' => 1,
			'city_id' => 1,
			'latitude' => 'Lorem ipsum dolor sit amet',
			'longitude' => 'Lorem ipsum dolor sit amet',
			'star_rating_id' => 1,
			'checkindatetime' => '2013-09-01 17:03:33',
			'checkoutdatetime' => '2013-09-01 17:03:33',
			'hotel_facility_category_id' => 1,
			'hotel_facility_id' => 1,
			'hotel_image' => 'Lorem ipsum dolor sit amet',
			'hotel_video' => 'Lorem ipsum dolor sit amet',
			'pricing_tax_status' => 1,
			'hotel_tax' => 1,
			'meta_title' => 'Lorem ipsum dolor sit amet',
			'meta_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'meta_keyword' => 'Lorem ipsum dolor sit amet',
			'main_keyword_tag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'nearby_location_tag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hotel_cancellation_policy_id' => 1,
			'hotel_modification_policy_id' => 1,
			'status' => 1,
			'modified' => 1378047813,
			'created' => '2013-09-01 17:03:33'
		),
	);

}
