<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {

	public function isAuthorized($user) {
		switch ($this->action) {
			case 'add':
				return isset($user['id']); // utilisateurs connectés

			case 'delete':
			case 'edit':
				if(isset($user['group_id']) && $user['group_id'] == 1) // admin
					return true;
				
				$Message_id = $this->request->params['pass'][0]; // auteur
				$user_id = $user['id'];
				if($this->Message->isOwnedBy($message_id, $user_id))
					return true;
		}
		return parent::isAuthorized($user);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			$this->request->data['Message']['user_id'] = $this->viewVars['me']['id'];
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been sent'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be sent. Please, try again.'));
			}
		}
		$dests = $this->Message->User->find('list');
		$this->set(compact('dests'));
		$this->set('message','yop');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been sent'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be sent. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Post removed'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been sent'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be sent. Please, try again.'));
			}
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$users = $this->Message->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
