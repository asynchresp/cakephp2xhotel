<?php
App::uses('AppController', 'Controller');
/**
 * HotelRoomsTaxes Controller
 *
 * @property HotelRoomsTax $HotelRoomsTax
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsTaxesController extends AppController {

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
		$this->HotelRoomsTax->recursive = 0;
		$this->set('hotelRoomsTaxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoomsTax->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms tax'));
		}
		$options = array('conditions' => array('HotelRoomsTax.' . $this->HotelRoomsTax->primaryKey => $id));
		$this->set('hotelRoomsTax', $this->HotelRoomsTax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoomsTax->create();
			if ($this->HotelRoomsTax->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms tax could not be saved. Please, try again.'));
			}
		}
		$hotelRooms = $this->HotelRoomsTax->HotelRoom->find('list');
		$taxes = $this->HotelRoomsTax->Tax->find('list');
		$this->set(compact('hotelRooms', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoomsTax->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms tax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoomsTax->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms tax could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoomsTax.' . $this->HotelRoomsTax->primaryKey => $id));
			$this->request->data = $this->HotelRoomsTax->find('first', $options);
		}
		$hotelRooms = $this->HotelRoomsTax->HotelRoom->find('list');
		$taxes = $this->HotelRoomsTax->Tax->find('list');
		$this->set(compact('hotelRooms', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoomsTax->id = $id;
		if (!$this->HotelRoomsTax->exists()) {
			throw new NotFoundException(__('Invalid hotel rooms tax'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoomsTax->delete()) {
			$this->Session->setFlash(__('Hotel rooms tax deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel rooms tax was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
