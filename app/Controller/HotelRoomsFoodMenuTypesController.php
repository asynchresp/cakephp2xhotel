<?php
App::uses('AppController', 'Controller');
/**
 * HotelRoomsFoodMenuTypes Controller
 *
 * @property HotelRoomsFoodMenuType $HotelRoomsFoodMenuType
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsFoodMenuTypesController extends AppController {

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
		$this->HotelRoomsFoodMenuType->recursive = 0;
		$this->set('hotelRoomsFoodMenuTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoomsFoodMenuType->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms food menu type'));
		}
		$options = array('conditions' => array('HotelRoomsFoodMenuType.' . $this->HotelRoomsFoodMenuType->primaryKey => $id));
		$this->set('hotelRoomsFoodMenuType', $this->HotelRoomsFoodMenuType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoomsFoodMenuType->create();
			if ($this->HotelRoomsFoodMenuType->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms food menu type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms food menu type could not be saved. Please, try again.'));
			}
		}
		$hotelRooms = $this->HotelRoomsFoodMenuType->HotelRoom->find('list');
		$foodMenuTypes = $this->HotelRoomsFoodMenuType->FoodMenuType->find('list');
		$this->set(compact('hotelRooms', 'foodMenuTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoomsFoodMenuType->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms food menu type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoomsFoodMenuType->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms food menu type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms food menu type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoomsFoodMenuType.' . $this->HotelRoomsFoodMenuType->primaryKey => $id));
			$this->request->data = $this->HotelRoomsFoodMenuType->find('first', $options);
		}
		$hotelRooms = $this->HotelRoomsFoodMenuType->HotelRoom->find('list');
		$foodMenuTypes = $this->HotelRoomsFoodMenuType->FoodMenuType->find('list');
		$this->set(compact('hotelRooms', 'foodMenuTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoomsFoodMenuType->id = $id;
		if (!$this->HotelRoomsFoodMenuType->exists()) {
			throw new NotFoundException(__('Invalid hotel rooms food menu type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoomsFoodMenuType->delete()) {
			$this->Session->setFlash(__('Hotel rooms food menu type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel rooms food menu type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
