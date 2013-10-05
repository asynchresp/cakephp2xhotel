<?php
App::uses('AppController', 'Controller');
/**
 * Sites Controller
 *
 * @property Site $Site
 * @property PaginatorComponent $Paginator
 */
class SitesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	/*public $view   = 'Theme';
    public $theme = 'default';*/
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Site->recursive = 0;
		$this->set('sites', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
		$this->set('site', $this->Site->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Site->create();
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Site->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->Site->State->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$cities = $this->Site->City->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$this->set(compact('countries', 'states', 'cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
	
		if (!$this->Site->exists($id)) {

			throw new NotFoundException(__('Invalid site'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
//                        pr($this->request->data);
//                        die;
                    
                        if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
			}
		} else { 
			$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
			$this->request->data = $this->Site->find('first', $options);
			//pr($this->request->data);
			$selCountry = $this->request->data['Country']['id'];
			$selState = $this->request->data['State']['id'];
		}
		$countries = $this->Site->Country->find('list',array('conditions'=>array('status'=>1),'order'=>'name'));
		$states = $this->Site->State->find('list',array('conditions'=>array('country_id'=>$selCountry,'status'=>1),'order'=>'name'));
		$cities = $this->Site->City->find('list',array('conditions'=>array('state_id'=>$selState,'status'=>1),'order'=>'name'));
		$this->set(compact('countries', 'states', 'cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Site->id = $id;
		if (!$this->Site->exists()) {
			throw new NotFoundException(__('Invalid site'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Site->delete()) {
			$this->Session->setFlash(__('Site deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_getcity(){
            //pr($this->data);
            $stateId = $this->data['state_id'];
		    $cities = $this->Site->City->find('list',array('conditions'=>array('state_id'=>$stateId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('cities'));
			$this->layout = 'ajax';
    }

	public function admin_getstate(){
            //pr($this->data);
            $countryId = $this->data['country_id'];
		    $states = $this->Site->State->find('list',array('conditions'=>array('country_id'=>$countryId,'status'=>1),'recursive'=>'-1','order'=>'name'));
            $this->set(compact('states'));
			$this->layout = 'ajax';
    }	
}
