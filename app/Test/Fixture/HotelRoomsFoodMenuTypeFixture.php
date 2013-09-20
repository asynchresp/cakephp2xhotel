<?php
/**
 * HotelRoomsFoodMenuTypeFixture
 *
 */
class HotelRoomsFoodMenuTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hotel_room_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'food_menu_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'hotel_room_id' => 1,
			'food_menu_type_id' => 1
		),
	);

}
