<?php
App::uses('AppController', 'Controller');
/**
 * HotelsPointNearByHotels Controller
 *
 * @property HotelsPointNearByHotel $HotelsPointNearByHotel
 * @property PaginatorComponent $Paginator
 */
class HotelsPointNearByHotelsController extends AppController {

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
		$this->HotelsPointNearByHotel->recursive = 0;
		$this->set('hotelsPointNearByHotels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsPointNearByHotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotels point near by hotel'));
		}
		$options = array('conditions' => array('HotelsPointNearByHotel.' . $this->HotelsPointNearByHotel->primaryKey => $id));
		$this->set('hotelsPointNearByHotel', $this->HotelsPointNearByHotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsPointNearByHotel->create();
			if ($this->HotelsPointNearByHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels point near by hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels point near by hotel could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsPointNearByHotel->Hotel->find('list');
		$pointNearByHotels = $this->HotelsPointNearByHotel->PointNearByHotel->find('list');
		$this->set(compact('hotels', 'pointNearByHotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsPointNearByHotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotels point near by hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsPointNearByHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels point near by hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels point near by hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsPointNearByHotel.' . $this->HotelsPointNearByHotel->primaryKey => $id));
			$this->request->data = $this->HotelsPointNearByHotel->find('first', $options);
		}
		$hotels = $this->HotelsPointNearByHotel->Hotel->find('list');
		$pointNearByHotels = $this->HotelsPointNearByHotel->PointNearByHotel->find('list');
		$this->set(compact('hotels', 'pointNearByHotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsPointNearByHotel->id = $id;
		if (!$this->HotelsPointNearByHotel->exists()) {
			throw new NotFoundException(__('Invalid hotels point near by hotel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsPointNearByHotel->delete()) {
			$this->Session->setFlash(__('Hotels point near by hotel deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels point near by hotel was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
