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
		$sites = $this->PopularPoint->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$activityTypes = $this->PopularPoint->ActivityType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->PopularPoint->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->PopularPoint->State->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$cities = $this->PopularPoint->City->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$tourPackages = $this->PopularPoint->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
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
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		$sites = $this->PopularPoint->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$activityTypes = $this->PopularPoint->ActivityType->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->PopularPoint->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->PopularPoint->State->find('list',array('conditions'=>array('country_id'=>$selCountry,'status'=>1),'order'=>'name'));
		$cities = $this->PopularPoint->City->find('list',array('conditions'=>array('state_id'=>$selState,'status'=>1),'order'=>'name'));
		$tourPackages = $this->PopularPoint->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
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

	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->PopularPoint->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->PopularPoint->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }	
}
