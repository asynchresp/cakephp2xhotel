<?php
App::uses('HotelCancellationPolicy', 'Model');

/**
 * HotelCancellationPolicy Test Case
 *
 */
class HotelCancellationPolicyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_cancellation_policy',
		'app.site',
		'app.hotel',
		'app.hotels_hotel_cancellation_policy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelCancellationPolicy = ClassRegistry::init('HotelCancellationPolicy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelCancellationPolicy);

		parent::tearDown();
	}

}
