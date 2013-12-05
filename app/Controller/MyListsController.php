<?php
App::uses('AppController', 'Controller', 'Auth', 'Hero');
/**
 * MyLists Controller
 *
 * @property MyList $MyList
 * @property PaginatorComponent $Paginator
 */
class MyListsController extends AppController {

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
		$uid = $this->Auth->User('id');
		$this->set('uid', $uid);
		$myLists = $this->MyList->findAllByUserId($uid);
		$this->MyList->recursive = 0;
		//$this->set('myLists', $this->Paginator->paginate());
		$this->set('myLists', $myLists);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->MyList->exists($id)) {
			throw new NotFoundException(__('Invalid my list'));
		}
		$options = array('conditions' => array('MyList.' . $this->MyList->primaryKey => $id));
		$this->set('myList', $this->MyList->find('first', $options));
	    $this->set('heroes', $this->MyList->MyListHero->Hero->find('list'));
		//$this->set('heroes', $heroes);
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
			$this->MyList->create();
			$this->MyList->set('user_id', $uid);
			$this->MyList->save();
			if ($this->MyList->save($this->request->data)) {
				$this->Session->setFlash(__('The list has been saved.'));
				
				foreach($this->request->data['MyList']['heroes'] as $hero)
				{
					$this->MyList->MyListHero->create();
					$this->MyList->MyListHero->set( array(
					'my_list_id' => $this->MyList->id,
					'hero_id' => $hero
					));
					$this->MyList->MyListHero->save();
				}
				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The list could not be saved. Please, try again.'));
			}
		}
		$users = $this->MyList->User->find('list');
		$heroes = $this->MyList->MyListHero->Hero->find('list');
		$this->set(compact('users', 'heroes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MyList->exists($id)) {
			throw new NotFoundException(__('Invalid my list'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MyList->save($this->request->data)) {
				$this->Session->setFlash(__('The my list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The my list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MyList.' . $this->MyList->primaryKey => $id));
			$this->request->data = $this->MyList->find('first', $options);
		}
		$users = $this->MyList->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MyList->id = $id;
		if (!$this->MyList->exists()) {
			throw new NotFoundException(__('Invalid my list'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MyList->delete()) {
			$this->Session->setFlash(__('The my list has been deleted.'));
		} else {
			$this->Session->setFlash(__('The my list could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
