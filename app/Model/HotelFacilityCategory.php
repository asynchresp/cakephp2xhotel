<?php
App::uses('AppModel', 'Model');
/**
 * HotelFacilityCategory Model
 *
 * @property Site $Site
 * @property HotelFacility $HotelFacility
 * @property HotelRoom $HotelRoom
 * @property Hotel $Hotel
 * @property HotelFacility $HotelFacility
 * @property HotelRoom $HotelRoom
 * @property Hotel $Hotel
 */
class HotelFacilityCategory extends AppModel {

/**
 * Imag Upload
 *
 * @var array
 */    
    public $actsAs = array(
        'Upload.Upload' => array(
            'hfc_image'=> array(
                'deleteOnUpdate'=>true,
                'mode'=>0777,
                'fields' => array(
                    'dir' => 'hfc_image_dir'
                ),
                'pathMethod'=>'primaryKey',
                'path'=>'{ROOT}webroot{DS}img{DS}hfc_image{DS}',
                'thumbnailMethod'=>'php',
                'thumbnailSizes' => array(
                    'big' => '400w',
                    'small' => '120w',
                    'thumb' => '80w'
                )
            )   
        )
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'site_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
		public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hfc_image' => array(
                    'rule' => array('isValidExtension', array('jpg','jpeg','png'),false),
                    'message' => 'Only support jpg,png extension',
                     
         ),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'HotelFacility' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'foreignKey' => 'hotel_facility_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'foreignKey' => 'hotel_facility_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_facility_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'joinTable' => 'hotel_facility_categories_hotel_facilities',
			'foreignKey' => 'hotel_facility_category_id',
			'associationForeignKey' => 'hotel_facility_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'joinTable' => 'hotel_rooms_hotel_facility_categories',
			'foreignKey' => 'hotel_facility_category_id',
			'associationForeignKey' => 'hotel_room_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'joinTable' => 'hotels_hotel_facility_categories',
			'foreignKey' => 'hotel_facility_category_id',
			'associationForeignKey' => 'hotel_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
