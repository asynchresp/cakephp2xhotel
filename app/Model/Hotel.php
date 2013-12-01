<?php
App::uses('AppModel', 'Model');
/**
 * Hotel Model
 *
 * @property Site $Site
 * @property HotelGroup $HotelGroup
 * @property HotelType $HotelType
 * @property HotelTheme $HotelTheme
 * @property Country $Country
 * @property State $State
 * @property City $City
 * @property StarRating $StarRating
 * @property HotelFacilityCategory $HotelFacilityCategory
 * @property HotelFacility $HotelFacility
 * @property HotelCancellationPolicy $HotelCancellationPolicy
 * @property HotelModificationPolicy $HotelModificationPolicy
 * @property Coupon $Coupon
 * @property HotelInformativePage $HotelInformativePage
 * @property HotelRoom $HotelRoom
 * @property TourPackage $TourPackage
 * @property HotelGroup $HotelGroup
 * @property HotelCancellationPolicy $HotelCancellationPolicy
 * @property HotelFacility $HotelFacility
 * @property HotelFacilityCategory $HotelFacilityCategory
 * @property HotelModificationPolicy $HotelModificationPolicy
 * @property HotelTheme $HotelTheme
 * @property PointNearByHotel $PointNearByHotel
 * @property StarRating $StarRating
 * @property Tax $Tax
 */
class Hotel extends AppModel {


/**
 * Imag Upload
 *
 * @var array
 */    
    public $actsAs = array(
       /* 'Upload.Upload' => array(
            'hotel_logo'=> array(
                'deleteOnUpdate'=>true,
                'mode'=>0777,
                'fields' => array(
                    'dir' => 'hotel_logo_dir'
                ),
                'pathMethod'=>'primaryKey',
                'path'=>'{ROOT}webroot{DS}img{DS}hotel_logo{DS}',
                'thumbnailMethod'=>'php',
                'thumbnailSizes' => array(
                    'big' => '400w',
                    'small' => '120w',
                    'thumb' => '80w'
                )
            ), 
			
			'hotel_image'=> array(
				'deleteOnUpdate'=>true,
				'mode'=>0777,
				'fields' => array(
					'dir' => 'hotel_image_dir'
				),
				'pathMethod'=>'primaryKey',
				'path'=>'{ROOT}webroot{DS}img{DS}hotel_image{DS}',
				'thumbnailMethod'=>'php',
				'thumbnailSizes' => array(
					'big' => '400w',
					'small' => '120w',
					'thumb' => '80w'
				)
			), 
			
			'hotel_video'=> array(
				'deleteOnUpdate'=>true,
				'mode'=>0777,
				'fields' => array(
					'dir' => 'hotel_video_dir'
				),
				'pathMethod'=>'primaryKey',
				'path'=>'{ROOT}webroot{DS}img{DS}hotel_video{DS}',
				'thumbnailMethod'=>'php',
				'thumbnailSizes' => array(
					'big' => '400w',
					'small' => '120w',
					'thumb' => '80w'
				)
			)			
			 
        )*/
    );
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hotel_facility_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'hotel_group_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),	*/			
		
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
		'short_description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'long_description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'hotel_logo' => array(
                    'rule' => array('isValidExtension', array('jpg','jpeg','png'),false),
                    'message' => 'Only support jpg,png extension',
                     
         ),	*/	
		'point_near_by_hotel' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => false,
				'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hotel_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hotel_theme_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		
		'area' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_line1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'country_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'state_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'city_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'latitude' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'longitude' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'star_rating_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'checkindatetime' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'checkoutdatetime' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'hotel_image' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'hotel_image' => array(
                    'rule' => array('isValidExtension', array('jpg','jpeg','png'),false),
                    'message' => 'Only support jpg,png extension',
                     
         ),*/
		 
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
//		'Site' => array(
//			'className' => 'Site',
//			'foreignKey' => 'site_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
//		'HotelGroup' => array(
//			'className' => 'HotelGroup',
//			'foreignKey' => 'hotel_group_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
         'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelType' => array(
			'className' => 'HotelType',
			'foreignKey' => 'hotel_type_id',
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
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StarRating' => array(
			'className' => 'StarRating',
			'foreignKey' => 'star_rating_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelFacilityCategory' => array(
			'className' => 'HotelFacilityCategory',
			'foreignKey' => 'hotel_facility_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'foreignKey' => 'hotel_facility_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelCancellationPolicy' => array(
			'className' => 'HotelCancellationPolicy',
			'foreignKey' => 'hotel_cancellation_policy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelModificationPolicy' => array(
			'className' => 'HotelModificationPolicy',
			'foreignKey' => 'hotel_modification_policy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Coupon' => array(
			'className' => 'Coupon',
			'foreignKey' => 'hotel_id',
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
		'HotelInformativePage' => array(
			'className' => 'HotelInformativePage',
			'foreignKey' => 'hotel_id',
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
			'foreignKey' => 'hotel_id',
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
		'TourPackage' => array(
			'className' => 'TourPackage',
			'foreignKey' => 'hotel_id',
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
		'HotelGroup' => array(
			'className' => 'HotelGroup',
			'joinTable' => 'hotel_groups_hotels',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hotel_group_id',
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
		'HotelCancellationPolicy' => array(
			'className' => 'HotelCancellationPolicy',
			'joinTable' => 'hotels_hotel_cancellation_policies',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hotel_cancellation_policy_id',
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
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'joinTable' => 'hotels_hotel_facilities',
			'foreignKey' => 'hotel_id',
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
		'HotelFacilityCategory' => array(
			'className' => 'HotelFacilityCategory',
			'joinTable' => 'hotels_hotel_facility_categories',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hotel_facility_category_id',
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
		'HotelModificationPolicy' => array(
			'className' => 'HotelModificationPolicy',
			'joinTable' => 'hotels_hotel_modification_policies',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hotel_modification_policy_id',
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
		'HotelTheme' => array(
			'className' => 'HotelTheme',
			'joinTable' => 'hotels_hotel_themes',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'hotel_theme_id',
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
		'PointNearByHotel' => array(
			'className' => 'PointNearByHotel',
			'joinTable' => 'hotels_point_near_by_hotels',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'point_near_by_hotel_id',
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
		'StarRating' => array(
			'className' => 'StarRating',
			'joinTable' => 'hotels_star_ratings',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'star_rating_id',
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
		'Tax' => array(
			'className' => 'Tax',
			'joinTable' => 'hotels_taxes',
			'foreignKey' => 'hotel_id',
			'associationForeignKey' => 'tax_id',
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
