<?php
App::uses('AppController', 'Controller');
/**
 * FoodPackages Controller
 *
 * @property FoodPackage $FoodPackage
 * @property PaginatorComponent $Paginator
 */
class FoodPackagesController extends AppController {

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
		$this->FoodPackage->recursive = 0;
		$this->set('foodPackages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FoodPackage->exists($id)) {
			throw new NotFoundException(__('Invalid food package'));
		}
		$options = array('conditions' => array('FoodPackage.' . $this->FoodPackage->primaryKey => $id));
		$this->set('foodPackage', $this->FoodPackage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FoodPackage->create();
			if ($this->FoodPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The food package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food package could not be saved. Please, try again.'));
			}
		}
		$foodMenuTypes = $this->FoodPackage->FoodMenuType->find('list');
		$hotelRooms = $this->FoodPackage->HotelRoom->find('list');
		$this->set(compact('foodMenuTypes', 'hotelRooms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->FoodPackage->exists($id)) {
			throw new NotFoundException(__('Invalid food package'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FoodPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The food package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FoodPackage.' . $this->FoodPackage->primaryKey => $id));
			$this->request->data = $this->FoodPackage->find('first', $options);
		}
		$foodMenuTypes = $this->FoodPackage->FoodMenuType->find('list');
		$hotelRooms = $this->FoodPackage->HotelRoom->find('list');
		$this->set(compact('foodMenuTypes', 'hotelRooms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->FoodPackage->id = $id;
		if (!$this->FoodPackage->exists()) {
			throw new NotFoundException(__('Invalid food package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FoodPackage->delete()) {
			$this->Session->setFlash(__('Food package deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Food package was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
