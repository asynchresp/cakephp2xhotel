<?php
App::uses('AppController', 'Controller');
/**
 * HotelInformativePages Controller
 *
 * @property HotelInformativePage $HotelInformativePage
 * @property PaginatorComponent $Paginator
 */
class HotelInformativePagesController extends AppController {

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
		$this->HotelInformativePage->recursive = 0;
		$this->set('hotelInformativePages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelInformativePage->exists($id)) {
			throw new NotFoundException(__('Invalid hotel informative page'));
		}
		$options = array('conditions' => array('HotelInformativePage.' . $this->HotelInformativePage->primaryKey => $id));
		$this->set('hotelInformativePage', $this->HotelInformativePage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelInformativePage->create();
			if ($this->HotelInformativePage->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel informative page has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel informative page could not be saved. Please, try again.'));
			}
		}
		$sites = $this->HotelInformativePage->Site->find('list');
		$hotels = $this->HotelInformativePage->Hotel->find('list');
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
		if (!$this->HotelInformativePage->exists($id)) {
			throw new NotFoundException(__('Invalid hotel informative page'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelInformativePage->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel informative page has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel informative page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelInformativePage.' . $this->HotelInformativePage->primaryKey => $id));
			$this->request->data = $this->HotelInformativePage->find('first', $options);
		}
		$sites = $this->HotelInformativePage->Site->find('list');
		$hotels = $this->HotelInformativePage->Hotel->find('list');
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
		$this->HotelInformativePage->id = $id;
		if (!$this->HotelInformativePage->exists()) {
			throw new NotFoundException(__('Invalid hotel informative page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelInformativePage->delete()) {
			$this->Session->setFlash(__('Hotel informative page deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel informative page was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
