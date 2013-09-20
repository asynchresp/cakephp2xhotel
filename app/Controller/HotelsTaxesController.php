<?php
App::uses('AppController', 'Controller');
/**
 * HotelsTaxes Controller
 *
 * @property HotelsTax $HotelsTax
 * @property PaginatorComponent $Paginator
 */
class HotelsTaxesController extends AppController {

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
		$this->HotelsTax->recursive = 0;
		$this->set('hotelsTaxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsTax->exists($id)) {
			throw new NotFoundException(__('Invalid hotels tax'));
		}
		$options = array('conditions' => array('HotelsTax.' . $this->HotelsTax->primaryKey => $id));
		$this->set('hotelsTax', $this->HotelsTax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsTax->create();
			if ($this->HotelsTax->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels tax could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsTax->Hotel->find('list');
		$taxes = $this->HotelsTax->Tax->find('list');
		$this->set(compact('hotels', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsTax->exists($id)) {
			throw new NotFoundException(__('Invalid hotels tax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsTax->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels tax could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsTax.' . $this->HotelsTax->primaryKey => $id));
			$this->request->data = $this->HotelsTax->find('first', $options);
		}
		$hotels = $this->HotelsTax->Hotel->find('list');
		$taxes = $this->HotelsTax->Tax->find('list');
		$this->set(compact('hotels', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsTax->id = $id;
		if (!$this->HotelsTax->exists()) {
			throw new NotFoundException(__('Invalid hotels tax'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsTax->delete()) {
			$this->Session->setFlash(__('Hotels tax deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels tax was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
