<?php
App::uses('AppController', 'Controller');
/**
 * HotelModificationPolicies Controller
 *
 * @property HotelModificationPolicy $HotelModificationPolicy
 * @property PaginatorComponent $Paginator
 */
class HotelModificationPoliciesController extends AppController {

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
		$this->HotelModificationPolicy->recursive = 0;
		$this->set('hotelModificationPolicies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelModificationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotel modification policy'));
		}
		$options = array('conditions' => array('HotelModificationPolicy.' . $this->HotelModificationPolicy->primaryKey => $id));
		$this->set('hotelModificationPolicy', $this->HotelModificationPolicy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelModificationPolicy->create();
			if ($this->HotelModificationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel modification policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel modification policy could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelModificationPolicy->Site->find('list');
		$hotels = $this->HotelModificationPolicy->Hotel->find('list');
		$this->set(compact('sites', 'hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelModificationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotel modification policy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelModificationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel modification policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel modification policy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelModificationPolicy.' . $this->HotelModificationPolicy->primaryKey => $id));
			$this->request->data = $this->HotelModificationPolicy->find('first', $options);
		}
		$sites = $this->HotelModificationPolicy->Site->find('list');
		$hotels = $this->HotelModificationPolicy->Hotel->find('list');
		$this->set(compact('sites', 'hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelModificationPolicy->id = $id;
		if (!$this->HotelModificationPolicy->exists()) {
			throw new NotFoundException(__('Invalid hotel modification policy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelModificationPolicy->delete()) {
			$this->Session->setFlash(__('Hotel modification policy deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel modification policy was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
