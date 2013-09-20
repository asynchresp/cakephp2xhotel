<?php
App::uses('AppController', 'Controller');
/**
 * TourPackagesActivityTypes Controller
 *
 * @property TourPackagesActivityType $TourPackagesActivityType
 * @property PaginatorComponent $Paginator
 */
class TourPackagesActivityTypesController extends AppController {

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
		$this->TourPackagesActivityType->recursive = 0;
		$this->set('tourPackagesActivityTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourPackagesActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages activity type'));
		}
		$options = array('conditions' => array('TourPackagesActivityType.' . $this->TourPackagesActivityType->primaryKey => $id));
		$this->set('tourPackagesActivityType', $this->TourPackagesActivityType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourPackagesActivityType->create();
			if ($this->TourPackagesActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages activity type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages activity type could not be saved. Please, try again.'));
			}
		}
		$tourPackages = $this->TourPackagesActivityType->TourPackage->find('list');
		$activityTypes = $this->TourPackagesActivityType->ActivityType->find('list');
		$this->set(compact('tourPackages', 'activityTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TourPackagesActivityType->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages activity type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TourPackagesActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages activity type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages activity type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourPackagesActivityType.' . $this->TourPackagesActivityType->primaryKey => $id));
			$this->request->data = $this->TourPackagesActivityType->find('first', $options);
		}
		$tourPackages = $this->TourPackagesActivityType->TourPackage->find('list');
		$activityTypes = $this->TourPackagesActivityType->ActivityType->find('list');
		$this->set(compact('tourPackages', 'activityTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TourPackagesActivityType->id = $id;
		if (!$this->TourPackagesActivityType->exists()) {
			throw new NotFoundException(__('Invalid tour packages activity type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TourPackagesActivityType->delete()) {
			$this->Session->setFlash(__('Tour packages activity type deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour packages activity type was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
