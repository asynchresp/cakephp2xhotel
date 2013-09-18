<?php
App::uses('AppController', 'Controller');
/**
 * HotelRoomsHotelFacilityCategories Controller
 *
 * @property HotelRoomsHotelFacilityCategory $HotelRoomsHotelFacilityCategory
 * @property PaginatorComponent $Paginator
 */
class HotelRoomsHotelFacilityCategoriesController extends AppController {

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
		$this->HotelRoomsHotelFacilityCategory->recursive = 0;
		$this->set('hotelRoomsHotelFacilityCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelRoomsHotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility category'));
		}
		$options = array('conditions' => array('HotelRoomsHotelFacilityCategory.' . $this->HotelRoomsHotelFacilityCategory->primaryKey => $id));
		$this->set('hotelRoomsHotelFacilityCategory', $this->HotelRoomsHotelFacilityCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelRoomsHotelFacilityCategory->create();
			if ($this->HotelRoomsHotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms hotel facility category could not be saved. Please, try again.'));
			}
		}
		$hotelRooms = $this->HotelRoomsHotelFacilityCategory->HotelRoom->find('list');
		$hotelFacilityCategories = $this->HotelRoomsHotelFacilityCategory->HotelFacilityCategory->find('list');
		$this->set(compact('hotelRooms', 'hotelFacilityCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelRoomsHotelFacilityCategory->exists($id)) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelRoomsHotelFacilityCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel rooms hotel facility category has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel rooms hotel facility category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelRoomsHotelFacilityCategory.' . $this->HotelRoomsHotelFacilityCategory->primaryKey => $id));
			$this->request->data = $this->HotelRoomsHotelFacilityCategory->find('first', $options);
		}
		$hotelRooms = $this->HotelRoomsHotelFacilityCategory->HotelRoom->find('list');
		$hotelFacilityCategories = $this->HotelRoomsHotelFacilityCategory->HotelFacilityCategory->find('list');
		$this->set(compact('hotelRooms', 'hotelFacilityCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelRoomsHotelFacilityCategory->id = $id;
		if (!$this->HotelRoomsHotelFacilityCategory->exists()) {
			throw new NotFoundException(__('Invalid hotel rooms hotel facility category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelRoomsHotelFacilityCategory->delete()) {
			$this->Session->setFlash(__('Hotel rooms hotel facility category deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel rooms hotel facility category was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
