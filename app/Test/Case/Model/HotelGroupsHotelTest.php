<?php
App::uses('HotelGroupsHotel', 'Model');

/**
 * HotelGroupsHotel Test Case
 *
 */
class HotelGroupsHotelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_groups_hotel',
		'app.hotel_group',
		'app.site',
		'app.hotel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelGroupsHotel = ClassRegistry::init('HotelGroupsHotel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelGroupsHotel);

		parent::tearDown();
	}

}
