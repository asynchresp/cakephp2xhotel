<?php
App::uses('ActivityType', 'Model');

/**
 * ActivityType Test Case
 *
 */
class ActivityTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activity_type',
		'app.site',
		'app.popular_point',
		'app.tour_package',
		'app.tour_packages_activity_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActivityType = ClassRegistry::init('ActivityType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivityType);

		parent::tearDown();
	}

}
