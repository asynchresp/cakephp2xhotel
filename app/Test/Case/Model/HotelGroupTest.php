<?php
App::uses('HotelGroup', 'Model');

/**
 * HotelGroup Test Case
 *
 */
class HotelGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_group',
		'app.site',
		'app.hotel',
		'app.hotel_groups_hotel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelGroup = ClassRegistry::init('HotelGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelGroup);

		parent::tearDown();
	}

}
