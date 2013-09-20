<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelFacilities Controller
 *
 * @property HotelsHotelFacility $HotelsHotelFacility
 * @property PaginatorComponent $Paginator
 */
class HotelsHotelFacilitiesController extends AppController {

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
		$this->HotelsHotelFacility->recursive = 0;
		$this->set('hotelsHotelFacilities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel facility'));
		}
		$options = array('conditions' => array('HotelsHotelFacility.' . $this->HotelsHotelFacility->primaryKey => $id));
		$this->set('hotelsHotelFacility', $this->HotelsHotelFacility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelFacility->create();
			if ($this->HotelsHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel facility could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelFacility->Hotel->find('list');
		$hotelFacilities = $this->HotelsHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotels', 'hotelFacilities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelFacility->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel facility'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelFacility->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel facility has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel facility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelFacility.' . $this->HotelsHotelFacility->primaryKey => $id));
			$this->request->data = $this->HotelsHotelFacility->find('first', $options);
		}
		$hotels = $this->HotelsHotelFacility->Hotel->find('list');
		$hotelFacilities = $this->HotelsHotelFacility->HotelFacility->find('list');
		$this->set(compact('hotels', 'hotelFacilities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelFacility->id = $id;
		if (!$this->HotelsHotelFacility->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel facility'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelFacility->delete()) {
			$this->Session->setFlash(__('Hotels hotel facility deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel facility was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
