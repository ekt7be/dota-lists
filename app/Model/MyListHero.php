<?php
App::uses('AppModel', 'Model');
/**
 * MyListHero Model
 *
 * @property MyList $MyList
 * @property Hero $Hero
 */
class MyListHero extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'my_list_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hero_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MyList' => array(
			'className' => 'MyList',
			'foreignKey' => 'my_list_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hero' => array(
			'className' => 'Hero',
			'foreignKey' => 'hero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
