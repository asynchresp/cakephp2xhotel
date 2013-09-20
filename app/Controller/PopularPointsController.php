<?php
App::uses('AppController', 'Controller');
/**
 * PopularPoints Controller
 *
 * @property PopularPoint $PopularPoint
 * @property PaginatorComponent $Paginator
 */
class PopularPointsController extends AppController {

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
		$this->PopularPoint->recursive = 0;
		$this->set('popularPoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PopularPoint->exists($id)) {
			throw new NotFoundException(__('Invalid popular point'));
		}
		$options = array('conditions' => array('PopularPoint.' . $this->PopularPoint->primaryKey => $id));
		$this->set('popularPoint', $this->PopularPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PopularPoint->create();
			if ($this->PopularPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The popular point has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The popular point could not be saved. Please, try again.'));
			}
		}
		$sites = $this->PopularPoint->Site->find('list');
		$activityTypes = $this->PopularPoint->ActivityType->find('list');
		$countries = $this->PopularPoint->Country->find('list');
		$states = $this->PopularPoint->State->find('list');
		$cities = $this->PopularPoint->City->find('list');
		$tourPackages = $this->PopularPoint->TourPackage->find('list');
		$this->set(compact('sites', 'activityTypes', 'countries', 'states', 'cities', 'tourPackages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PopularPoint->exists($id)) {
			throw new NotFoundException(__('Invalid popular point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PopularPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The popular point has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The popular point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PopularPoint.' . $this->PopularPoint->primaryKey => $id));
			$this->request->data = $this->PopularPoint->find('first', $options);
		}
		$sites = $this->PopularPoint->Site->find('list');
		$activityTypes = $this->PopularPoint->ActivityType->find('list');
		$countries = $this->PopularPoint->Country->find('list');
		$states = $this->PopularPoint->State->find('list');
		$cities = $this->PopularPoint->City->find('list');
		$tourPackages = $this->PopularPoint->TourPackage->find('list');
		$this->set(compact('sites', 'activityTypes', 'countries', 'states', 'cities', 'tourPackages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PopularPoint->id = $id;
		if (!$this->PopularPoint->exists()) {
			throw new NotFoundException(__('Invalid popular point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PopularPoint->delete()) {
			$this->Session->setFlash(__('Popular point deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Popular point was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
