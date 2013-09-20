<?php
App::uses('FoodMenuType', 'Model');

/**
 * FoodMenuType Test Case
 *
 */
class FoodMenuTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.food_menu_type',
		'app.site',
		'app.food_package',
		'app.hotel_room',
		'app.hotel_rooms_food_menu_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FoodMenuType = ClassRegistry::init('FoodMenuType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FoodMenuType);

		parent::tearDown();
	}

}
