<?php
App::uses('HotelInformativePage', 'Model');

/**
 * HotelInformativePage Test Case
 *
 */
class HotelInformativePageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel_informative_page',
		'app.site',
		'app.hotel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HotelInformativePage = ClassRegistry::init('HotelInformativePage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HotelInformativePage);

		parent::tearDown();
	}

}
