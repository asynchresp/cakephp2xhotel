<?php
App::uses('AppController', 'Controller');
/**
 * RoomTypes Controller
 *
 * @property RoomType $RoomType
 * @property PaginatorComponent $Paginator
 */
class RoomTypesController extends AppController {

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
		$this->RoomType->recursive = 0;
		$this->set('roomTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RoomType->exists($id)) {
			throw new NotFoundException(__('Invalid room type'));
		}
		$options = array('conditions' => array('RoomType.' . $this->RoomType->primaryKey => $id));
		$this->set('roomType', $this->RoomType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RoomType->create();
			if ($this->RoomType->save($this->request->data)) {
				$this->Session->setFlash(__('The room type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RoomType->exists($id)) {
			throw new NotFoundException(__('Invalid room type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RoomType->save($this->request->data)) {
				$this->Session->setFlash(__('The room type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RoomType.' . $this->RoomType->primaryKey => $id));
			$this->request->data = $this->RoomType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RoomType->id = $id;
		if (!$this->RoomType->exists()) {
			throw new NotFoundException(__('Invalid room type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RoomType->delete()) {
			$this->Session->setFlash(__('Room type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Room type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
