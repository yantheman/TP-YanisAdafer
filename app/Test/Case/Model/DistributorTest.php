<?php
App::uses('Distributor', 'Model');

/**
 * Distributor Test Case
 *
 */
class DistributorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.distributor',
		'app.product',
		'app.distributors_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Distributor = ClassRegistry::init('Distributor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Distributor);

		parent::tearDown();
	}

}
