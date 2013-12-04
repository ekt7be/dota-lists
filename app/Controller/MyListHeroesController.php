<?php
App::uses('AppController', 'Controller');
/**
 * MyListHeroes Controller
 *
 * @property MyListHero $MyListHero
 * @property PaginatorComponent $Paginator
 */
class MyListHeroesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

public function isAuthorized($user) {
    // All registered users can add, delete, edit
    if ($this->action === 'add' | $this->action === 'edit' | $this->action === 'delete') {
        return true;
    }
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MyListHero->recursive = 0;
		$this->set('myListHeroes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MyListHero->exists($id)) {
			throw new NotFoundException(__('Invalid my list hero'));
		}
		$options = array('conditions' => array('MyListHero.' . $this->MyListHero->primaryKey => $id));
		$this->set('myListHero', $this->MyListHero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$uid = $this->Auth->User('id');


		$this->set('uid', $uid);
		if ($this->request->is('post')) {
			$this->MyListHero->create();
			if ($this->MyListHero->save($this->request->data)) {
				$this->Session->setFlash(__('The my list hero has been saved.'));
				return $this->redirect(array('controller'=> 'my_lists','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The my list hero could not be saved. Please, try again.'));
			}
		}
		$myLists = $this->MyListHero->MyList->find('list');
		$heroes = $this->MyListHero->Hero->find('list');
		$this->set(compact('myLists', 'heroes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MyListHero->exists($id)) {
			throw new NotFoundException(__('Invalid my list hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MyListHero->save($this->request->data)) {
				$this->Session->setFlash(__('The my list hero has been saved.'));
				return $this->redirect(array('controller'=> 'my_lists','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The my list hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MyListHero.' . $this->MyListHero->primaryKey => $id));
			$this->request->data = $this->MyListHero->find('first', $options);
		}
		$myLists = $this->MyListHero->MyList->find('list');
		$heroes = $this->MyListHero->Hero->find('list');
		$this->set(compact('myLists', 'heroes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MyListHero->id = $id;
		if (!$this->MyListHero->exists()) {
			throw new NotFoundException(__('Invalid my list hero'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MyListHero->delete()) {
			$this->Session->setFlash(__('The my list hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The my list hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller'=> 'my_lists','action' => 'index'));
	}}
