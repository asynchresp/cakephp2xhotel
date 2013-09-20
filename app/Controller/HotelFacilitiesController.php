<?php
App::uses('AppController', 'Controller');
/**
 * HotelFacilities Controller
 *
 * @property HotelFacility $HotelFacility
 * @property PaginatorComponent $Paginator
 */
class HotelFacilitiesController extends AppController {

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
		$this->HotelFacility->recursive = 0;
		$this->set('hotelFacilities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility'));
		}
		$options = array('conditions' => array('HotelFacility.' . $this->HotelFacility->primaryKey => $id));
		$this->set('hotelFacility', $this->HotelFacility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelFacility->create();
			if ($this->HotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelFacility->Site->find('list');
		$hotelFacilityCategories = $this->HotelFacility->HotelFacilityCategory->find('list');
		$hotelFacilityCategories = $this->HotelFacility->HotelFacilityCategory->find('list');
		$hotelRooms = $this->HotelFacility->HotelRoom->find('list');
		$hotels = $this->HotelFacility->Hotel->find('list');
		$this->set(compact('sites', 'hotelFacilityCategories', 'hotelFacilityCategories', 'hotelRooms', 'hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel facility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel facility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelFacility.' . $this->HotelFacility->primaryKey => $id));
			$this->request->data = $this->HotelFacility->find('first', $options);
		}
		$sites = $this->HotelFacility->Site->find('list');
		$hotelFacilityCategories = $this->HotelFacility->HotelFacilityCategory->find('list');
		$hotelFacilityCategories = $this->HotelFacility->HotelFacilityCategory->find('list');
		$hotelRooms = $this->HotelFacility->HotelRoom->find('list');
		$hotels = $this->HotelFacility->Hotel->find('list');
		$this->set(compact('sites', 'hotelFacilityCategories', 'hotelFacilityCategories', 'hotelRooms', 'hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelFacility->id = $id;
		if (!$this->HotelFacility->exists()) {
			throw new NotFoundException(__('Invalid hotel facility'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelFacility->delete()) {
			$this->Session->setFlash(__('Hotel facility deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel facility was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
