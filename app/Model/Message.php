<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property User $User
 */
class Message extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'content';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dest' => array(
			'className' => 'User',
			'foreignKey' => 'dest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

		public function isOwnedBy($message_id,$user_id){
		return $this->field('id',array('id'=>$message_id, 'user_id'=>$user_id)) === $message_id;
	}
}
