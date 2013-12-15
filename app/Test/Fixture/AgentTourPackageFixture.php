<?php
/**
 * AgentTourPackageFixture
 *
 */
class AgentTourPackageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'site_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'short_description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'long_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tp_order' => array('type' => 'integer', 'null' => false, 'default' => null),
		'no_person' => array('type' => 'integer', 'null' => false, 'default' => null),
		'activity_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'st_pt_state' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'st_pt_city' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'st_pt_area' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'end_pt_state' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'end_pt_area' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'popular_point_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'st_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'price_per_person' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'pricing_tax_status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'tax_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'child_age_below1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_age_below1' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'child_age_below2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_age_below2' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'child_age_below3' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_age_below3' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'child_above_age1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_above_age1' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'child_above_age2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_above_age2' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'child_above_age3' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'price_above_age3' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'commision' => array('type' => 'integer', 'null' => false, 'default' => null),
		'special_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'special_price_earning' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'commision_customer' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'commision_customer_earining' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'commision_agent' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'commision_agent_earining' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'keyword' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meta_keyword' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
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
			'name' => 'Lorem ipsum dolor sit amet',
			'short_description' => 'Lorem ipsum dolor sit amet',
			'long_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tp_order' => 1,
			'no_person' => 1,
			'activity_type_id' => 1,
			'st_pt_state' => 'Lorem ipsum dolor sit amet',
			'st_pt_city' => 'Lorem ipsum dolor sit amet',
			'st_pt_area' => 'Lorem ipsum dolor sit amet',
			'end_pt_state' => 'Lorem ipsum dolor sit amet',
			'end_pt_area' => 'Lorem ipsum dolor sit amet',
			'popular_point_id' => 1,
			'st_date' => '2013-12-15 15:59:07',
			'end_date' => '2013-12-15 15:59:07',
			'price_per_person' => 1,
			'pricing_tax_status' => 1,
			'tax_id' => 1,
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
			'keyword' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'meta_title' => 'Lorem ipsum dolor sit amet',
			'meta_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'meta_keyword' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'modified' => 1387123147,
			'created' => '2013-12-15 15:59:07'
		),
	);

}
