<?php
App::uses('AppController', 'Controller');
/**
 * HotelFacilityCategories Controller
 *
 * @property HotelFacilityCategory $HotelFacilityCategory
 * @property PaginatorComponent $Paginator
 */
class HotelFacilityCategoriesController extends AppController {

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
		$this->HotelFacilityCategory->recursive = 0;
		$this->set('hotelFacilityCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility category'));
		}
		$options = array('conditions' => array('HotelFacilityCategory.' . $this->HotelFacilityCategory->primaryKey => $id));
		$this->set('hotelFacilityCategory', $this->HotelFacilityCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelFacilityCategory->create();
			if ($this->HotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility category could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelFacilityCategory->Site->find('list');
		$hotelFacilities = $this->HotelFacilityCategory->HotelFacility->find('list');
		$hotelRooms = $this->HotelFacilityCategory->HotelRoom->find('list');
		$hotels = $this->HotelFacilityCategory->Hotel->find('list');
		$this->set(compact('sites', 'hotelFacilities', 'hotelRooms', 'hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelFacilityCategory.' . $this->HotelFacilityCategory->primaryKey => $id));
			$this->request->data = $this->HotelFacilityCategory->find('first', $options);
		}
		$sites = $this->HotelFacilityCategory->Site->find('list');
		$hotelFacilities = $this->HotelFacilityCategory->HotelFacility->find('list');
		$hotelRooms = $this->HotelFacilityCategory->HotelRoom->find('list');
		$hotels = $this->HotelFacilityCategory->Hotel->find('list');
		$this->set(compact('sites', 'hotelFacilities', 'hotelRooms', 'hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelFacilityCategory->id = $id;
		if (!$this->HotelFacilityCategory->exists()) {
			throw new NotFoundException(__('Invalid hotel facility category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelFacilityCategory->delete()) {
			$this->Session->setFlash(__('Hotel facility category deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel facility category was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
