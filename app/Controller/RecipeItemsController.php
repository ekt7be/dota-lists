<?php
App::uses('AppController', 'Controller');
/**
 * RecipeItems Controller
 *
 * @property RecipeItem $RecipeItem
 * @property PaginatorComponent $Paginator
 */
class RecipeItemsController extends AppController {

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
		$this->RecipeItem->recursive = 0;
		$this->set('recipeItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecipeItem->exists($id)) {
			throw new NotFoundException(__('Invalid recipe item'));
		}
		$options = array('conditions' => array('RecipeItem.' . $this->RecipeItem->primaryKey => $id));
		$this->set('recipeItem', $this->RecipeItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecipeItem->create();
			if ($this->RecipeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe item could not be saved. Please, try again.'));
			}
		}
		$recipes = $this->RecipeItem->Recipe->find('list');
		$items = $this->RecipeItem->Item->find('list');
		$this->set(compact('recipes', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecipeItem->exists($id)) {
			throw new NotFoundException(__('Invalid recipe item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RecipeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecipeItem.' . $this->RecipeItem->primaryKey => $id));
			$this->request->data = $this->RecipeItem->find('first', $options);
		}
		$recipes = $this->RecipeItem->Recipe->find('list');
		$items = $this->RecipeItem->Item->find('list');
		$this->set(compact('recipes', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecipeItem->id = $id;
		if (!$this->RecipeItem->exists()) {
			throw new NotFoundException(__('Invalid recipe item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecipeItem->delete()) {
			$this->Session->setFlash(__('The recipe item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recipe item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
