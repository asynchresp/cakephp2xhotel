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
		$countries = $this->HotelRoom->Country->find('list');
		$states = $this->HotelRoom->State->find('list');
		$cities = $this->HotelRoom->City->find('list');
		$hotels = $this->HotelRoom->Hotel->find('list');
		$roomTypes = $this->HotelRoom->RoomType->find('list');
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list');
		$foodPackages = $this->HotelRoom->FoodPackage->find('list');
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list');
		$taxes = $this->HotelRoom->Tax->find('list');
		$coupons = $this->HotelRoom->Coupon->find('list');
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list');
		$foodPackages = $this->HotelRoom->FoodPackage->find('list');
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list');
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list');
		$taxes = $this->HotelRoom->Tax->find('list');
		$tourPackages = $this->HotelRoom->TourPackage->find('list');
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
		}
		$countries = $this->HotelRoom->Country->find('list');
		$states = $this->HotelRoom->State->find('list');
		$cities = $this->HotelRoom->City->find('list');
		$hotels = $this->HotelRoom->Hotel->find('list');
		$roomTypes = $this->HotelRoom->RoomType->find('list');
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list');
		$foodPackages = $this->HotelRoom->FoodPackage->find('list');
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list');
		$taxes = $this->HotelRoom->Tax->find('list');
		$coupons = $this->HotelRoom->Coupon->find('list');
		$foodMenuTypes = $this->HotelRoom->FoodMenuType->find('list');
		$foodPackages = $this->HotelRoom->FoodPackage->find('list');
		$hotelFacilities = $this->HotelRoom->HotelFacility->find('list');
		$hotelFacilityCategories = $this->HotelRoom->HotelFacilityCategory->find('list');
		$taxes = $this->HotelRoom->Tax->find('list');
		$tourPackages = $this->HotelRoom->TourPackage->find('list');
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
}
