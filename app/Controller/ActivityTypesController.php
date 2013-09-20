<?php
App::uses('AppController', 'Controller');
/**
 * ActivityTypes Controller
 *
 * @property ActivityType $ActivityType
 * @property PaginatorComponent $Paginator
 */
class ActivityTypesController extends AppController {

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
		$this->ActivityType->recursive = 0;
		$this->set('activityTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		$options = array('conditions' => array('ActivityType.' . $this->ActivityType->primaryKey => $id));
		$this->set('activityType', $this->ActivityType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ActivityType->create();
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'));
			}
		}
		$sites = $this->ActivityType->Site->find('list');
		$tourPackages = $this->ActivityType->TourPackage->find('list');
		$this->set(compact('sites', 'tourPackages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivityType.' . $this->ActivityType->primaryKey => $id));
			$this->request->data = $this->ActivityType->find('first', $options);
		}
		$sites = $this->ActivityType->Site->find('list');
		$tourPackages = $this->ActivityType->TourPackage->find('list');
		$this->set(compact('sites', 'tourPackages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ActivityType->id = $id;
		if (!$this->ActivityType->exists()) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActivityType->delete()) {
			$this->Session->setFlash(__('Activity type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activity type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
