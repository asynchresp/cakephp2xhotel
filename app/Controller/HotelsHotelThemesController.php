<?php
App::uses('AppController', 'Controller');
/**
 * HotelsHotelThemes Controller
 *
 * @property HotelsHotelTheme $HotelsHotelTheme
 * @property PaginatorComponent $Paginator
 */
class HotelsHotelThemesController extends AppController {

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
		$this->HotelsHotelTheme->recursive = 0;
		$this->set('hotelsHotelThemes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsHotelTheme->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel theme'));
		}
		$options = array('conditions' => array('HotelsHotelTheme.' . $this->HotelsHotelTheme->primaryKey => $id));
		$this->set('hotelsHotelTheme', $this->HotelsHotelTheme->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsHotelTheme->create();
			if ($this->HotelsHotelTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel theme has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel theme could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsHotelTheme->Hotel->find('list');
		$hotelThemes = $this->HotelsHotelTheme->HotelTheme->find('list');
		$this->set(compact('hotels', 'hotelThemes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsHotelTheme->exists($id)) {
			throw new NotFoundException(__('Invalid hotels hotel theme'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsHotelTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels hotel theme has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels hotel theme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsHotelTheme.' . $this->HotelsHotelTheme->primaryKey => $id));
			$this->request->data = $this->HotelsHotelTheme->find('first', $options);
		}
		$hotels = $this->HotelsHotelTheme->Hotel->find('list');
		$hotelThemes = $this->HotelsHotelTheme->HotelTheme->find('list');
		$this->set(compact('hotels', 'hotelThemes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsHotelTheme->id = $id;
		if (!$this->HotelsHotelTheme->exists()) {
			throw new NotFoundException(__('Invalid hotels hotel theme'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsHotelTheme->delete()) {
			$this->Session->setFlash(__('Hotels hotel theme deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels hotel theme was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
