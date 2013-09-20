<?php
App::uses('AppController', 'Controller');
/**
 * TourPackages Controller
 *
 * @property TourPackage $TourPackage
 * @property PaginatorComponent $Paginator
 */
class TourPackagesController extends AppController {

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
		$this->TourPackage->recursive = 0;
		$this->set('tourPackages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourPackage->exists($id)) {
			throw new NotFoundException(__('Invalid tour package'));
		}
		$options = array('conditions' => array('TourPackage.' . $this->TourPackage->primaryKey => $id));
		$this->set('tourPackage', $this->TourPackage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourPackage->create();
			if ($this->TourPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The tour package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour package could not be saved. Please, try again.'));
			}
		}
		$sites = $this->TourPackage->Site->find('list');
		$hotels = $this->TourPackage->Hotel->find('list');
		$roomTypes = $this->TourPackage->RoomType->find('list');
		$hotelRooms = $this->TourPackage->HotelRoom->find('list');
		$activityTypes = $this->TourPackage->ActivityType->find('list');
		$popularPoints = $this->TourPackage->PopularPoint->find('list');
		$taxes = $this->TourPackage->Tax->find('list');
		$activityTypes = $this->TourPackage->ActivityType->find('list');
		$hotelRooms = $this->TourPackage->HotelRoom->find('list');
		$popularPoints = $this->TourPackage->PopularPoint->find('list');
		$taxes = $this->TourPackage->Tax->find('list');
		$this->set(compact('sites', 'hotels', 'roomTypes', 'hotelRooms', 'activityTypes', 'popularPoints', 'taxes', 'activityTypes', 'hotelRooms', 'popularPoints', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TourPackage->exists($id)) {
			throw new NotFoundException(__('Invalid tour package'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TourPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The tour package has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourPackage.' . $this->TourPackage->primaryKey => $id));
			$this->request->data = $this->TourPackage->find('first', $options);
		}
		$sites = $this->TourPackage->Site->find('list');
		$hotels = $this->TourPackage->Hotel->find('list');
		$roomTypes = $this->TourPackage->RoomType->find('list');
		$hotelRooms = $this->TourPackage->HotelRoom->find('list');
		$activityTypes = $this->TourPackage->ActivityType->find('list');
		$popularPoints = $this->TourPackage->PopularPoint->find('list');
		$taxes = $this->TourPackage->Tax->find('list');
		$activityTypes = $this->TourPackage->ActivityType->find('list');
		$hotelRooms = $this->TourPackage->HotelRoom->find('list');
		$popularPoints = $this->TourPackage->PopularPoint->find('list');
		$taxes = $this->TourPackage->Tax->find('list');
		$this->set(compact('sites', 'hotels', 'roomTypes', 'hotelRooms', 'activityTypes', 'popularPoints', 'taxes', 'activityTypes', 'hotelRooms', 'popularPoints', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TourPackage->id = $id;
		if (!$this->TourPackage->exists()) {
			throw new NotFoundException(__('Invalid tour package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TourPackage->delete()) {
			$this->Session->setFlash(__('Tour package deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour package was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
