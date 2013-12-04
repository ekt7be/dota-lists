<?php
App::uses('AppController', 'Controller');
/**
 * Heroes Controller
 *
 * @property Hero $Hero
 * @property PaginatorComponent $Paginator
 */
class HeroesController extends AppController {

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
	public function index() {
		$this->Hero->recursive = 0;
		$this->set('heroes', $this->Paginator->paginate());
		$role = $this->Auth->User('role');
		$this->set('role',$role);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hero->exists($id)) {
			throw new NotFoundException(__('Invalid hero'));
		}
		$options = array('conditions' => array('Hero.' . $this->Hero->primaryKey => $id));
		$this->set('hero', $this->Hero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hero->create();
			if ($this->Hero->save($this->request->data)) {
				$this->Session->setFlash(__('The hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hero->exists($id)) {
			throw new NotFoundException(__('Invalid hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hero->save($this->request->data)) {
				$this->Session->setFlash(__('The hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hero.' . $this->Hero->primaryKey => $id));
			$this->request->data = $this->Hero->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hero->id = $id;
		if (!$this->Hero->exists()) {
			throw new NotFoundException(__('Invalid hero'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hero->delete()) {
			$this->Session->setFlash(__('The hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
