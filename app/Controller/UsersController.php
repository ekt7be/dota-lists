<?php
App::uses('AppController', 'Controller', 'Console/Command', 'MyShell');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Auth');

    public function beforeFilter() {
        $this->Auth->allow('view', 'add');
    }
	
public function isAuthorized($user) {
    // All registered users can edit
	
    if ($this->action === 'edit' || $this->action === 'add') {
        return true;
    }
	return false;
}

public function download() {
        $this->viewClass = 'Media';
		$cmd = "mysqldump -u cs4750ekt7be -pfall2013 -h stardock.cs.virginia.edu cs4750ekt7be > ~/public_html/db_project/app/Config/dump.sql";
		exec($cmd);
        // Download app/outside_webroot_dir/example.zip
        $params = array(
            'id'        => 'dump.sql',
            'name'      => 'dump',
            'download'  => true,
            'extension' => 'sql',
            'path'      => 'Config' . DS
        );
        $this->set($params);
    }
	
public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
	 else {
        	$this->Session->setFlash(__('Invalid username or password, try again'));
    	 }
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

public function home() {

}

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		$role = $this->Auth->User('role');
		$uid = $this->Auth->User('id');
		$this->set('role',$role);
		$this->set('uid',$uid);
		if ($role != 'admin')
			$this->redirect(array('action' => 'home'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved. Please Login with your new account!'));
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
