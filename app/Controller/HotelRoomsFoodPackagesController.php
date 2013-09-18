<?php
App::uses('AppController', 'Controller');
/**
 * HotelRoomsFoodPackages Controller
 *
 * @property HotelRoomsFoodPackage $HotelRoomsFoodPackage
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsFoodPackagesController extends AppController {

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
		$this->HotelRoomsFoodPackage->recursive = 0;
		$this->set('hotelRoomsFoodPackages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoomsFoodPackage->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms food package'));
		}
		$options = array('conditions' => array('HotelRoomsFoodPackage.' . $this->HotelRoomsFoodPackage->primaryKey => $id));
		$this->set('hotelRoomsFoodPackage', $this->HotelRoomsFoodPackage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoomsFoodPackage->create();
			if ($this->HotelRoomsFoodPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms food package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms food package could not be saved. Please, try again.'));
			}
		}
		$hotelRooms = $this->HotelRoomsFoodPackage->HotelRoom->find('list');
		$foodPackages = $this->HotelRoomsFoodPackage->FoodPackage->find('list');
		$this->set(compact('hotelRooms', 'foodPackages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoomsFoodPackage->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms food package'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoomsFoodPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms food package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms food package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoomsFoodPackage.' . $this->HotelRoomsFoodPackage->primaryKey => $id));
			$this->request->data = $this->HotelRoomsFoodPackage->find('first', $options);
		}
		$hotelRooms = $this->HotelRoomsFoodPackage->HotelRoom->find('list');
		$foodPackages = $this->HotelRoomsFoodPackage->FoodPackage->find('list');
		$this->set(compact('hotelRooms', 'foodPackages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoomsFoodPackage->id = $id;
		if (!$this->HotelRoomsFoodPackage->exists()) {
			throw new NotFoundException(__('Invalid hotel rooms food package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoomsFoodPackage->delete()) {
			$this->Session->setFlash(__('Hotel rooms food package deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel rooms food package was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
