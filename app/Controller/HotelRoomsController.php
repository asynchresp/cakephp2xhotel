<?php
App::uses('AppController', 'Controller');
/**
 * HotelRooms Controller
 *
 * @property HotelRoom $HotelRoom
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsController extends AppController {

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
		$this->HotelRoom->recursive = 0;
		$this->set('hotelRooms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid hotel room'));
		}
		$options = array('conditions' => array('HotelRoom.' . $this->HotelRoom->primaryKey => $id));
		$this->set('hotelRoom', $this->HotelRoom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoom->create();
			if ($this->HotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel room could not be saved. Please, try again.'));
			}
		}
		$countries = $this->HotelRoom->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		//$states = $this->HotelRoom->State->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		//$cities = $this->HotelRoom->City->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotels = $this->HotelRoom->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$roomTypes = $this->HotelRoom->RoomType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodPackages = $this->HotelRoom->FoodPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'title'));
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list');
		$taxes = $this->HotelRoom->Tax->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$coupons = $this->HotelRoom->Coupon->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodPackages = $this->HotelRoom->FoodPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'title'));
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$taxes = $this->HotelRoom->Tax->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$tourPackages = $this->HotelRoom->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('countries', 'states', 'cities', 'hotels', 'roomTypes', 'foodMenuTypes', 'foodPackages', 'hotelFacilityCategories', 'hotelFacilities', 'taxes', 'coupons', 'foodMenuTypes', 'foodPackages', 'hotelFacilities', 'hotelFacilityCategories', 'taxes', 'tourPackages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid hotel room'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel room could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoom.' . $this->HotelRoom->primaryKey => $id));
			$this->request->data = $this->HotelRoom->find('first', $options);
			//pr($this->request->data);
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		$countries = $this->HotelRoom->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->HotelRoom->State->find('list',array('conditions'=>array('country_id'=>$selCountry,'status'=>1),'order'=>'name'));
		$cities = $this->HotelRoom->City->find('list',array('conditions'=>array('state_id'=>$selState,'status'=>1),'order'=>'name'));
		$hotels = $this->HotelRoom->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$roomTypes = $this->HotelRoom->RoomType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodPackages = $this->HotelRoom->FoodPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'title'));
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$taxes = $this->HotelRoom->Tax->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$coupons = $this->HotelRoom->Coupon->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$foodPackages = $this->HotelRoom->FoodPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'title'));
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$taxes = $this->HotelRoom->Tax->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$tourPackages = $this->HotelRoom->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('countries', 'states', 'cities', 'hotels', 'roomTypes', 'foodMenuTypes', 'foodPackages', 'hotelFacilityCategories', 'hotelFacilities', 'taxes', 'coupons', 'foodMenuTypes', 'foodPackages', 'hotelFacilities', 'hotelFacilityCategories', 'taxes', 'tourPackages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoom->id = $id;
		if (!$this->HotelRoom->exists()) {
			throw new NotFoundException(__('Invalid hotel room'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoom->delete()) {
			$this->Session->setFlash(__('Hotel room deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel room was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->HotelRoom->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->HotelRoom->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }	
}
