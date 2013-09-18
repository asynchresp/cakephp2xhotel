<?php
App::uses('HotelFacility', 'Model');

/**
 * HotelFacility Test Case
 *
 */
class HotelFacilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_facility',
		'app.site',
		'app.hotel_facility_category',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_room',
		'app.hotel_rooms_hotel_facility',
		'app.hotel',
		'app.hotels_hotel_facility'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelFacility = ClassRegistry::init('HotelFacility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelFacility);

		parent::tearDown();
	}

}
