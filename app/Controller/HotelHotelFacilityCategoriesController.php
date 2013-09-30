<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelFacilityCategories Controller
 *
 * @property HotelsHotelFacilityCategory $HotelsHotelFacilityCategory
 * @property PaginatorComponent $Paginator
 */
class HotelHotelFacilityCategoriesController extends AppController {

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
		$this->HotelsHotelFacilityCategory->recursive = 0;
		$this->set('hotelsHotelFacilityCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel facility category'));
		}
		$options = array('conditions' => array('HotelsHotelFacilityCategory.' . $this->HotelsHotelFacilityCategory->primaryKey => $id));
		$this->set('hotelsHotelFacilityCategory', $this->HotelsHotelFacilityCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelFacilityCategory->create();
			if ($this->HotelsHotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel facility category could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelFacilityCategory->Hotel->find('list');
		$hotelFacilityCategories = $this->HotelsHotelFacilityCategory->HotelFacilityCategory->find('list');
		$this->set(compact('hotels', 'hotelFacilityCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel facility category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel facility category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelFacilityCategory.' . $this->HotelsHotelFacilityCategory->primaryKey => $id));
			$this->request->data = $this->HotelsHotelFacilityCategory->find('first', $options);
		}
		$hotels = $this->HotelsHotelFacilityCategory->Hotel->find('list');
		$hotelFacilityCategories = $this->HotelsHotelFacilityCategory->HotelFacilityCategory->find('list');
		$this->set(compact('hotels', 'hotelFacilityCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelFacilityCategory->id = $id;
		if (!$this->HotelsHotelFacilityCategory->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel facility category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelFacilityCategory->delete()) {
			$this->Session->setFlash(__('Hotels hotel facility category deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel facility category was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
