<?php
App::uses('AppController', 'Controller');
/**
 * Taxes Controller
 *
 * @property Tax $Tax
 * @property PaginatorComponent $Paginator
 */
class TaxesController extends AppController {

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
		$this->Tax->recursive = 0;
		$this->set('taxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tax->exists($id)) {
			throw new NotFoundException(__('Invalid tax'));
		}
		$options = array('conditions' => array('Tax.' . $this->Tax->primaryKey => $id));
		$this->set('tax', $this->Tax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tax->create();
			if ($this->Tax->save($this->request->data)) {
				$this->Session->setFlash(__('The tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Tax->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->Tax->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->Tax->State->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$cities = $this->Tax->City->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotelRooms = $this->Tax->HotelRoom->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotels = $this->Tax->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$tourPackages = $this->Tax->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('sites', 'countries', 'states', 'cities', 'hotelRooms', 'hotels', 'tourPackages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tax->exists($id)) {
			throw new NotFoundException(__('Invalid tax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tax->save($this->request->data)) {
				$this->Session->setFlash(__('The tax has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tax.' . $this->Tax->primaryKey => $id));
			$this->request->data = $this->Tax->find('first', $options);
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		$sites = $this->Tax->Site->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$countries = $this->Tax->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->Tax->State->find('list',array('conditions'=>array('country_id'=>$selCountry,'status'=>1),'order'=>'name'));
		$cities = $this->Tax->City->find('list',array('conditions'=>array('state_id'=>$selState,'status'=>1),'order'=>'name'));
		$hotelRooms = $this->Tax->HotelRoom->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$hotels = $this->Tax->Hotel->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$tourPackages = $this->Tax->TourPackage->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('sites', 'countries', 'states', 'cities', 'hotelRooms', 'hotels', 'tourPackages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tax->id = $id;
		if (!$this->Tax->exists()) {
			throw new NotFoundException(__('Invalid tax'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tax->delete()) {
			$this->Session->setFlash(__('Tax deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tax was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->Tax->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->Tax->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }	
}
