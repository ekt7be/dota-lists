<?php
App::uses('AppController', 'Controller');
/**
 * HeroBuildItems Controller
 *
 * @property HeroBuildItem $HeroBuildItem
 * @property PaginatorComponent $Paginator
 */
class HeroBuildItemsController extends AppController {

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
		$this->HeroBuildItem->recursive = 0;
		$this->set('heroBuildItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HeroBuildItem->exists($id)) {
			throw new NotFoundException(__('Invalid hero build item'));
		}
		$options = array('conditions' => array('HeroBuildItem.' . $this->HeroBuildItem->primaryKey => $id));
		$this->set('heroBuildItem', $this->HeroBuildItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroBuildItem->create();
			if ($this->HeroBuildItem->save($this->request->data)) {
				$this->Session->setFlash(__('The hero build item has been saved.'));
				return $this->redirect(array('controller' => 'hero_builds','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero build item could not be saved. Please, try again.'));
			}
		}
		$heroBuilds = $this->HeroBuildItem->HeroBuild->find('list');
		$items = $this->HeroBuildItem->Item->find('list');
		$this->set(compact('heroBuilds', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HeroBuildItem->exists($id)) {
			throw new NotFoundException(__('Invalid hero build item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HeroBuildItem->save($this->request->data)) {
				$this->Session->setFlash(__('The hero build item has been saved.'));
				return $this->redirect(array('controller' => 'hero_builds','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero build item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HeroBuildItem.' . $this->HeroBuildItem->primaryKey => $id));
			$this->request->data = $this->HeroBuildItem->find('first', $options);
		}
		$heroBuilds = $this->HeroBuildItem->HeroBuild->find('list');
		$items = $this->HeroBuildItem->Item->find('list');
		$this->set(compact('heroBuilds', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HeroBuildItem->id = $id;
		if (!$this->HeroBuildItem->exists()) {
			throw new NotFoundException(__('Invalid hero build item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HeroBuildItem->delete()) {
			$this->Session->setFlash(__('The hero build item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hero build item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'hero_builds','action' => 'index'));
	}}
