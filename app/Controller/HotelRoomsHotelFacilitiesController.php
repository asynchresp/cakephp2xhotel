<?php
App::uses('AppController', 'Controller');
/**
 * HotelRoomsHotelFacilities Controller
 *
 * @property HotelRoomsHotelFacility $HotelRoomsHotelFacility
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsHotelFacilitiesController extends AppController {

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
		$this->HotelRoomsHotelFacility->recursive = 0;
		$this->set('hotelRoomsHotelFacilities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoomsHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility'));
		}
		$options = array('conditions' => array('HotelRoomsHotelFacility.' . $this->HotelRoomsHotelFacility->primaryKey => $id));
		$this->set('hotelRoomsHotelFacility', $this->HotelRoomsHotelFacility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoomsHotelFacility->create();
			if ($this->HotelRoomsHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms hotel facility could not be saved. Please, try again.'));
			}
		}
		$hotelRooms = $this->HotelRoomsHotelFacility->HotelRoom->find('list');
		$hotelFacilities = $this->HotelRoomsHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotelRooms', 'hotelFacilities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoomsHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoomsHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms hotel facility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoomsHotelFacility.' . $this->HotelRoomsHotelFacility->primaryKey => $id));
			$this->request->data = $this->HotelRoomsHotelFacility->find('first', $options);
		}
		$hotelRooms = $this->HotelRoomsHotelFacility->HotelRoom->find('list');
		$hotelFacilities = $this->HotelRoomsHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotelRooms', 'hotelFacilities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoomsHotelFacility->id = $id;
		if (!$this->HotelRoomsHotelFacility->exists()) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoomsHotelFacility->delete()) {
			$this->Session->setFlash(__('Hotel rooms hotel facility deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel rooms hotel facility was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
