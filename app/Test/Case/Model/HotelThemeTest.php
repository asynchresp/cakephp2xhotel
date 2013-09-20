<?php
App::uses('HotelTheme', 'Model');

/**
 * HotelTheme Test Case
 *
 */
class HotelThemeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_theme',
		'app.site',
		'app.hotel',
		'app.hotels_hotel_theme'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelTheme = ClassRegistry::init('HotelTheme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelTheme);

		parent::tearDown();
	}

}
