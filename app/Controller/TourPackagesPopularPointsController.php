<?php
App::uses('AppController', 'Controller');
/**
 * TourPackagesPopularPoints Controller
 *
 * @property TourPackagesPopularPoint $TourPackagesPopularPoint
 * @property PaginatorComponent $Paginator
 */
class TourPackagesPopularPointsController extends AppController {

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
		$this->TourPackagesPopularPoint->recursive = 0;
		$this->set('tourPackagesPopularPoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourPackagesPopularPoint->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages popular point'));
		}
		$options = array('conditions' => array('TourPackagesPopularPoint.' . $this->TourPackagesPopularPoint->primaryKey => $id));
		$this->set('tourPackagesPopularPoint', $this->TourPackagesPopularPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourPackagesPopularPoint->create();
			if ($this->TourPackagesPopularPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages popular point has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages popular point could not be saved. Please, try again.'));
			}
		}
		$tourPackages = $this->TourPackagesPopularPoint->TourPackage->find('list');
		$popularPoints = $this->TourPackagesPopularPoint->PopularPoint->find('list');
		$this->set(compact('tourPackages', 'popularPoints'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TourPackagesPopularPoint->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages popular point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TourPackagesPopularPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages popular point has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages popular point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourPackagesPopularPoint.' . $this->TourPackagesPopularPoint->primaryKey => $id));
			$this->request->data = $this->TourPackagesPopularPoint->find('first', $options);
		}
		$tourPackages = $this->TourPackagesPopularPoint->TourPackage->find('list');
		$popularPoints = $this->TourPackagesPopularPoint->PopularPoint->find('list');
		$this->set(compact('tourPackages', 'popularPoints'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TourPackagesPopularPoint->id = $id;
		if (!$this->TourPackagesPopularPoint->exists()) {
			throw new NotFoundException(__('Invalid tour packages popular point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TourPackagesPopularPoint->delete()) {
			$this->Session->setFlash(__('Tour packages popular point deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour packages popular point was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
