<?php
App::uses('AppController', 'Controller');
/**
 * TourPackagesTaxes Controller
 *
 * @property TourPackagesTax $TourPackagesTax
 * @property PaginatorComponent $Paginator
 */
class TourPackagesTaxesController extends AppController {

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
		$this->TourPackagesTax->recursive = 0;
		$this->set('tourPackagesTaxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourPackagesTax->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages tax'));
		}
		$options = array('conditions' => array('TourPackagesTax.' . $this->TourPackagesTax->primaryKey => $id));
		$this->set('tourPackagesTax', $this->TourPackagesTax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourPackagesTax->create();
			if ($this->TourPackagesTax->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages tax could not be saved. Please, try again.'));
			}
		}
		$tourPackages = $this->TourPackagesTax->TourPackage->find('list');
		$taxes = $this->TourPackagesTax->Tax->find('list');
		$this->set(compact('tourPackages', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TourPackagesTax->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages tax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TourPackagesTax->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages tax could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourPackagesTax.' . $this->TourPackagesTax->primaryKey => $id));
			$this->request->data = $this->TourPackagesTax->find('first', $options);
		}
		$tourPackages = $this->TourPackagesTax->TourPackage->find('list');
		$taxes = $this->TourPackagesTax->Tax->find('list');
		$this->set(compact('tourPackages', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TourPackagesTax->id = $id;
		if (!$this->TourPackagesTax->exists()) {
			throw new NotFoundException(__('Invalid tour packages tax'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TourPackagesTax->delete()) {
			$this->Session->setFlash(__('Tour packages tax deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour packages tax was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
