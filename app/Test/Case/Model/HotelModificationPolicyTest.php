<?php
App::uses('HotelModificationPolicy', 'Model');

/**
 * HotelModificationPolicy Test Case
 *
 */
class HotelModificationPolicyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_modification_policy',
		'app.site',
		'app.hotel',
		'app.hotels_hotel_modification_policy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelModificationPolicy = ClassRegistry::init('HotelModificationPolicy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelModificationPolicy);

		parent::tearDown();
	}

}
