<?php
class SurpriseCheck extends AppModel {
	var $name = 'SurpriseCheck';
	var $validate = array(
		'qualifying_circulation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'auditor_branch_id' => array(
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

	var $belongsTo = array(
		'QualifyingCirculation' => array(
			'className' => 'QualifyingCirculation',
			'foreignKey' => 'qualifying_circulation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AuditorBranch' => array(
			'className' => 'AuditorBranch',
			'foreignKey' => 'auditor_branch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
