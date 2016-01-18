<?php
App::uses('AppModel', 'Model');
/**
 * Title Model
 *
 * @property Comment $Comment
 */
class Title extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titel_name';
	public $recursive = 3;
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titel_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'title_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


}
