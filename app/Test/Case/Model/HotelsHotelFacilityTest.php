<?php
App::uses('HotelsHotelFacility', 'Model');

/**
 * HotelsHotelFacility Test Case
 *
 */
class HotelsHotelFacilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotels_hotel_facility',
		'app.hotel',
		'app.site',
		'app.hotel_group',
		'app.hotel_groups_hotel',
		'app.hotel_type',
		'app.hotels_hotel_tyep',
		'app.hotel_theme',
		'app.hotels_hotel_theme',
		'app.country',
		'app.area',
		'app.state',
		'app.city',
		'app.hotel_room',
		'app.room_type',
		'app.food_menu_type',
		'app.food_package',
		'app.hotel_rooms_food_package',
		'app.hotel_rooms_food_menu_type',
		'app.hotel_facility_category',
		'app.hotel_facility',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_rooms_hotel_facility',
		'app.hotel_rooms_hotel_facility_category',
		'app.hotels_hotel_facility_category',
		'app.tax',
		'app.hotel_rooms_tax',
		'app.coupon',
		'app.coupons_hotel_room',
		'app.tour_package',
		'app.tour_packages_hotel_room',
		'app.point_near_by_hotel',
		'app.popular_point',
		'app.star_rating',
		'app.hotels_star_rating',
		'app.hotel_cancellation_policy',
		'app.hotels_hotel_cancellation_policy',
		'app.hotel_modification_policy',
		'app.hotels_hotel_modification_policy',
		'app.hotel_informative_page',
		'app.hotels_point_near_by_hotel',
		'app.hotels_tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelsHotelFacility = ClassRegistry::init('HotelsHotelFacility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelsHotelFacility);

		parent::tearDown();
	}

}
