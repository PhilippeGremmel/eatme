<?php
App::uses('AppModel', 'Model');
/**
 * Picture Model
 *
 * @property User $User
 */
class Picture extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'picture_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
