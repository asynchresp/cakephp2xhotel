<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelTheme Model
 *
 * @property Hotel $Hotel
 * @property HotelTheme $HotelTheme
 */
class HotelsHotelTheme extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelTheme' => array(
			'className' => 'HotelTheme',
			'foreignKey' => 'hotel_theme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
