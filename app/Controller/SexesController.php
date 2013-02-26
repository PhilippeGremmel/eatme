<?php
App::uses('AppController', 'Controller');
/**
 * Sexes Controller
 *
 * @property Sex $Sex
 */
class SexesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sex->recursive = 0;
		$this->set('sexes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sex->exists($id)) {
			throw new NotFoundException(__('Invalid sex'));
		}
		$options = array('conditions' => array('Sex.' . $this->Sex->primaryKey => $id));
		$this->set('sex', $this->Sex->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sex->create();
			if ($this->Sex->save($this->request->data)) {
				$this->Session->setFlash(__('The sex has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sex could not be saved. Please, try again.'));
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
		if (!$this->Sex->exists($id)) {
			throw new NotFoundException(__('Invalid sex'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sex->save($this->request->data)) {
				$this->Session->setFlash(__('The sex has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sex.' . $this->Sex->primaryKey => $id));
			$this->request->data = $this->Sex->find('first', $options);
		}
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
		$this->Sex->id = $id;
		if (!$this->Sex->exists()) {
			throw new NotFoundException(__('Invalid sex'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sex->delete()) {
			$this->Session->setFlash(__('Sex deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sex was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
