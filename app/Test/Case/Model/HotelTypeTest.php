<?php
App::uses('HotelType', 'Model');

/**
 * HotelType Test Case
 *
 */
class HotelTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_type',
		'app.site',
		'app.hotel',
		'app.hotels_hotel_tyep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelType = ClassRegistry::init('HotelType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelType);

		parent::tearDown();
	}

}
