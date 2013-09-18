<?php
App::uses('AppController', 'Controller');
/**
 * TourPackagesHotelRooms Controller
 *
 * @property TourPackagesHotelRoom $TourPackagesHotelRoom
 * @property PaginatorComponent $Paginator
 */
class TourPackagesHotelRoomsController extends AppController {

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
		$this->TourPackagesHotelRoom->recursive = 0;
		$this->set('tourPackagesHotelRooms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourPackagesHotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages hotel room'));
		}
		$options = array('conditions' => array('TourPackagesHotelRoom.' . $this->TourPackagesHotelRoom->primaryKey => $id));
		$this->set('tourPackagesHotelRoom', $this->TourPackagesHotelRoom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourPackagesHotelRoom->create();
			if ($this->TourPackagesHotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages hotel room could not be saved. Please, try again.'));
			}
		}
		$tourPackages = $this->TourPackagesHotelRoom->TourPackage->find('list');
		$hotelRooms = $this->TourPackagesHotelRoom->HotelRoom->find('list');
		$this->set(compact('tourPackages', 'hotelRooms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TourPackagesHotelRoom->exists($id)) {
			throw new NotFoundException(__('Invalid tour packages hotel room'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TourPackagesHotelRoom->save($this->request->data)) {
				$this->Session->setFlash(__('The tour packages hotel room has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour packages hotel room could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourPackagesHotelRoom.' . $this->TourPackagesHotelRoom->primaryKey => $id));
			$this->request->data = $this->TourPackagesHotelRoom->find('first', $options);
		}
		$tourPackages = $this->TourPackagesHotelRoom->TourPackage->find('list');
		$hotelRooms = $this->TourPackagesHotelRoom->HotelRoom->find('list');
		$this->set(compact('tourPackages', 'hotelRooms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TourPackagesHotelRoom->id = $id;
		if (!$this->TourPackagesHotelRoom->exists()) {
			throw new NotFoundException(__('Invalid tour packages hotel room'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TourPackagesHotelRoom->delete()) {
			$this->Session->setFlash(__('Tour packages hotel room deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour packages hotel room was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
