<?php
App::uses('AppController', 'Controller');
/**
 * HeroBuilds Controller
 *
 * @property HeroBuild $HeroBuild
 * @property PaginatorComponent $Paginator
 */
class HeroBuildsController extends AppController {

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
	
		$this->HeroBuild->recursive = 0;
		$this->set('heroBuilds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HeroBuild->exists($id)) {
			throw new NotFoundException(__('Invalid hero build'));
		}
		$options = array('conditions' => array('HeroBuild.' . $this->HeroBuild->primaryKey => $id));
		$this->set('heroBuild', $this->HeroBuild->find('first', $options));
		$this->set('items', $this->HeroBuild->HeroBuildItem->Item->find('list'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroBuild->create();
			if ($this->HeroBuild->save($this->request->data)) {
				$this->Session->setFlash(__('The hero build has been saved.'));
				
				foreach($this->request->data['HeroBuild']['items'] as $item)
				{
					$this->HeroBuild->HeroBuildItem->create();
					$this->HeroBuild->HeroBuildItem->set( array(
					'hero_build_id' => $this->HeroBuild->id,
					'item_id' => $item
					));
					$this->HeroBuild->HeroBuildItem->save();
				}
				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero build could not be saved. Please, try again.'));
			}
		}
		$items = $this->HeroBuild->HeroBuildItem->Item->find('list');
		$heroes = $this->HeroBuild->Hero->find('list');
		$this->set(compact('heroes', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HeroBuild->exists($id)) {
			throw new NotFoundException(__('Invalid hero build'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HeroBuild->save($this->request->data)) {
				$this->Session->setFlash(__('The hero build has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero build could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HeroBuild.' . $this->HeroBuild->primaryKey => $id));
			$this->request->data = $this->HeroBuild->find('first', $options);
		}
		$heroes = $this->HeroBuild->Hero->find('list');
		$this->set(compact('heroes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HeroBuild->id = $id;
		if (!$this->HeroBuild->exists()) {
			throw new NotFoundException(__('Invalid hero build'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HeroBuild->delete()) {
			$this->Session->setFlash(__('The hero build has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hero build could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
