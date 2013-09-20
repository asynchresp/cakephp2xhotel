<?php
App::uses('AppController', 'Controller');
/**
 * HotelTypes Controller
 *
 * @property HotelType $HotelType
 * @property PaginatorComponent $Paginator
 */
class HotelTypesController extends AppController {

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
		$this->HotelType->recursive = 0;
		$this->set('hotelTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelType->exists($id)) {
			throw new NotFoundException(__('Invalid hotel type'));
		}
		$options = array('conditions' => array('HotelType.' . $this->HotelType->primaryKey => $id));
		$this->set('hotelType', $this->HotelType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelType->create();
			if ($this->HotelType->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel type could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelType->Site->find('list');
		$this->set(compact('sites'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelType->exists($id)) {
			throw new NotFoundException(__('Invalid hotel type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelType->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelType.' . $this->HotelType->primaryKey => $id));
			$this->request->data = $this->HotelType->find('first', $options);
		}
		$sites = $this->HotelType->Site->find('list');
		$this->set(compact('sites'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelType->id = $id;
		if (!$this->HotelType->exists()) {
			throw new NotFoundException(__('Invalid hotel type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelType->delete()) {
			$this->Session->setFlash(__('Hotel type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
