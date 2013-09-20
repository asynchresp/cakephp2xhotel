<?php
App::uses('FoodPackage', 'Model');

/**
 * FoodPackage Test Case
 *
 */
class FoodPackageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.food_package',
		'app.food_menu_type',
		'app.site',
		'app.hotel_room',
		'app.hotel_rooms_food_menu_type',
		'app.hotel_rooms_food_package'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FoodPackage = ClassRegistry::init('FoodPackage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FoodPackage);

		parent::tearDown();
	}

}
