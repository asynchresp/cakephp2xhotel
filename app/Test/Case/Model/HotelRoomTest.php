<?php
App::uses('HotelRoom', 'Model');

/**
 * HotelRoom Test Case
 *
 */
class HotelRoomTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_room',
		'app.country',
		'app.area',
		'app.state',
		'app.city',
		'app.hotel',
		'app.point_near_by_hotel',
		'app.popular_point',
		'app.site',
		'app.tax',
		'app.room_type',
		'app.food_menu_type',
		'app.food_package',
		'app.hotel_rooms_food_package',
		'app.hotel_rooms_food_menu_type',
		'app.hotel_facility_category',
		'app.hotel_facility',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_rooms_hotel_facility',
		'app.hotels_hotel_facility',
		'app.hotel_rooms_hotel_facility_category',
		'app.hotels_hotel_facility_category',
		'app.hotel_rooms_tax',
		'app.coupon',
		'app.coupons_hotel_room',
		'app.tour_package',
		'app.tour_packages_hotel_room'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelRoom = ClassRegistry::init('HotelRoom');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelRoom);

		parent::tearDown();
	}

}
