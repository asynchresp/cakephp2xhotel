<?php
App::uses('AgentTourPackage', 'Model');

/**
 * AgentTourPackage Test Case
 *
 */
class AgentTourPackageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agent_tour_package',
		'app.site',
		'app.country',
		'app.area',
		'app.state',
		'app.city',
		'app.hotel_room',
		'app.hotel',
		'app.user',
		'app.hotel_type',
		'app.hotels_hotel_tyep',
		'app.star_rating',
		'app.hotels_star_rating',
		'app.hotel_cancellation_policy',
		'app.hotels_hotel_cancellation_policy',
		'app.hotel_modification_policy',
		'app.hotels_hotel_modification_policy',
		'app.coupon',
		'app.room_type',
		'app.tour_package',
		'app.tour_packages_hotel_room',
		'app.activity_type',
		'app.popular_point',
		'app.tour_packages_popular_point',
		'app.tour_packages_activity_type',
		'app.tax',
		'app.hotel_rooms_tax',
		'app.tour_packages_tax',
		'app.hotels_tax',
		'app.coupons_hotel_room',
		'app.hotel_informative_page',
		'app.hotel_facility',
		'app.hotel_facility_category',
		'app.hotel_facility_categories_hotel_facility',
		'app.hotel_rooms_hotel_facility_category',
		'app.hotels_hotel_facility_category',
		'app.hotel_rooms_hotel_facility',
		'app.hotels_hotel_facility',
		'app.hotel_theme',
		'app.hotels_hotel_theme',
		'app.point_near_by_hotel',
		'app.hotels_point_near_by_hotel',
		'app.food_menu_type',
		'app.food_package',
		'app.hotel_rooms_food_package',
		'app.hotel_rooms_food_menu_type',
		'app.hotel_group',
		'app.agent_tour_packages_site',
		'app.agent_tour_packages_activity_type',
		'app.agent_tour_packages_popular_point',
		'app.agent_tour_packages_tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AgentTourPackage = ClassRegistry::init('AgentTourPackage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AgentTourPackage);

		parent::tearDown();
	}

}
