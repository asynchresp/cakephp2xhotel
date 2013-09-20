<?php
App::uses('AppController', 'Controller');
/**
 * HotelGroups Controller
 *
 * @property HotelGroup $HotelGroup
 * @property PaginatorComponent $Paginator
 */
class HotelGroupsController extends AppController {

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
		$this->HotelGroup->recursive = 0;
		$this->set('hotelGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelGroup->exists($id)) {
			throw new NotFoundException(__('Invalid hotel group'));
		}
		$options = array('conditions' => array('HotelGroup.' . $this->HotelGroup->primaryKey => $id));
		$this->set('hotelGroup', $this->HotelGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelGroup->create();
			if ($this->HotelGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel group has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel group could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelGroup->Site->find('list');
		$hotels = $this->HotelGroup->Hotel->find('list');
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
		if (!$this->HotelGroup->exists($id)) {
			throw new NotFoundException(__('Invalid hotel group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel group has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelGroup.' . $this->HotelGroup->primaryKey => $id));
			$this->request->data = $this->HotelGroup->find('first', $options);
		}
		$sites = $this->HotelGroup->Site->find('list');
		$hotels = $this->HotelGroup->Hotel->find('list');
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
		$this->HotelGroup->id = $id;
		if (!$this->HotelGroup->exists()) {
			throw new NotFoundException(__('Invalid hotel group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelGroup->delete()) {
			$this->Session->setFlash(__('Hotel group deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel group was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
