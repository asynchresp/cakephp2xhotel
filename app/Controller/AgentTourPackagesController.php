<?php
App::uses('AppController', 'Controller');
/**
 * AgentTourPackages Controller
 *
 * @property AgentTourPackage $AgentTourPackage
 * @property PaginatorComponent $Paginator
 */
class AgentTourPackagesController extends AppController {

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
		$this->AgentTourPackage->recursive = 0;
		$this->set('agentTourPackages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AgentTourPackage->exists($id)) {
			throw new NotFoundException(__('Invalid agent tour package'));
		}
		$options = array('conditions' => array('AgentTourPackage.' . $this->AgentTourPackage->primaryKey => $id));
		$this->set('agentTourPackage', $this->AgentTourPackage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AgentTourPackage->create();
			if ($this->AgentTourPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The agent tour package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent tour package could not be saved. Please, try again.'));
			}
		}
		$sites = $this->AgentTourPackage->Site->find('list');
		$activityTypes = $this->AgentTourPackage->ActivityType->find('list');
		$popularPoints = $this->AgentTourPackage->PopularPoint->find('list');
		$taxes = $this->AgentTourPackage->Tax->find('list');
		$activityTypes = $this->AgentTourPackage->ActivityType->find('list');
		$popularPoints = $this->AgentTourPackage->PopularPoint->find('list');
		$sites = $this->AgentTourPackage->Site->find('list');
		$taxes = $this->AgentTourPackage->Tax->find('list');
		$this->set(compact('sites', 'activityTypes', 'popularPoints', 'taxes', 'activityTypes', 'popularPoints', 'sites', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AgentTourPackage->exists($id)) {
			throw new NotFoundException(__('Invalid agent tour package'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AgentTourPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The agent tour package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent tour package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AgentTourPackage.' . $this->AgentTourPackage->primaryKey => $id));
			$this->request->data = $this->AgentTourPackage->find('first', $options);
		}
		$sites = $this->AgentTourPackage->Site->find('list');
		$activityTypes = $this->AgentTourPackage->ActivityType->find('list');
		$popularPoints = $this->AgentTourPackage->PopularPoint->find('list');
		$taxes = $this->AgentTourPackage->Tax->find('list');
		$activityTypes = $this->AgentTourPackage->ActivityType->find('list');
		$popularPoints = $this->AgentTourPackage->PopularPoint->find('list');
		$sites = $this->AgentTourPackage->Site->find('list');
		$taxes = $this->AgentTourPackage->Tax->find('list');
		$this->set(compact('sites', 'activityTypes', 'popularPoints', 'taxes', 'activityTypes', 'popularPoints', 'sites', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AgentTourPackage->id = $id;
		if (!$this->AgentTourPackage->exists()) {
			throw new NotFoundException(__('Invalid agent tour package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AgentTourPackage->delete()) {
			$this->Session->setFlash(__('Agent tour package deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Agent tour package was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
