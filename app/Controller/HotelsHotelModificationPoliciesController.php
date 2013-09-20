<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelModificationPolicies Controller
 *
 * @property HotelsHotelModificationPolicy $HotelsHotelModificationPolicy
 * @property PaginatorComponent $Paginator
 */
class HotelsHotelModificationPoliciesController extends AppController {

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
		$this->HotelsHotelModificationPolicy->recursive = 0;
		$this->set('hotelsHotelModificationPolicies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelModificationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel modification policy'));
		}
		$options = array('conditions' => array('HotelsHotelModificationPolicy.' . $this->HotelsHotelModificationPolicy->primaryKey => $id));
		$this->set('hotelsHotelModificationPolicy', $this->HotelsHotelModificationPolicy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelModificationPolicy->create();
			if ($this->HotelsHotelModificationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel modification policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel modification policy could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelModificationPolicy->Hotel->find('list');
		$hotelModificationPolicies = $this->HotelsHotelModificationPolicy->HotelModificationPolicy->find('list');
		$this->set(compact('hotels', 'hotelModificationPolicies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelModificationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel modification policy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelModificationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel modification policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel modification policy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelModificationPolicy.' . $this->HotelsHotelModificationPolicy->primaryKey => $id));
			$this->request->data = $this->HotelsHotelModificationPolicy->find('first', $options);
		}
		$hotels = $this->HotelsHotelModificationPolicy->Hotel->find('list');
		$hotelModificationPolicies = $this->HotelsHotelModificationPolicy->HotelModificationPolicy->find('list');
		$this->set(compact('hotels', 'hotelModificationPolicies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelModificationPolicy->id = $id;
		if (!$this->HotelsHotelModificationPolicy->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel modification policy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelModificationPolicy->delete()) {
			$this->Session->setFlash(__('Hotels hotel modification policy deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel modification policy was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
