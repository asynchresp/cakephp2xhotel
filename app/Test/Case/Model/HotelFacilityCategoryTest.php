<?php
App::uses('HotelFacilityCategory', 'Model');

/**
 * HotelFacilityCategory Test Case
 *
 */
class HotelFacilityCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_facility_category',
		'app.site',
		'app.hotel_facility',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_room',
		'app.hotel_rooms_hotel_facility',
		'app.hotel',
		'app.hotels_hotel_facility',
		'app.hotel_rooms_hotel_facility_category',
		'app.hotels_hotel_facility_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelFacilityCategory = ClassRegistry::init('HotelFacilityCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelFacilityCategory);

		parent::tearDown();
	}

}
