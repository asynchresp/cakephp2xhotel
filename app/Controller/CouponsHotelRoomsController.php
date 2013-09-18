<?php
App::uses('AppController', 'Controller');
/**
 * CouponsHotelRooms Controller
 *
 * @property CouponsHotelRoom $CouponsHotelRoom
 * @property PaginatorComponent $Paginator
 */
class CouponsHotelRoomsController extends AppController {

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
		$this->CouponsHotelRoom->recursive = 0;
		$this->set('couponsHotelRooms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CouponsHotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid coupons hotel room'));
		}
		$options = array('conditions' => array('CouponsHotelRoom.' . $this->CouponsHotelRoom->primaryKey => $id));
		$this->set('couponsHotelRoom', $this->CouponsHotelRoom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CouponsHotelRoom->create();
			if ($this->CouponsHotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The coupons hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupons hotel room could not be saved. Please, try again.'));
			}
		}
		$coupons = $this->CouponsHotelRoom->Coupon->find('list');
		$hotelRooms = $this->CouponsHotelRoom->HotelRoom->find('list');
		$this->set(compact('coupons', 'hotelRooms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CouponsHotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid coupons hotel room'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CouponsHotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The coupons hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupons hotel room could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CouponsHotelRoom.' . $this->CouponsHotelRoom->primaryKey => $id));
			$this->request->data = $this->CouponsHotelRoom->find('first', $options);
		}
		$coupons = $this->CouponsHotelRoom->Coupon->find('list');
		$hotelRooms = $this->CouponsHotelRoom->HotelRoom->find('list');
		$this->set(compact('coupons', 'hotelRooms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CouponsHotelRoom->id = $id;
		if (!$this->CouponsHotelRoom->exists()) {
			throw new NotFoundException(__('Invalid coupons hotel room'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CouponsHotelRoom->delete()) {
			$this->Session->setFlash(__('Coupons hotel room deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coupons hotel room was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
