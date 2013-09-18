<?php
App::uses('CouponsHotelRoom', 'Model');

/**
 * CouponsHotelRoom Test Case
 *
 */
class CouponsHotelRoomTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coupons_hotel_room',
		'app.coupon',
		'app.site',
		'app.hotel',
		'app.room_type',
		'app.hotel_room'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CouponsHotelRoom = ClassRegistry::init('CouponsHotelRoom');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CouponsHotelRoom);

		parent::tearDown();
	}

}
