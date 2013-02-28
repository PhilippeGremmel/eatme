<?php
App::uses('AppController', 'Controller');
/**
 * Pictures Controller
 *
 * @property Picture $Picture
 */
class PicturesController extends AppController {
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	public function all(){
		$p = $this->Picture->find('all');
		$this->set('pictures',$p);
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {


		if($this->request->is('post')){
					$data = $this->request->data;
					$dir = WWW_ROOT.'files/users/';
				
			
					$f = explode ('.',$data['Picture']['url']['name']);
					$ext = '.'.end($f);
					$filename = Inflector::slug(implode('.',array_slice($f,0,-1)).'-');
					// sauvegarde bdd
					$success = $this->Picture->save(array(
						'legend' => $data['Picture']['legend'],

						'url' => $filename.$ext,

				
						));
						if ($success) {
							move_uploaded_file($data['Picture']['url']['tmp_name'], $dir.DS.$filename.$ext);
						}else {
							$this->Session->setFlash("L'image n'est pas au bon format","notif",array('type'=>'error'
								));
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
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
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
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
