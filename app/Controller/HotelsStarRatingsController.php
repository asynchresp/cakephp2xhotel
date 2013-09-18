<?php
App::uses('AppController', 'Controller');
/**
 * HotelsStarRatings Controller
 *
 * @property HotelsStarRating $HotelsStarRating
 * @property PaginatorComponent $Paginator
 */
class HotelsStarRatingsController extends AppController {

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
		$this->HotelsStarRating->recursive = 0;
		$this->set('hotelsStarRatings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HotelsStarRating->exists($id)) {
			throw new NotFoundException(__('Invalid hotels star rating'));
		}
		$options = array('conditions' => array('HotelsStarRating.' . $this->HotelsStarRating->primaryKey => $id));
		$this->set('hotelsStarRating', $this->HotelsStarRating->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HotelsStarRating->create();
			if ($this->HotelsStarRating->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels star rating has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels star rating could not be saved. Please, try again.'));
			}
		}
		$hotels = $this->HotelsStarRating->Hotel->find('list');
		$starRatings = $this->HotelsStarRating->StarRating->find('list');
		$this->set(compact('hotels', 'starRatings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HotelsStarRating->exists($id)) {
			throw new NotFoundException(__('Invalid hotels star rating'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotelsStarRating->save($this->request->data)) {
				$this->Session->setFlash(__('The hotels star rating has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotels star rating could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HotelsStarRating.' . $this->HotelsStarRating->primaryKey => $id));
			$this->request->data = $this->HotelsStarRating->find('first', $options);
		}
		$hotels = $this->HotelsStarRating->Hotel->find('list');
		$starRatings = $this->HotelsStarRating->StarRating->find('list');
		$this->set(compact('hotels', 'starRatings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HotelsStarRating->id = $id;
		if (!$this->HotelsStarRating->exists()) {
			throw new NotFoundException(__('Invalid hotels star rating'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HotelsStarRating->delete()) {
			$this->Session->setFlash(__('Hotels star rating deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotels star rating was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
