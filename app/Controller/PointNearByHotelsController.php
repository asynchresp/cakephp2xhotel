<?php
App::uses('AppController', 'Controller');
/**
 * PointNearByHotels Controller
 *
 * @property PointNearByHotel $PointNearByHotel
 * @property PaginatorComponent $Paginator
 */
class PointNearByHotelsController extends AppController {

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
		$this->PointNearByHotel->recursive = 0;
		$this->set('pointNearByHotels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PointNearByHotel->exists($id)) {
			throw new NotFoundException(__('Invalid point near by hotel'));
		}
		$options = array('conditions' => array('PointNearByHotel.' . $this->PointNearByHotel->primaryKey => $id));
		$this->set('pointNearByHotel', $this->PointNearByHotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PointNearByHotel->create();
			if ($this->PointNearByHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The point near by hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point near by hotel could not be saved. Please, try again.'));
			}
		}
		$sites = $this->PointNearByHotel->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->PointNearByHotel->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->PointNearByHotel->State->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$cities = $this->PointNearByHotel->City->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotels = $this->PointNearByHotel->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('sites', 'countries', 'states', 'cities', 'hotels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PointNearByHotel->exists($id)) {
			throw new NotFoundException(__('Invalid point near by hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PointNearByHotel->save($this->request->data)) {
				$this->Session->setFlash(__('The point near by hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point near by hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PointNearByHotel.' . $this->PointNearByHotel->primaryKey => $id));
			$this->request->data = $this->PointNearByHotel->find('first', $options);
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		$sites = $this->PointNearByHotel->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->PointNearByHotel->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->PointNearByHotel->State->find('list',array('conditions'=>array('country_id'=>$selCountry,'status'=>1),'order'=>'name'));
		$cities = $this->PointNearByHotel->City->find('list',array('conditions'=>array('state_id'=>$selState,'status'=>1),'order'=>'name'));
		$hotels = $this->PointNearByHotel->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('sites', 'countries', 'states', 'cities', 'hotels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PointNearByHotel->id = $id;
		if (!$this->PointNearByHotel->exists()) {
			throw new NotFoundException(__('Invalid point near by hotel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PointNearByHotel->delete()) {
			$this->Session->setFlash(__('Point near by hotel deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Point near by hotel was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->PointNearByHotel->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->PointNearByHotel->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }	
}
