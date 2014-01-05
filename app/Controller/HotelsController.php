<?php
App::uses('AppController', 'Controller');
/**
 * Hotels Controller
 *
 * @property Hotel $Hotel
 * @property PaginatorComponent $Paginator
 */
class HotelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
 
	public function admin_index() {
		$logedinUserId=$this->UserAuth->getUserId();
                $groupId=$this->UserAuth->getGroupId();
                                
                if($groupId!='1'){
                     $this->paginate=array('conditions'=>array('user_id'=>$logedinUserId));
                }
                
               
                $this->Hotel->recursive = 0;
		$this->set('hotels', $this->Paginator->paginate());
	}
        
        public function home() {
		$this->Hotel->recursive = 0;
		$this->set('hotels', $this->Paginator->paginate());
	}
        
        

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
		$this->set('hotel', $this->Hotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
            
		if ($this->request->is('post')) {
			$this->Hotel->create();
                        
                        
                        $this->request->data['Hotel']['checkindatetime'] = date('Y-m-d H:i:00', strtotime($this->request->data['Hotel']['checkindatetime']));
                        $this->request->data['Hotel']['checkoutdatetime'] = date('Y-m-d H:i:00', strtotime($this->request->data['Hotel']['checkoutdatetime']));
                        
//                        pr($this->request->data);
                        
//                        die;
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		}
//		$sites = $this->Hotel->Site->find('list');
//		$hotelGroups = $this->Hotel->HotelGroup->find('list');
		
                $this->Hotel->User->bindModel(array('belongsTo'=>array('UserGroup')));
                $res=$this->Hotel->User->find('all',array('fields'=>array('id','first_name','last_name'),'conditions'=>array('active'=>'1','UserGroup.alias_name'=>'hotel_owner')));
            
                $users=array();
                foreach($res as $v){
                    $users[$v['User']['id']]=$v['User']['first_name'].''.$v['User']['last_name'];

                }

                
        $hotelTypes = $this->Hotel->HotelType->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		//$countries = $this->Hotel->Country->find('list');
		$countries = $this->Hotel->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		/*$states = $this->Hotel->State->find('list');
		$cities = $this->Hotel->City->find('list');*/
		$starRatings = $this->Hotel->StarRating->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		//$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$pointNearByHotels = $this->Hotel->PointNearByHotel->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$taxes = $this->Hotel->Tax->find('list');
		$this->set(compact('users','hotelTypes', 'hotelThemes', 'countries', 'states', 'cities', 'starRatings', 'hotelFacilityCategories', 'hotelFacilities', 'hotelCancellationPolicies', 'hotelModificationPolicies', 'hotelGroups', 'hotelCancellationPolicies', 'hotelFacilities', 'hotelFacilityCategories', 'hotelModificationPolicies', 'hotelThemes', 'pointNearByHotels', 'starRatings', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
			$this->request->data = $this->Hotel->find('first', $options);
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		//$sites = $this->Hotel->Site->find('list');
		//$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$this->Hotel->User->bindModel(array('belongsTo'=>array('UserGroup')));
		$res=$this->Hotel->User->find('all',array('fields'=>array('id','first_name','last_name'),'conditions'=>array('active'=>'1','UserGroup.alias_name'=>'hotel_owner')));
		
		$users=array();
		foreach($res as $v){
			$users[$v['User']['id']]=$v['User']['first_name'].''.$v['User']['last_name'];
		}
		
		$hotelTypes = $this->Hotel->HotelType->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$countries = $this->Hotel->Country->find('list');
		$states = $this->Hotel->State->find('list');
		$cities = $this->Hotel->City->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		//$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$pointNearByHotels = $this->Hotel->PointNearByHotel->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$taxes = $this->Hotel->Tax->find('list');
		$this->set(compact('users', 'hotelTypes', 'hotelThemes', 'countries', 'states', 'cities', 'starRatings', 'hotelFacilityCategories', 'hotelFacilities', 'hotelCancellationPolicies', 'hotelModificationPolicies', 'hotelGroups', 'hotelCancellationPolicies', 'hotelFacilities', 'hotelFacilityCategories', 'hotelModificationPolicies', 'hotelThemes', 'pointNearByHotels', 'starRatings', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hotel->delete()) {
			$this->Session->setFlash(__('Hotel deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->Hotel->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->Hotel->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }
	
}
