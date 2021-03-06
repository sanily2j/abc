<?php
class Role extends AppModel {
	var $name = 'Role';
	var $displayField = 'name';
//        var $actsAs = array('Acl' => 'requester');
        var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                    ),
                    'isUnique' => array(
                            'rule' => array('isUnique'),
                            'message' => 'Duplicate value. Please enter unique value.',
                            //'allowEmpty' => false,
                            //'required' => false,
                            //'last' => false, // Stop validation after this rule
                            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                    ),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'role_id',
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
        function parentNode()
        {
            return null;
        }
        function beforeSave()
        {
            return ($this->id != 1);
        }

        function beforeDelete()
        {
            return ($this->id != 1);
        }
	
}
