<?php
App::uses('AppController', 'Controller');
/**
 * HotelGroupsHotels Controller
 *
 * @property HotelGroupsHotel $HotelGroupsHotel
 * @property PaginatorComponent $Paginator
 */
class HotelGroupsHotelsController extends AppController {

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
		$this->HotelGroupsHotel->recursive = 0;
		$this->set('hotelGroupsHotels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelGroupsHotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel groups hotel'));
		}
		$options = array('conditions' => array('HotelGroupsHotel.' . $this->HotelGroupsHotel->primaryKey => $id));
		$this->set('hotelGroupsHotel', $this->HotelGroupsHotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelGroupsHotel->create();
			if ($this->HotelGroupsHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel groups hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel groups hotel could not be saved. Please, try again.'));
			}
		}
		$hotelGroups = $this->HotelGroupsHotel->HotelGroup->find('list');
		$hotels = $this->HotelGroupsHotel->Hotel->find('list');
		$this->set(compact('hotelGroups', 'hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelGroupsHotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel groups hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelGroupsHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel groups hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel groups hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelGroupsHotel.' . $this->HotelGroupsHotel->primaryKey => $id));
			$this->request->data = $this->HotelGroupsHotel->find('first', $options);
		}
		$hotelGroups = $this->HotelGroupsHotel->HotelGroup->find('list');
		$hotels = $this->HotelGroupsHotel->Hotel->find('list');
		$this->set(compact('hotelGroups', 'hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelGroupsHotel->id = $id;
		if (!$this->HotelGroupsHotel->exists()) {
			throw new NotFoundException(__('Invalid hotel groups hotel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelGroupsHotel->delete()) {
			$this->Session->setFlash(__('Hotel groups hotel deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel groups hotel was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
