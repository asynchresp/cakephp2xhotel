<?php
App::uses('AppController', 'Controller');
/**
 * FoodMenuTypes Controller
 *
 * @property FoodMenuType $FoodMenuType
 * @property PaginatorComponent $Paginator
 */
class FoodMenuTypesController extends AppController {

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
		$this->FoodMenuType->recursive = 0;
		$this->set('foodMenuTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FoodMenuType->exists($id)) {
			throw new NotFoundException(__('Invalid food menu type'));
		}
		$options = array('conditions' => array('FoodMenuType.' . $this->FoodMenuType->primaryKey => $id));
		$this->set('foodMenuType', $this->FoodMenuType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FoodMenuType->create();
			if ($this->FoodMenuType->save($this->request->data)) {
				$this->Session->setFlash(__('The food menu type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food menu type could not be saved. Please, try again.'));
			}
		}
		$sites = $this->FoodMenuType->Site->find('list');
		$hotelRooms = $this->FoodMenuType->HotelRoom->find('list');
		$this->set(compact('sites', 'hotelRooms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->FoodMenuType->exists($id)) {
			throw new NotFoundException(__('Invalid food menu type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FoodMenuType->save($this->request->data)) {
				$this->Session->setFlash(__('The food menu type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food menu type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FoodMenuType.' . $this->FoodMenuType->primaryKey => $id));
			$this->request->data = $this->FoodMenuType->find('first', $options);
		}
		$sites = $this->FoodMenuType->Site->find('list');
		$hotelRooms = $this->FoodMenuType->HotelRoom->find('list');
		$this->set(compact('sites', 'hotelRooms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->FoodMenuType->id = $id;
		if (!$this->FoodMenuType->exists()) {
			throw new NotFoundException(__('Invalid food menu type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FoodMenuType->delete()) {
			$this->Session->setFlash(__('Food menu type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Food menu type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
