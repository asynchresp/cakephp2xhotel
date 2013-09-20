<?php
/**
 * FoodPackageFixture
 *
 */
class FoodPackageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'food_menu_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
		'upload_menu' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'food_menu_type_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
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
			'upload_menu' => 'Lorem ipsum dolor sit amet',
			'meta_title' => 'Lorem ipsum dolor sit amet',
			'meta_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'meta_keyword' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'modified' => 1378047583,
			'created' => '2013-09-01 16:59:43'
		),
	);

}
