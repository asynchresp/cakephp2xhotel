<?php
App::uses('Site', 'Model');

/**
 * Site Test Case
 *
 */
class SiteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site',
		'app.country',
		'app.area',
		'app.state',
		'app.city',
		'app.hotel_room',
		'app.hotel',
		'app.hotel_group',
		'app.hotel_groups_hotel',
		'app.hotel_type',
		'app.hotels_hotel_tyep',
		'app.hotel_theme',
		'app.hotels_hotel_theme',
		'app.star_rating',
		'app.hotels_star_rating',
		'app.hotel_facility_category',
		'app.hotel_facility',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_rooms_hotel_facility',
		'app.hotels_hotel_facility',
		'app.hotel_rooms_hotel_facility_category',
		'app.hotels_hotel_facility_category',
		'app.hotel_cancellation_policy',
		'app.hotels_hotel_cancellation_policy',
		'app.hotel_modification_policy',
		'app.hotels_hotel_modification_policy',
		'app.coupon',
		'app.room_type',
		'app.tour_package',
		'app.coupons_hotel_room',
		'app.hotel_informative_page',
		'app.point_near_by_hotel',
		'app.hotels_point_near_by_hotel',
		'app.tax',
		'app.hotels_tax',
		'app.food_menu_type',
		'app.food_package',
		'app.hotel_rooms_food_package',
		'app.hotel_rooms_food_menu_type',
		'app.hotel_rooms_tax',
		'app.tour_packages_hotel_room',
		'app.popular_point',
		'app.activity_type',
		'app.tour_packages_activity_type',
		'app.tour_packages_popular_point'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Site = ClassRegistry::init('Site');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Site);

		parent::tearDown();
	}

}
