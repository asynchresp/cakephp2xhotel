<?php
App::uses('AppController', 'Controller');
/**
 * HotelCancellationPolicies Controller
 *
 * @property HotelCancellationPolicy $HotelCancellationPolicy
 * @property PaginatorComponent $Paginator
 */
class HotelCancellationPoliciesController extends AppController {

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
		$this->HotelCancellationPolicy->recursive = 0;
		$this->set('hotelCancellationPolicies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelCancellationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotel cancellation policy'));
		}
		$options = array('conditions' => array('HotelCancellationPolicy.' . $this->HotelCancellationPolicy->primaryKey => $id));
		$this->set('hotelCancellationPolicy', $this->HotelCancellationPolicy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelCancellationPolicy->create();
			if ($this->HotelCancellationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel cancellation policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel cancellation policy could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelCancellationPolicy->Site->find('list');
		$hotels = $this->HotelCancellationPolicy->Hotel->find('list');
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
		if (!$this->HotelCancellationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid hotel cancellation policy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelCancellationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel cancellation policy has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel cancellation policy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelCancellationPolicy.' . $this->HotelCancellationPolicy->primaryKey => $id));
			$this->request->data = $this->HotelCancellationPolicy->find('first', $options);
		}
		$sites = $this->HotelCancellationPolicy->Site->find('list');
		$hotels = $this->HotelCancellationPolicy->Hotel->find('list');
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
		$this->HotelCancellationPolicy->id = $id;
		if (!$this->HotelCancellationPolicy->exists()) {
			throw new NotFoundException(__('Invalid hotel cancellation policy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelCancellationPolicy->delete()) {
			$this->Session->setFlash(__('Hotel cancellation policy deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel cancellation policy was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
