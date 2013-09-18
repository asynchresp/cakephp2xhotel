<?php
App::uses('AppController', 'Controller');
/**
 * HotelThemes Controller
 *
 * @property HotelTheme $HotelTheme
 * @property PaginatorComponent $Paginator
 */
class HotelThemesController extends AppController {

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
		$this->HotelTheme->recursive = 0;
		$this->set('hotelThemes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelTheme->exists($id)) {
			throw new NotFoundException(__('Invalid hotel theme'));
		}
		$options = array('conditions' => array('HotelTheme.' . $this->HotelTheme->primaryKey => $id));
		$this->set('hotelTheme', $this->HotelTheme->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelTheme->create();
			if ($this->HotelTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel theme has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel theme could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelTheme->Site->find('list');
		$hotels = $this->HotelTheme->Hotel->find('list');
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
		if (!$this->HotelTheme->exists($id)) {
			throw new NotFoundException(__('Invalid hotel theme'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel theme has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel theme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelTheme.' . $this->HotelTheme->primaryKey => $id));
			$this->request->data = $this->HotelTheme->find('first', $options);
		}
		$sites = $this->HotelTheme->Site->find('list');
		$hotels = $this->HotelTheme->Hotel->find('list');
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
		$this->HotelTheme->id = $id;
		if (!$this->HotelTheme->exists()) {
			throw new NotFoundException(__('Invalid hotel theme'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelTheme->delete()) {
			$this->Session->setFlash(__('Hotel theme deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel theme was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
