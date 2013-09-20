<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelCancellationPolicies Controller
 *
 * @property HotelsHotelCancellationPolicy $HotelsHotelCancellationPolicy
 * @property PaginatorComponent $Paginator
 */
class HotelsHotelCancellationPoliciesController extends AppController {

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
		$this->HotelsHotelCancellationPolicy->recursive = 0;
		$this->set('hotelsHotelCancellationPolicies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelCancellationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel cancellation policy'));
		}
		$options = array('conditions' => array('HotelsHotelCancellationPolicy.' . $this->HotelsHotelCancellationPolicy->primaryKey => $id));
		$this->set('hotelsHotelCancellationPolicy', $this->HotelsHotelCancellationPolicy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelCancellationPolicy->create();
			if ($this->HotelsHotelCancellationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel cancellation policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel cancellation policy could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelCancellationPolicy->Hotel->find('list');
		$hotelCancellationPolicies = $this->HotelsHotelCancellationPolicy->HotelCancellationPolicy->find('list');
		$this->set(compact('hotels', 'hotelCancellationPolicies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelCancellationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel cancellation policy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelCancellationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel cancellation policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel cancellation policy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelCancellationPolicy.' . $this->HotelsHotelCancellationPolicy->primaryKey => $id));
			$this->request->data = $this->HotelsHotelCancellationPolicy->find('first', $options);
		}
		$hotels = $this->HotelsHotelCancellationPolicy->Hotel->find('list');
		$hotelCancellationPolicies = $this->HotelsHotelCancellationPolicy->HotelCancellationPolicy->find('list');
		$this->set(compact('hotels', 'hotelCancellationPolicies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelCancellationPolicy->id = $id;
		if (!$this->HotelsHotelCancellationPolicy->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel cancellation policy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelCancellationPolicy->delete()) {
			$this->Session->setFlash(__('Hotels hotel cancellation policy deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel cancellation policy was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
