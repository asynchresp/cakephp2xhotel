<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelTyeps Controller
 *
 * @property HotelsHotelTyep $HotelsHotelTyep
 * @property PaginatorComponent $Paginator
 */
class HotelsHotelTyepsController extends AppController {

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
		$this->HotelsHotelTyep->recursive = 0;
		$this->set('hotelsHotelTyeps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelTyep->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel tyep'));
		}
		$options = array('conditions' => array('HotelsHotelTyep.' . $this->HotelsHotelTyep->primaryKey => $id));
		$this->set('hotelsHotelTyep', $this->HotelsHotelTyep->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelTyep->create();
			if ($this->HotelsHotelTyep->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel tyep has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel tyep could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelTyep->Hotel->find('list');
		$hotelTypes = $this->HotelsHotelTyep->HotelType->find('list');
		$this->set(compact('hotels', 'hotelTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelTyep->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel tyep'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelTyep->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel tyep has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel tyep could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelTyep.' . $this->HotelsHotelTyep->primaryKey => $id));
			$this->request->data = $this->HotelsHotelTyep->find('first', $options);
		}
		$hotels = $this->HotelsHotelTyep->Hotel->find('list');
		$hotelTypes = $this->HotelsHotelTyep->HotelType->find('list');
		$this->set(compact('hotels', 'hotelTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelTyep->id = $id;
		if (!$this->HotelsHotelTyep->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel tyep'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelTyep->delete()) {
			$this->Session->setFlash(__('Hotels hotel tyep deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel tyep was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
