<?php
App::uses('AppController', 'Controller');
/**
 * StarRatings Controller
 *
 * @property StarRating $StarRating
 * @property PaginatorComponent $Paginator
 */
class StarRatingsController extends AppController {

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
		$this->StarRating->recursive = 0;
		$this->set('starRatings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StarRating->exists($id)) {
			throw new NotFoundException(__('Invalid star rating'));
		}
		$options = array('conditions' => array('StarRating.' . $this->StarRating->primaryKey => $id));
		$this->set('starRating', $this->StarRating->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StarRating->create();
			if ($this->StarRating->save($this->request->data)) {
				$this->Session->setFlash(__('The star rating has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The star rating could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->StarRating->Hotel->find('list');
		$this->set(compact('hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->StarRating->exists($id)) {
			throw new NotFoundException(__('Invalid star rating'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StarRating->save($this->request->data)) {
				$this->Session->setFlash(__('The star rating has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The star rating could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StarRating.' . $this->StarRating->primaryKey => $id));
			$this->request->data = $this->StarRating->find('first', $options);
		}
		$hotels = $this->StarRating->Hotel->find('list');
		$this->set(compact('hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->StarRating->id = $id;
		if (!$this->StarRating->exists()) {
			throw new NotFoundException(__('Invalid star rating'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StarRating->delete()) {
			$this->Session->setFlash(__('Star rating deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Star rating was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
