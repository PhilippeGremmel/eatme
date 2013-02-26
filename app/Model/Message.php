<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property User $User
 * @property User $User
 * @property Dest $Dest
 */
class Message extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'message_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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
			'className' => 'Dest',
			'foreignKey' => 'dest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
