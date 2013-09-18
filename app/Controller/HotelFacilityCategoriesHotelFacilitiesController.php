<?php
App::uses('AppController', 'Controller');
/**
 * HotelFacilityCategoriesHotelFacilities Controller
 *
 * @property HotelFacilityCategoriesHotelFacility $HotelFacilityCategoriesHotelFacility
 * @property PaginatorComponent $Paginator
 */
class HotelFacilityCategoriesHotelFacilitiesController extends AppController {

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
		$this->HotelFacilityCategoriesHotelFacility->recursive = 0;
		$this->set('hotelFacilityCategoriesHotelFacilities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelFacilityCategoriesHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility categories hotel facility'));
		}
		$options = array('conditions' => array('HotelFacilityCategoriesHotelFacility.' . $this->HotelFacilityCategoriesHotelFacility->primaryKey => $id));
		$this->set('hotelFacilityCategoriesHotelFacility', $this->HotelFacilityCategoriesHotelFacility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelFacilityCategoriesHotelFacility->create();
			if ($this->HotelFacilityCategoriesHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility categories hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility categories hotel facility could not be saved. Please, try again.'));
			}
		}
		$hotelFacilityCategories = $this->HotelFacilityCategoriesHotelFacility->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->HotelFacilityCategoriesHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotelFacilityCategories', 'hotelFacilities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelFacilityCategoriesHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility categories hotel facility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelFacilityCategoriesHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility categories hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility categories hotel facility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelFacilityCategoriesHotelFacility.' . $this->HotelFacilityCategoriesHotelFacility->primaryKey => $id));
			$this->request->data = $this->HotelFacilityCategoriesHotelFacility->find('first', $options);
		}
		$hotelFacilityCategories = $this->HotelFacilityCategoriesHotelFacility->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->HotelFacilityCategoriesHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotelFacilityCategories', 'hotelFacilities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelFacilityCategoriesHotelFacility->id = $id;
		if (!$this->HotelFacilityCategoriesHotelFacility->exists()) {
			throw new NotFoundException(__('Invalid hotel facility categories hotel facility'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelFacilityCategoriesHotelFacility->delete()) {
			$this->Session->setFlash(__('Hotel facility categories hotel facility deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel facility categories hotel facility was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
