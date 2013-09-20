<?php
App::uses('Coupon', 'Model');

/**
 * Coupon Test Case
 *
 */
class CouponTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coupon',
		'app.site',
		'app.hotel',
		'app.room_type',
		'app.hotel_room',
		'app.coupons_hotel_room'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coupon = ClassRegistry::init('Coupon');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coupon);

		parent::tearDown();
	}

}
