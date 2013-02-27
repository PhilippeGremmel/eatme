<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent','Controller/Component');
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
	public $useTable = 'pictures'; 
		public $validate = array(
			'url' => array(
				'rule' 		 => '/^.*\.(jpg|png|jpg)$/',
				'allowEmpty' => true,
				'message'	 => "L'extention n'est pas valide"
					)
			); 
}
